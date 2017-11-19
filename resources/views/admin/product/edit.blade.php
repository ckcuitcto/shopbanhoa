@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Sửa sản phẩm</h2>
        </div>
    </div>
    <hr/>
    <form action="{{route('admin.product.getEdit',$product->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">

                        <div class="form-group">
                            <label for="txtProductType">Loại hoa</label>
                            <select class="form-control" name="txtProductType" id="txtProductType">
                                @foreach($productType as $type)
                                    <option {{ ($type->id == $product->type_id) ? "selected" : ""}} value="{{$type->id}}"> {{$type->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input style="height: auto" type="text" class="form-control" name="txtProductName"
                                   value="{{old('txtProductName',$product->name)}}" placeholder="Tên sản phẩm"/>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input style="height: auto" class="form-control" type="number" min="100000"
                                   max="999999999999" name="txtPrice" value="{{old('txtPrice',$product->unit_price)}}"
                                   placeholder="Giá"/>
                        </div>

                        <div class="form-group">
                            <label>Khuyến mãi</label>
                            <input style="height: auto" class="form-control" type="number" min="0" max="100"
                                   name="txtSale"
                                   value="{{old('txtSale',$product->promotion_price)}}"
                                   placeholder="Phần trăm khuyến mãi"/>
                        </div>

                        <div class="form-group">
                            <label>Số lượng sản phẩm</label>
                            <input style="height: auto" class="form-control" type="number" min="0" max="100"
                                   name="txtQuantity"
                                   value="{{old('txtQuantity',$product->quantity)}}"
                                   placeholder="Số lượng sản phẩm ban đầu"/>
                        </div>

                        <div class="form-group">
                            <label for="txtUnit">Đơn vị tính</label>

                            <select class="form-control" name="txtUnit" id="txtUnit">
                                @foreach($units as $unit)
                                    <option {{ ($unit->id == $product->unit) ? "selected" : ""}} value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Trạng thái</label>
                            <br>
                            <label class="radio-inline">
                                <input name="rdoNew" value="1" {{ ($product->new == 1) ? "checked" : ""}} type="radio">Hiện
                            </label>

                            <label class="radio-inline">
                                <input name="rdoNew" value="0" {{ ($product->new == 0) ? "checked" : ""}} type="radio">Ẩn
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea class="form-control" rows="3" name="txtDescription"
                                      placeholder="Tóm tắt ngắn gọn về sản phẩm">  {{old('txtDescription',$product->description)}} </textarea>
                            <script>
                                CKEDITOR.replace('txtDescription');
                            </script>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Hình đại diện hiện tại</label>
                                    <img width="400px" src="/template/image/product/{{$product->image}}">
                                </div>
                                <div class="form-group">
                                    <label>Sửa hình đại diện</label>
                                    <input type="file" name="fImages">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Hình chi tiết</label>
                                    <div class="row">
                                    @foreach($productImage as $image)
                                        <div class="col-md-2" style="width: 200px; height: 200px;">
                                            <p>
                                            <img  src="/template/image/productImages/{{$image->image}}">
                                            </p>
                                            <button style="margin-top: -6px;margin-left: 60px; " type="button" productImageId="{{$image->id}}"
                                                    class="btn btn-default ProductImage">X
                                            </button>
                                        </div>
                                    @endforeach
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Thêm hình chi tiết</label>
                                    <input type="file" name="mutilFile[]" multiple>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button type="submit" name="themSP" class="btn btn-default"> Sửa</button>
                    <button type="cancel" class="btn btn-default">Hủy</button>
                </div>

                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
@endsection