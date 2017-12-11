<?php

namespace App\Http\Controllers;

use App\Mail\orderConfirm;
use App\Product;
use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use DB;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function getBill($confirm)
    {
        if ($confirm == 3) {
            $carts = Bill::where('deleted', 1)->orderBy('id')->get();
        } elseif ($confirm == 1 OR $confirm == 0) {
            $carts = Bill::where('confirm', $confirm)->where('deleted','0')->orderBy('id')->get();
        } elseif (!($confirm == 1 OR $confirm == 0)) {
            $carts = Bill::orderBy('id')->get();
        }

        return view('admin.cart.cart', compact('carts'));
    }

    public function getBillDetail($id)
    {
        $productListOfBIll = DB::select("		
            SELECT *,b.id as billID ,bd.id as billDetailId,
              bd.quantity as billDetailQuantity, p.quantity as productQuantity
            FROM bill_detail bd
            LEFT JOIN products p ON  bd.id_product = p.id
            LEFT JOIN bills b ON bd.id_bill = b.id
            WHERE b.id = ? ", [$id]);
        return view('admin.cart.billDetail', compact('productListOfBIll'));
    }

    public function postBillDetail(Request $request)
    {
        if ($request->has('edit')) {
            $data = $request->all(); // lấy tất cả dữ liệu các input

            foreach ($data as $key => $value) {
                // loại bỏ các input khác. chỉ lấy input về sản phẩm và số lượng.
                if ($key != "_token" AND $key != "dataTables-example_length" AND $key != "billID" AND $key != "edit" AND $key != "rdoConfirmOrDelete") {
                    $oldQuantity = $request->old($key); // lấy giá trị cũ
                    if ($oldQuantity != $value) { // nếu số lượng cũ khác số lượng mới thì cập nhật => tăng tốc độ.
                        $billDetail = BillDetail::find($key);
                        $billDetail->quantity = $value;
                        $billDetail->save();
                        // cập nhật số lượng tồn kho của sản phẩm. nếu xác nhận đơn hàng
                        //( nếu chưa xác nhận đơn hàng, thì sản phẩm trong kho vẫn giữ nguyên, khi xác nhận thì sản phẩm sẽ bị trừ theo
                        // số lượng sản phẩm trong chi tiết
                        if ($request->rdoConfirmOrDelete == 'confirm') {
                            $productId = $billDetail->id_product;
                            $quantity = $billDetail->quantity;
                            $this->updateQuantity($productId, $quantity);
                        }
                    }
                }
            }
            // khi bấm xác nhận đơn thì request sẽ có giá trị chkconfirm.
            if ($request->rdoConfirmOrDelete == 'confirm') {

                $billId = $request->billID;
                $bill = Bill::find($billId);
                $bill->confirm = 1;
                $bill->save();

                $emailType = '1'; // xác nhận là 1
                Mail::to($bill->email)->send(new orderConfirm($bill,$emailType));

            }elseif ($request->rdoConfirmOrDelete == 'deleted') {

                $billId = $request->billID;
                $bill = Bill::find($billId);
                $bill->deleted = 1;
                $bill->save();

                $emailType = '0'; // hủy là 0
                Mail::to($bill->email)->send(new orderConfirm($bill,$emailType));
            }

            return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
        } elseif ($request->has('cancel')) {
            return redirect()->back();
        }
    }

    public function deleteBill($id)
    {
        $bill = Bill::find($id);

        $getAllBillDetail = BillDetail::where('id_bill',$bill->id)->get();

        foreach ($getAllBillDetail as $value)
        {
            $billDetail = BillDetail::find($value->id);
            $billDetail->delete();
        }

        $bill->delete();

        return redirect()->back()->with(['flash_message' => 'Xóa thành công']);
    }

    public function deleteBillDetail($id)
    {
        $billDetail = BillDetail::find($id);
        $billDetail->delete();

        return redirect()->back()->with(['flash_message' => 'Xóa thành công']);
    }

    private function updateQuantity($productId, $quantity)
    {
        $product = Product::find($productId);
        $product->quantity = $product->quantity - $quantity;
        $product->save();
    }
}
