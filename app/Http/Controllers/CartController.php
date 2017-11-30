<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use DB;

class CartController extends Controller
{
    public function getBill($confirm){
    	if ( !($confirm == 1 OR $confirm == 0)) {
            $carts = Bill::orderBy('id')->get();
        } elseif($confirm == 1 OR $confirm == 0 ) {
            $carts = Bill::where('confirm', $confirm)->orderBy('id')->get();
        }

    	return view('admin.cart.cart',compact('carts'));
    }

    public function postBill(Request $request){

    	// $this->validate($request, [
     //        'txtAddress' => 'required',
     //        'txtEmail' => 'required|email',
     //        'txtPhoneNumber' => 'required|numeric',
     //        'txtWebsite' => 'required|url',
     //        'txtMap' => 'required'
     //    ], [
     //        'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
     //        'txtEmail.required' => 'Bạn chưa nhập email',
     //        'txtEmail.email' => 'Bạn phải nhập đúng định dạng email',
     //        'txtPhoneNumber.required' => 'Bạn chưa nhập số điện thoại',
     //        'txtPhoneNumber.numeric' => 'Số điện thoại chỉ được phép nhập số',
     //        'txtWebsite.required' => 'Bạn chưa nhập website',
     //        'txtWebsite.url' => 'Bạn phải nhập vào url của website',
     //        'txtMap.required' => 'Bạn chưa nhập bản đồ',
     //    ]);

     //    $contact = Contacts::first();
     //    $contact->address = $request->txtAddress;
     //    $contact->email = $request->txtEmail;
     //    $contact->phone_number = $request->txtPhoneNumber;
     //    $contact->website = $request->txtWebsite;
     //    $contact->map = $request->txtMap;

     //    $contact->save();

     //    return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
    }

    public function getBillDetail($id){
    	// $cart = BillDetail::find($id);
        $cart = DB::table('bill_detail')

            ->join('products','products.id','=','bill_detail.id_product')
            ->join('bills','bills.id','=','bill_detail.id_bill')
            ->where('bill_detail.id',$id)
            // ->select('bill_detail.*', 'products.name', 'products.image','bills.recipient','bills.address','bills.phone_number')

            ->get();
    	return view('admin.cart.billDetail', compact('cart'));
    }
    public function postDetailContact(Request $request, $id)
    {
        // $this->validate($request, [
        //     'txtBody' => 'required'
        // ], [
        //     'txtBody.required' => 'Bạn chưa nhập nội dung email'
        // ]);
        // $contact = ContactUs::find($id);
        // $contact->confirm = 1;
        // $contact->save();
        // $body = $request->txtBody;
        // if($request->hasFile('mutilFile')){
        //     $files = $request->file('mutilFile');
        //     Mail::to($contact->email)->send(new ContactsMail($contact,$body,$files));
        // }else{
        //     Mail::to($contact->email)->send(new ContactsMail($contact,$body));
        // }

        // return redirect()->back()->with(['flash_message' => 'Gửi thành công']);
    }
}
