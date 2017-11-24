<?php
namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Contacts;
use App\ProductImages;
use Carbon\Carbon;
use Cart,DB,Mail;
use App\Product;
use App\ProductType;
use App\Slide;
use App\News;
use App\NewProduct;
use App\ContactUs;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $products = Product::where('new', 1)->get();
        $newProduct = Product::select('id','name','image')->orderBy('id','desc')->limit(16)->get()->toArray();
        $featuredProducts = Product::where('view', '>', 0)->orderBy('view', 'desc')->limit(3)->get();
        return view('pages.homepage', compact('slide', 'products', 'featuredProducts','newProduct'));
    }

    public function getProductType($idType)
    {
        $productsByIdType = Product::where('id_type', $idType)->paginate(9);
        return view('pages.productType', compact('productsByIdType'));
    }

    public function getProductDetail(Request $request)
    {
        $product = Product::find($request->idProduct);
        $product->view +=1;
        $product->save();

        $relatedProducts = Product::where('id_type', $product->id_type)->limit(3)->get();
        $productImages  = ProductImages::where('id_product',$request->idProduct)->get();

        return view('pages.productDetails', compact('product', 'relatedProducts','productImages'));
    }

    public function getCart()
    {
        $content = Cart::content();
        return view('pages.cart', compact('content'));
    }

    public function purchase(Request $request)
    {
        $productBuy = Product::where('id', $request->id)->first();
        $qty = $request->qty;
        Cart::add(['id' => $productBuy->id, 'name' => $productBuy->name, 'qty' => $qty, 'price' => $productBuy->unit_price, 'options' => ['img' => $productBuy->image]]);
        return "success";
    }

    public function post_purchase(Request $request)
    {
        $productBuy = Product::where('id', $request->id)->first();

    }

    public function deleteProduct(Request $request)
    {
        Cart::remove($request->id);
        return "success";
    }

    public function updateCart(Request $request)
    {
        if ($request->isMethod('GET')) {
            $id = $request->get('id');
            $qty = $request->get('qty');
            Cart::update($id, $qty);
            return "success";
        }
    }

    public function getOrderConfirmation()
    {
        $listCart = Cart::content();
        return view('pages.orderConfirmation',compact('listCart'));
    }

    public function postOrderConfirmation(Request $request)
    {
        $this->validate($request, [
            'txtRecipient' => 'required',
            'txtAddress' => 'required',
            'txtPhoneNumber' => 'required|numeric'
//            'txtPhoneNumber' => 'required|numeric|between:1,15'
        ], [
            'txtRecipient.required' => 'Bạn chưa nhập tên người nhận',
            'txtAddress.required' => 'Bạn nhập nơi nhận',
            'txtPhoneNumber.required' => 'Bạn chưa nhập số điện thoại',
            'txtPhoneNumber.numeric' => 'Số điện thoại chỉ là số',
//            'txtPhoneNumber.between' => 'Số điện thoại có tổi thiểu :min số và tối đa :max số '
        ]);

        $bill = new Bill();
        $bill->date_order = Carbon::now();
        $bill->note = $request->txtNote;
        $bill->id_user = 1;
        $bill->recipient = $request->txtRecipient;
        $bill->address = $request->txtAddress;
        $bill->phone_number = $request->txtPhoneNumber;
        $bill->confirm = 0;
        $bill->total = (double)Cart::total();
        $bill->save();

        $cartItemList = Cart::content();
        foreach ($cartItemList as $item)
        {
            $billDetail = new BillDetail();
            $billDetail->unit_price = $item->price;
            $billDetail->quantity = $item->qty;
            $billDetail->id_bill = $bill->id;
            $billDetail->id_product = $item->id;
            $billDetail->save();
        }
        Cart::destroy();
        return redirect()->route('getOrderConfirmation')->with(['flash_message' => 'Đặt hàng thành công']);
    }

    public function getProducts(){

        $products = Product::paginate(16);

        // $productsByIdType = Product::where('id_type', $idType)->paginate(6);
        return view('pages.products', compact('products'));
    }

    public function register(){
        return view('pages.register');
    }

    public function login(){
        return view('pages.login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'request|min:3|max:32'
        ],
        [
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password không được nhỏ hơn 3 ký tự',
            'password.max'=>'Password không được lớn hơn 32 ký tự'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                return redirect('index');
            }
            else{
                return redirect('login')->with('thongbao','Đăng nhập không thành công');
            }
    }

    public function getContact() {
        $contact = Contacts::first();
        return view('pages.contact',compact('contact'));
    }

    public function postContact(Request $request) {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'title'=>'required',
            'description'=>'required',
            'phone'=>'required|numeric'
        ],
        [
            'name.required'=>'Bạn chưa nhập name',
            'email.required'=>'Bạn chưa nhập email',
            'email.email' => "Email không hợp lệ",
            'title.required'=>'Bạn chưa nhập title',
            'description.required'=>'Bạn chưa nhập nội dung',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'phone.numeric'=>'Số điện thoại không hợp lệ',
        ]);

        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->title = $request->title;
        $contactUs->description = $request->description;
        $contactUs->phone_number = $request->phone;
        $contactUs->save();
        return redirect()->back()->with('flash_message','Gửi liên hệ thành công! Chúng tôi sẽ sớm liên hệ với bạn! ');
    }

    public function getNews(){
        $news = News::all();
        return view('pages.news',compact('news'));
    }

    public function getAboutUs() {
        return view('pages.aboutUs');
    }

    public function postRegister(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Sai định dạng email. Vui lòng nhập lại !',
                'email.unique'=>'Email đã được sử dụng',
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>'Password không khớp',
                'password.min'=>'Mật khẩu có ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->full_name = $req->Fname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function search(Request $request){
        $search = $request->productSearch;
        $resultSearch = Product::where('name','like',"%$search%")->paginate(8);
        return view('pages.search',compact('search','resultSearch'));
    }
}
