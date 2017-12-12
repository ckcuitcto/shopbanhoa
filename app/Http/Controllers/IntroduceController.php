<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\ProductImages;
use App\Footer;
use App\Introduce;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IntroduceController extends Controller
{
    public function getIntroduce()
    {
        $introduce = Introduce::first();
        return view('admin.introduce.introduce',compact('introduce'));
    }

    public function postIntroduce(Request $request)
    {
        if($request->has('submit')) {
            $this->validate($request, [
                'txtNewsTitle' => 'required',
                'txtNewsContent' => 'required',
            ], [
                'txtNewsTitle.required' => 'Bạn chưa nhập tiêu đề',
                'txtNewsContent.required' => 'Bạn chưa nhập nội dung',
            ]);
            $introduce = Introduce::first();
            $introduce->title = $request->txtNewsTitle;
            $introduce->content = $request->txtNewsContent;
            $introduce->save();
            return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
        }else{
            return redirect()->back();
        }

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
}
