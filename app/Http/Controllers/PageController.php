<?php
namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Contacts;
use App\Mail\OrderShipped;
use App\ProductImages;
use Carbon\Carbon;
use Cart, DB, Mail;
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
        $newProduct = Product::select('id', 'name', 'image')->where('new', 1)->orderBy('id', 'desc')->limit(16)->get()->toArray();
        $featuredProducts = Product::where([
            ['view', '>', 0],
            ['new','1']
        ])
            ->orderBy('view', 'desc')->limit(3)->get();

        $mostBoughtProduct = DB::table('bill_detail')
            ->join('products','products.id','=','bill_detail.id_product')
            ->join('bills','bills.id','=','bill_detail.id_bill')
            ->select(DB::raw('SUM(bill_detail.quantity) as totalQty'),'products.*')
            ->where([
                ['bills.confirm','1'],
                ['new','1']
            ])
            ->groupBy('products.id')
            ->orderByRaw('SUM(bill_detail.quantity)','DESC')
            ->limit(3)
            ->get();

        return view('pages.homepage', compact('slide', 'products', 'featuredProducts','newProduct','mostBoughtProduct'));

    }

    public function getIntroduce() {

        return view('pages.introduce');
    }

    public function getProductType($idType)
    {
        $productsByIdType = Product::where('id_type', $idType)->paginate(9);
        return view('pages.productType', compact('productsByIdType'));
    }

    public function getProductDetail(Request $request)
    {
        $product = Product::find($request->idProduct);
        $product->view += 1;
        $product->save();

        $productOrdered = BillDetail::select(DB::raw('SUM(quantity) as total'))
            ->leftJoin('bills','bill_detail.id_bill','=','bills.id')
            ->where([
                ['id_product', $request->idProduct],
                ['bills.confirm','0'],
            ])
            ->first();
//        var_dump($productOrdered);die;
        $relatedProducts = Product::where('id_type', $product->id_type)->limit(3)->get();
        $productImages = ProductImages::where('id_product', $request->idProduct)->get();

        return view('pages.productDetails', compact('product', 'relatedProducts', 'productImages', 'productOrdered'));
    }

    public function getCart()
    {
        $content = Cart::content();
        return view('pages.cart', compact('content'));
    }

    public function purchase($id, $qty)
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
        if (!empty(Auth::user()->id)) {
            $id = Auth::user()->id;
            $user = User::find($id);
        }
        return view('pages.orderConfirmation', compact('listCart', 'user'));
    }

    public function postOrderConfirmation(Request $request)
    {
        $this->validate($request, [
            'txtRecipient' => 'required',
            'txtAddress' => 'required',
            'txtPhoneNumber' => 'required|numeric',
            'txtEmail' => 'required|email',
        ], [
            'txtRecipient.required' => 'Bạn chưa nhập tên người nhận',
            'txtAddress.required' => 'Bạn nhập nơi nhận',
            'txtPhoneNumber.required' => 'Bạn chưa nhập số điện thoại',
            'txtPhoneNumber.numeric' => 'Số điện thoại chỉ là số',
            'txtEmail.email' => 'Email nhập chưa đúng định dạng',
        ]);

        // nếu khách hàng đã đăng nhập. thì khi mua hàng sẽ lưu = id của khác và gửi thư đến mail khách đã đăng kí
        // còn nếu khách k đăng nhập thì sẽ lưu vào user mặc định là 1 và email mặc định;
        if (!empty(Auth::user()->id)) {
            $userId = Auth::user()->id;
            $userEmail = Auth::user()->email;
        } else {
            $userId = 7; // 7 là user mặc định của khách nặc danh
            $userEmail = $request->txtEmail;
        }
        $cartItemList = Cart::content();

        $total = 0;

        foreach ($cartItemList as $item) {
            $total += $item->price * $item->qty;
        }
        $bill = new Bill();
        $bill->date_order = Carbon::now();
        $bill->note = $request->txtNote;
        $bill->id_user = $userId;
        $bill->recipient = $request->txtRecipient;
        $bill->address = $request->txtAddress;
        $bill->phone_number = $request->txtPhoneNumber;
        $bill->email = $request->txtEmail;
        $bill->total = $total;
        $bill->save();


        $arrBilDetail = array();
        foreach ($cartItemList as $item) {
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

    public function getProducts()
    {

        $products = Product::paginate(16);

        // $productsByIdType = Product::where('id_type', $idType)->paginate(6);
        return view('pages.products', compact('products'));
    }

    public function getContact()
    {
        $contact = Contacts::first();
        return view('pages.contact', compact('contact'));
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required|numeric'
        ],
            [
                'name.required' => 'Bạn chưa nhập name',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => "Email không hợp lệ",
                'title.required' => 'Bạn chưa nhập title',
                'description.required' => 'Bạn chưa nhập nội dung',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.numeric' => 'Số điện thoại không hợp lệ',
            ]);

        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->title = $request->title;
        $contactUs->description = $request->description;
        $contactUs->phone_number = $request->phone;
        $contactUs->save();
        return redirect()->back()->with('flash_message',
            'Gửi liên hệ thành công! Chúng tôi sẽ sớm liên hệ với bạn! ');
    }

    public function getNews()
    {
        $news = News::all();
        return view('pages.news', compact('news'));
    }


    public function getNewsDetails(Request $request){
        $news = News::find($request->idNews);
        
        return view('pages.newsDetails',compact('news'));
    }


    public function search(Request $request)
    {
        $search = $request->productSearch;
        $resultSearch = Product::where([
            ['name', 'like', "%$search%"],
            ['new','1'],
        ])->paginate(8);
        return view('pages.search', compact('search', 'resultSearch'));
    }


    public function getPersonal()
    {
        $id = Auth::user()->id;
        $personal = User::find($id);
        $bills = Bill::where('id_user', $id)->orderBy('created_at')->get()->toArray();

        $totalBill = 0;
        foreach ($bills as $value)
        {
            $totalBill += $value['total'];
        }

        return view('pages.personal', compact('personal', 'bills','totalBill'));
    }

    public function postPersonal(Request $request)
    {
        if ($request->has('save')) {
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
        } elseif ($request->has('cancel')) {
            return redirect()->back();
        }
    }

    public static function getProductListOfBill($id)
    {
        $list = DB::table('products')
            ->leftJoin('bill_detail', 'products.id', '=', 'bill_detail.id_product')
            ->leftJoin('bills', 'bill_detail.id_bill', '=', 'bills.id')
            ->select('products.*', 'bill_detail.quantity as qty')
            ->where('bills.id', $id)
            ->get();

        $totalAll = 0;
        $data = "  <h4 style='text-align: center;'>Các sản phẩm của đơn hàng ID: $id </h4>
                        <hr class=\"soft\"/>
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th style=\"text-align: center\">Số lượng</th>
                            <th style=\"text-align: center\">Đơn Giá</th>
                            <th style=\"text-align: center\">Tổng giá</th>
                        </tr>
                        </thead>
                       <tbody>";

        foreach ($list as $value) {
            $total = $value->qty * $value->unit_price;
            $data .=
                "<tr>
                    <td>$value->name</td>
                    <td style=\"text-align: center\"> $value->qty </td>
                    <td style=\"text-align: center\">  $value->unit_price </td>
                    <td style=\"text-align: center\"> $total </td>
                 </tr> ";
            $totalAll += $total;
        }
        $data .= "  <tr>
                        <td colspan=\"3\" style=\"text-align:right;\">Tổng tiền</td>
                        <td style=\"text-align: center;\"> $totalAll VNĐ</td>
                    </tr>
                    </tbody>
                </table>";

        return $data;
    }

    public static function checkQuantity($id)
    {
        // hàm kiểm tra số lượng của đơn hàng
        // nếu số lượng sản phẩm đang đặt lớn hơn hoặc bằng số lượng sản phẩm trong kho thì sẽ k cho đặt thêm nữa.
        // nnếu số lượng sản phẩm trong kho <= 0 thì sẽ k cho mua
        $product = Product::find($id);
        if($product->quantity > 0)
        {
            if ( Cart::count() > 0) {
                $cart = Cart::content();
                foreach ($cart as $item) {
                    if ($item->id == $product->id AND $item->qty >= $product->quantity) {
                        return false;
                    }
                }
            }
            return true;
        }else{
            return false;
        }
    }
}
