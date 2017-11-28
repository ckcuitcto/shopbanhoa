<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getList(){
    	$users = User::orderBy('users.id', 'DESC')->get();
    	return view('admin.user.list',compact('users'));
    }

    public function getDelete($id){
    	$user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.list')->with(['flash_message' => 'Xóa thành công']);
    }

    public function getEdit($id){
    	$user = User::find($id);
    	return view('admin.user.edit',compact('user'));
    }

    public function postEdit(Request $request,$id){
    	$this->validate($request, [
            'txtName' => 'required',
            'txtLevel' => 'required',
            'txtGender' => 'required',
            'txtAddress' => 'required',
            'txtPhone' => 'required',
            'txtBirthday' => 'required'
        ], [
        	'txtName.required' => 'Bạn chưa nhập tên',
        	'txtLevel.required' => 'Bạn chưa nhập cấp',
        	'txtGender.required' => 'Bạn chưa nhập giới tính',
            'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
            'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
            'txtBirthday.required' => 'Bạn chưa nhập ngày sinh'
        ]);

        $user = User::find($id);
        $user->name = $request->txtName;
        $user->level = $request->txtLevel;
        $user->gender = $request->txtGender;
        $user->address = $request->txtAddress;
        $user->phone_number = $request->txtPhone;
        $user->birthday = $request->txtBirthday;

       
        $user->save();

       
        return redirect()->route('admin.user.list')->with(['flash_message' => 'Sửa thành công']);
    }
}
