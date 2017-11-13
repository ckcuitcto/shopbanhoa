<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTypeRequest;
use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function getList(){

        return view('admin.productType.list');
    }

    public function getAdd(){
        return view('admin.productType.add');
    }

    public function postAdd(ProductTypeRequest $request){
        $type = new ProductType();
        $type->name = $request->txtName;
        $type->description = $request->txtDescription;
        $type->image = $request->fImages;
        $type->save();
        return redirect()->route('admin.productType.list')->with(['flash_message' => 'Thêm thành công']);
    }
}
