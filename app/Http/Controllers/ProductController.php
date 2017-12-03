<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductImages;
use App\ProductType;
use App\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getList()
    {
        $productList = Product::orderBy('products.id', 'DESC')->get();
        return view('admin.product.list', compact('productList'));
    }

    public function getAdd()
    {
        $productType = ProductType::select('name', 'id')->get();
        $units = Unit::select('id', 'name')->orderBy('name', 'DESC')->get();
        return view('admin.product.add', compact('productType', 'units'));
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'txtProductType' => 'required',
            'txtProductName' => 'required|unique:products,name',
            'txtPrice' => 'required',
            'txtUnit' => 'required',
            'fImages' => 'required'
        ], [
            'txtProductType.required' => 'Bạn chưa chọn loại sản phẩm',
            'txtProductName.required' => 'Bạn nhập tên sản phẩm',
            'txtProductName.unique' => 'Tên sản phẩm đã tồn tại',
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

// luu hinh dai dien
        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.product.getAdd')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/product/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/product/', $fileName);
            $product->image = $fileName;
        }
        $product->save();

// luu cac hinh chi tiet
        $productId = $product->id;
        if ($request->hasFile('mutilFile')) {
            $arrFile = $request->file('mutilFile');
            foreach ($arrFile as $file) {
                if (!$this->checkExtension($file->getClientOriginalExtension())) {
                    return redirect()->route('admin.product.getAdd')->with('flash_message_fail', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                }
            }
            foreach ($arrFile as $file) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                while (file_exists("template/image/productImages/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/image/productImages/', $fileName);
                $productImage = new ProductImages();
                $productImage->image = $fileName;
                $productImage->id_product = $productId;
                $productImage->save();
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_message' => 'Thêm thành công']);
    }

    public function getDelete($id)
    {
        $product = Product::find($id);
        ProductImages::where('id_product', $product->id)->delete();
        $product->delete();

        return redirect()->route('admin.product.list')->with(['flash_message' => 'Xóa thành công']);
    }

    public function getEdit($id)
    {
        $product = Product::find($id);
        $productType = ProductType::all();
        $units = Unit::all();
        $productImage = ProductImages::select('id', 'image', 'id_product')->where('id_product', $product->id)->get();
        return view('admin.product.edit', compact('product', 'productType', 'units', 'productImage'));
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request, [
            'txtProductType' => 'required',
            'txtProductName' => 'required',
            'txtPrice' => 'required',
            'txtUnit' => 'required',
        ], [
            'txtProductType.required' => 'Bạn chưa chọn loại sản phẩm',
            'txtProductName.required' => 'Bạn nhập tên sản phẩm',
            'txtPrice.required' => 'Bạn chưa nhập giá',
            'txtUnit.required' => 'Bạn chưa chọn đơn vị tính',
        ]);

        $product = Product::find($id);
        $product->name = $request->txtProductName;
        $product->id_type = $request->txtProductType;
        $product->unit_price = $request->txtPrice;
        $product->promotion_price = $request->txtSale;
        $product->quantity = $request->txtQuantity;
        $product->unit = $request->txtUnit;
        $product->new = $request->rdoNew;
        $product->description = $request->txtDescription;

        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.product.getEdit')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/product/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/product/', $fileName);
            unlink("template/image/product/" . $product->image);
            $product->image = $fileName;
        }
        $product->save();

        $productId = $product->id;
        if ($request->hasFile('mutilFile')) {
            $arrFile = $request->file('mutilFile');
            foreach ($arrFile as $file) {

                if (!$this->checkExtension($file->getClientOriginalExtension())) {
                    return redirect()->back()->with('flash_message_fail', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                }
            }

            foreach ($arrFile as $file) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                while (file_exists("template/image/productImages/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/image/productImages/', $fileName);
                $productImage = new ProductImages();
                $productImage->image = $fileName;
                $productImage->id_product = $productId;
                $productImage->save();
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_message' => 'Sửa thành công']);
    }

    public function getDeleteProductImage($id)
    {
        $productImage = ProductImages::find($id);
        unlink("template/image/productImages/" . $productImage->image);
        $productImage->delete();
        echo "success";
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
        //$fileExtensions = $this->convert_vi_to_en($fileExtensions);
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }

    public static function getProductById($id)
    {
        $product = Product::find($id);
        return $product;
    }

    private function convert_vi_to_en($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
        $str = preg_replace("/(Đ)/", 'd', $str);
        //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
        return $str;
    }
}
