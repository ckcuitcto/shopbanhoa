<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests\ProductTypeRequest;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProductTypeController extends Controller
{
    public function getList()
    {
        $productTypeList = ProductType::select('id', 'name', 'image', 'description')->orderBy('id', 'DESC')->get();
        $productQuantity = DB::select("select tp.* , count(p.id) as soluong from type_products tp join products p on tp.id = p.id_type where p.new = 1 group by tp.id");
        return view('admin.productType.list', compact('productTypeList','productQuantity'));
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

        $getAllProduct = Product::where('id_type',$productType->id)->count();
        if($getAllProduct > 0){
            return redirect()->route('admin.productType.list')->with(['flash_message_fail' => 'Đã có sản phẩm trong loại sản phẩm này! Không thể xóa']);
        }

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
                return redirect()->back()->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/productType/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/productType/', $fileName);

            if(file_exists("template/image/productType/" . $type->image)){
                unlink("template/image/productType/" . $type->image);
            }

            $type->image = $fileName;
        }

        $type->save();
        return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
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
