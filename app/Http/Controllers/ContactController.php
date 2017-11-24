<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact()
    {
        $contact = Contacts::first();
        return view('admin.contact.contact', compact('contact'));
    }

    public function postContact(Request $request, $id)
    {
        $this->validate($request, [
            'txtProductType' => 'required',
            'txtProductName' => 'required',
            'txtPrice' => 'required',
            'txtUnit' => 'required',
        ], [
            'txtProductType.required' => 'Bạn chưa chọn loại sản phẩm',
            'txtProductName.required' => 'Bạn nhập tên sản phẩm',
            'txtPrice.required' => 'Bạn chưa nhập giá',
            'txtUnit.required' => 'Bạn chưa chọn đơn vị tính',
        ]);

        $product = Product::find($id);
        $product->name = $request->txtProductName;
        $product->id_type = $request->txtProductType;
        $product->unit_price = $request->txtPrice;
        $product->promotion_price = $request->txtSale;
        $product->quantity = $request->txtQuantity;
        $product->unit = $request->txtUnit;
        $product->new = $request->rdoNew;
        $product->description = $request->txtDescription;

        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.product.getEdit')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/product/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/product/', $fileName);
            unlink("template/image/product/" . $product->image);
            $product->image = $fileName;
        }
        $product->save();

        $productId = $product->id;
        if ($request->hasFile('mutilFile')) {
            $arrFile = $request->file('mutilFile');
            foreach ($arrFile as $file) {
                if (!$this->checkExtension($file->getClientOriginalExtension())) {
                    return redirect()->route('admin.product.getAdd')->with('flash_message_fail', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                }
            }
            foreach ($arrFile as $file) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                while (file_exists("template/image/productImages/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/image/productImages/', $fileName);
                $productImage = new ProductImages();
                $productImage->image = $fileName;
                $productImage->id_product = $productId;
                $productImage->save();
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_message' => 'Sửa thành công']);
    }
}
