<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function getList(){
    	$users = User::orderBy('users.id', 'DESC')->get();
    	return view('admin.user.list',compact('users'));
    }

    public function getDelete($id){
    	$user = User::find($id);

        $getAllBilll = Bill::where('id_user',$user->id)->count();
        if($getAllBilll > 0){
            return redirect()->route('admin.user.list')->with(['flash_message_fail' => 'User này đã mua hàng. Không thể xóa']);
        }
        $user->delete();
        return redirect()->route('admin.user.list')->with(['flash_message' => 'Xóa thành công']);
    }

    public function getEdit($id){
    	$user = User::find($id);

    	$userLogin = User::find(Auth::id());
    	return view('admin.user.edit',compact('user','userLogin'));
    }

    public function postEdit(Request $request,$id){
    	$this->validate($request, [
            'txtName' => 'required',
            'rdoGender' => 'required',
            'txtAddress' => 'required',
            'txtPhone' => 'required',
        ], [
        	'txtName.required' => 'Bạn chưa nhập tên',
        	'rdoGender.required' => 'Bạn chưa nhập giới tính',
            'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
            'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
        ]);

        $user = User::find($id);
        $user->name = $request->txtName;
        $user->level = $request->slLevel;
        $user->gender = $request->rdoGender;
        $user->address = $request->txtAddress;
        $user->phone_number = $request->txtPhone;
        $user->birthday = $request->txtBirthday;
        $user->save();

        return redirect()->route('admin.user.list')->with(['flash_message' => 'Sửa thành công']);
    }
}
