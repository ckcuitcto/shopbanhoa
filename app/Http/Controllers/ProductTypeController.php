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
        $file = $request->fImages;

//        Storage::putFile($file, new File('/template/image/product'));
        $imageName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images'), $imageName);

        $type->image = $imageName;
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

        $productType = ProductType::find($id);
        $productType->name = $request->txtName;
        $productType->description = $request->txtDescription;

        if ($request->hasFile('fImages')) {
            $this->store($request);
            $productType->image = $request->fImages;
        }
        $productType->save();
        return redirect()->route('admin.productType.list')->with(['flash_message' => 'Sửa thành công']);
    }

    public function store(Request $request)
    {
        $file     = $request->fImages;
        $fileName = rand(1, 999) . $file->getClientOriginalName();
        $filePath = "/uploads/" . date("Y") . '/' . date("m") . "/" . $fileName;

        $file->storeAs('public/template/image/product/'. date("Y") . '/' . date("m") . '/', $fileName, 'uploads');

        return File::create(['file_name' => $fileName, 'path' => $filePath, 'file_extension' => $file->getClientOriginalExtension()]);
    }
}
