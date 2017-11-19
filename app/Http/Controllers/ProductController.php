<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductType;
use App\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getList()
    {
        $productList = Product::select('id', 'name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'new', 'quantity', 'view')->orderBy('id', 'DESC')->get();
        $units = Unit::select('id','name')->orderBy('name','DESC')->get();
        return view('admin.product.list', compact('productList','units'));
    }

    public function getAdd()
    {
        $productType = ProductType::select('name', 'id')->get();
        $units = Unit::select('id','name')->orderBy('name','DESC')->get();
        return view('admin.product.add', compact('productType','units'));
    }

    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'txtProductType' => 'required',
            'txtProductName' => 'required|unique:products,name',
            'txtPrice' => 'required',
            'txtUnit' =>'required',
            'fImages' => 'required'
        ],[
            'txtProductType.required' => 'Bạn chưa chọn loại sản phẩm',
            'txtProductName.required' => 'Bạn nhập tên sản phẩm',
            'txtPrice.required' => 'Bạn chưa nhập giá',
            'txtUnit.required' => 'Bạn chưa chọn đơn vị tính',
            'fImages.required' => 'Bạn chưa đăng hình '
        ]);

        $product = new Product();
        $product->name = $request->txtProductName;
        $product->id_type = $request->txtProductType;
        $product->unit_price = $request->txtPrice;
        $product->promotion_price = $request->txtSale;
        $product->quantity = $request->txtQuantity;
        $product->unit = $request->txtUnit;
        $product->new = $request->rdoNew;
        $product->description = $request->txtDescription;

        if($request->hasFile('fImages'))
        {
            $file = $request->file('fImages');

            $fileName = str_random(8)."_".$file->getClientOriginalName();

        }
        $file = $request->fImages;
        $product->image = $file;
//        Storage::putFile($file, new File('/template/image/product'));

//        return redirect()->route('admin.product.list')->with(['flash_message' => 'Thêm thành công']);
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

    public function postEdit(Request $request, $id)
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
            $name = $request->fImages;
            echo $name;
        }
//        $productType->save();
//        return redirect()->route('admin.productType.list')->with(['flash_message' => 'Sửa thành công']);
    }

    public function store(Request $request)
    {
        $file = $request->fImages;
        $fileName = rand(1, 999) . $file->getClientOriginalName();
        $filePath = "/uploads/" . date("Y") . '/' . date("m") . "/" . $fileName;

        $file->storeAs('public/template/image/product/' . date("Y") . '/' . date("m") . '/', $fileName, 'uploads');

        return File::create(['file_name' => $fileName, 'path' => $filePath, 'file_extension' => $file->getClientOriginalExtension()]);
    }
}
