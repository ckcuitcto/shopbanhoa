<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Contacts;
use App\ContactUs;
use App\User;
use App\ProductImages;
use App\Footer;
use App\Introduce;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {

        $qtyContact = ContactUs::where('confirm', '0')->count();
        $qtyBill = Bill::where('confirm', '0')->count();
        $date = date('Y-m-d');
        $date =substr($date, 5, 5);
        $qtyBirthday = DB::select("SELECT count(*) as qty FROM users where SUBSTRING(birthday,6,5) like :date",['date' => $date]);
        return view('admin.dashboard', compact('qtyContact', 'qtyBill', 'date', 'qtyBirthday'));
    }

    public function getIntroduce()
    {
        $introduce = Introduce::select('id','title','content')->get();
        return view('admin.introduce.introduce',compact('introduce'));
    }

    public function postIntroduce(Request $request)
    {
        $this->validate($request, [
            'txtNewsTitle' => 'required|unique:introduce,title',
            'txtNewsContent' => 'required',
        ], [
            'txtNewsTitle.required' => 'Bạn chưa nhập tiêu đề',
            'txtNewsContent.unique'=>'Tên tiêu đề đã tồn tại',
            'txtNewsContent.required' => 'Bạn chưa nhập nội dung',
        ]);

        $introduce = new Introduce();
        $introduce->title = $request->txtNewsTitle;
        $introduce->content = $request->txtNewsContent;
        $introduce->save();
        return redirect()->back()->with(['flash_message' => 'Thêm thành công']);
    }

    public function getFooter()
    {
        // $textarea = "-Thai Duc -Gia Han - Hieu mat lz ";
        $footer = Footer::first();
        // $arrFile = $footer->image;

        // $arrFile = explode("!@#$%^&",$arrFile); 
        return view('admin.introduce.footer',compact('footer'));
    }

    public function postFooter(Request $request){
        if ($request->has('save'))
        {
            $this->validate($request, [
                'txtAccount' => 'required',
                'txtInform' => 'required',
                'txtSource' => 'required',
                'txtDescription' => 'required',
                'txtTitleHeader' => 'required',
            ], [
                'txtAccount.required' => 'Bạn chưa nhập tài khoản',
                'txtInform.required' => 'Bạn chưa nhập thông tin',
                'txtSource.required' => 'Bạn chưa nhập nguồn',
                'txtDescription.required' => 'Bạn chưa nhập mô tả',
                'txtTitleHeader.required'=>'Bạn chưa nhập title cho phần header'
            ]);

            $footer = Footer::first();
            $footer->account = $request->txtAccount;
            $footer->inform = $request->txtInform;
            $footer->source = $request->txtSource;
            $footer->description = $request->txtDescription;
            $footer->titleHeader = $request->txtTitleHeader;
            $footer->save();

            return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
        }elseif($request->has('cancel')){

            return redirect()->back();
        }
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }
}
