<?php
namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Contacts;
use App\Mail\OrderShipped;
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


        $sanpham_banchay = DB::table('bill_detail')
            ->join('products','products.id','=','bill_detail.id_product')
            ->join('bills','bills.id','=','bill_detail.id_bill')
            ->select(DB::raw('SUM(bill_detail.quantity) as totalQty'),'products.*')
            ->where('bills.confirm','1')
            ->groupBy('products.id')
            ->orderByRaw('SUM(bill_detail.quantity)','DESC')
            ->limit(3)
            ->get();

  

        return view('pages.homepage', compact('slide', 'products', 'featuredProducts','newProduct','sanpham_banchay'));
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

        $productOrdered = BillDetail::select(DB::raw('SUM(quantity) as total'))->where('id_product',$request->idProduct)->first();
        $relatedProducts = Product::where('id_type', $product->id_type)->limit(3)->get();
        $productImages  = ProductImages::where('id_product',$request->idProduct)->get();

        return view('pages.productDetails', compact('product', 'relatedProducts','productImages','productOrdered'));
    }

    public function getCart()
    {
        $content = Cart::content();
        return view('pages.cart', compact('content'));
    }

    public function purchase($id,$qty)
    {
        $productBuy = Product::where('id', $id)->first();
        $qty = $qty;
        Cart::add(['id' => $productBuy->id, 'name' => $productBuy->name, 'qty' => $qty, 'price' => $productBuy->unit_price, 'options' => ['img' => $productBuy->image]]);
        return "success";
    }

    public function post_purchase(Request $request)
    {
        $productBuy = Product::where('id', $request->id)->first();

        $qty = $request->qty;
        Cart::add(['id' => $productBuy->id, 'name' => $productBuy->name, 'qty' => $qty, 'price' => $productBuy->unit_price, 'options' => ['img' => $productBuy->image]]);
        return redirect()->back();
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

        $user = new User();
        if(!empty(Auth::user()->id))
        {
            $id = Auth::user()->id;
            $user = User::find($id);
        }

        return view('pages.orderConfirmation',compact('listCart','user'));
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

        // nếu khách hàng đã đăng nhập. thì khi mua hàng sẽ lưu = id của khác và gửi thư đến mail khách đã đăng kí
        // còn nếu khách k đăng nhập thì sẽ lưu vào user mặc định là 1 và email mặc định;
        if(!empty(Auth::user()->id))
        {
            $userId = Auth::user()->id;
            $userEmail = Auth::user()->email;
        }else{
            $userId = 1;
            $userEmail = "hoasaigonn@gmail.com";
        }

        $bill = new Bill();
        $bill->date_order = Carbon::now();
        $bill->note = $request->txtNote;
        $bill->id_user = $userId;
        $bill->recipient = $request->txtRecipient;
        $bill->address = $request->txtAddress;
        $bill->phone_number = $request->txtPhoneNumber;
        $bill->confirm = 0;
        $bill->total = (double)Cart::total();
        $bill->save();

        $cartItemList = Cart::content();
        $arrBilDetail = array();
        foreach ($cartItemList as $item)
        {
            $billDetail = new BillDetail();
            $billDetail->unit_price = $item->price;
            $billDetail->quantity = $item->qty;
            $billDetail->id_bill = $bill->id;
            $billDetail->id_product = $item->id;
            $billDetail->save();
            $arrBilDetail[] = $billDetail;
        }

        Mail::to($userEmail)->send(new OrderShipped($bill, $arrBilDetail));
        Cart::destroy();
        return redirect()->route('getOrderConfirmation')->with(['flash_message' => 'Đặt hàng thành công']);
    }

    public function getProducts(){

        $products = Product::paginate(16);

        // $productsByIdType = Product::where('id_type', $idType)->paginate(6);
        return view('pages.products', compact('products'));
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

    public function getNewsDetails(Request $request){
        $news = News::find($request->idNews);
        
        return view('pages.newsDetails',compact('news'));
    }

    public function getAboutUs() {
        return view('pages.aboutUs');
    }


    public function search(Request $request){
        $search = $request->productSearch;
        $resultSearch = Product::where('name','like',"%$search%")->paginate(8);
        return view('pages.search',compact('search','resultSearch'));
    }


    public function getPersonal() {
        $id = Auth::user()->id;
        $personal = User::find($id);
        $bills = Bill::where('id_user',$id)->orderBy('created_at')->get()->toArray();
        return view('pages.personal',compact('personal','bills'));
    }

    public function postPersonal(Request $request) {
        if($request->has('save')) {
            $this->validate($request, [
                'txtName' => 'required',
                'txtAddress' => 'required',
                'txtPhoneNumber' => 'required|numeric'
            ], [
                'txtName.required' => 'Bạn chưa nhập tên',
                'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
                'txtPhoneNumber.required' => 'Bạn chưa nhập số điện thoại',
                'txtPhoneNumber.numeric' => 'Số điện thoại không hợp lệ',
            ]);

            $id = Auth::user()->id;
            $user = User::find($id);
            $user->name = $request->txtName;
            $user->gender = $request->txtGen;
            $user->address = $request->txtAddress;
            $user->phone_number = $request->txtPhoneNumber;
            $user->birthday = $request->txtBirthday;
            $user->save();
            return redirect()->back()->with('flash_message', 'Sửa thông tin thành công! ');
        }elseif($request->has('cancel'))
        {
            return redirect()->back();
        }
    }
}
