<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTypeRequest;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProductTypeController extends Controller
{
    public function getList()
    {
        $productTypeList = ProductType::select('id', 'name', 'image', 'description')->orderBy('id', 'DESC')->get();
        return view('admin.productType.list', compact('productTypeList'));
    }

    public function getAdd()
    {
        return view('admin.productType.add');
    }

    public function postAdd(ProductTypeRequest $request)
    {
        $type = new ProductType();
        $type->name = $request->txtName;
        $type->description = $request->txtDescription;

        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.productType.getAdd')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/productType/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/productType/', $fileName);
            $type->image = $fileName;
        }

        $type->save();
        return redirect()->route('admin.productType.list')->with(['flash_message' => 'Thêm thành công']);
    }

    public function getDelete($id)
    {
        $productType = ProductType::find($id);
        $productType->delete();

        return redirect()->route('admin.productType.list')->with(['flash_message' => 'Xóa thành công']);
    }

    public function getEdit($id)
    {
        $productType = ProductType::find($id);
        return view('admin.productType.edit', compact('productType'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ['txtName' => 'required'],
            ['txtName.required' => "Vui lòng nhập tên thể loại"]
        );

        $type = ProductType::find($id);
        $type->name = $request->txtName;
        $type->description = $request->txtDescription;

        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.productType.getAdd')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/productType/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/productType/', $fileName);
            $type->image = $fileName;
        }

        $type->save();
        return redirect()->route('admin.productType.list')->with(['flash_message' => 'Sửa thành công']);
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('jpg', 'png', 'jpeg');
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }
}
