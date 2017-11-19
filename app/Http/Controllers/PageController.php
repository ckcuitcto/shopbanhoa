<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\ProductType;
use App\Slide;
use App\NewProduct;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $products = Product::where('new', 1)->get();
        // $newproduct = NewProduct::all();
        $newProduct = Product::select('id','name','image')->orderBy('id','desc')->limit(16)->get()->toArray();
            
        $featuredProducts = Product::where('view', '>', 0)->orderBy('view', 'desc')->limit(3)->get();
        return view('pages.homepage', compact('slide', 'products', 'featuredProducts','newProduct'));
    }

    public function getProductType($idType)
    {
        $productsByIdType = Product::where('id_type', $idType)->paginate(6);
        return view('pages.productType', compact('productsByIdType'));
    }

    public function getProductDetail(Request $request)
    {
        $product = Product::where('id', $request->idProduct)->first();
//        $breadcrumbs = DB::table
        $relatedProducts = Product::where('id_type', $product->id_type)->limit(3)->get();
        return view('pages.productDetails', compact('product', 'relatedProducts', 'quantity'));
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
//        return redirect()->back();
        return "success";
    }

    public function post_purchase(Request $request)
    {
        $productBuy = Product::where('id', $request->id)->first();

//        foreach ($cart as $item)
//        {
//
//        }
//
//        if($request->has('id')) {
//            if (Cart::where($request->id)) {
//                Cart::update($request->id, $qty);
//            } else {
//                Cart::add(['id' => $productBuy->id, 'name' => $productBuy->name, 'qty' => $qty, 'price' => $productBuy->unit_price, 'options' => ['img' => $productBuy->image]]);
//            }
//        }
//        var_dump($qty);
//        var_dump($request->id);
        //dd($productBuy);

//        var_dump(Cart::content());
//        return redirect()->back();
    }

    public function deleteProduct(Request $request)
    {
        Cart::remove($request->id);
            echo "success";
    }

    public function updateCart(Request $request)
    {
        if ($request->isMethod('GET')) {
            $id = $request->get('id');
            $qty = $request->get('qty');
            Cart::update($id, $qty);
            echo "success";
        }
    }

    public function getProducts(){
        $products = Product::all();
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
        return view('pages.contact');
    }

    public function getNews(){
        return view('pages.news');
    }

    public function getAboutUs() {
        return view('pages.aboutUs');
    }

    public function postregister(Request $req){
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
}
