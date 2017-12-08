<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Introduce;

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


}
