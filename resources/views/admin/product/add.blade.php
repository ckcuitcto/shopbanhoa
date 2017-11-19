@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Thêm sản phẩm</h2>
        </div>
    </div>
    <hr/>

    <form action="{{route('admin.product.getAdd')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                @include('admin.blocks.error')
                <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">

                        <div class="form-group">
                            <label for="txtProductType">Loại hoa</label>
                            <select class="form-control" name="txtProductType" id="txtProductType">
                                @foreach($productType as $type)
                                    <option value="{{$type->id}}"> {{$type->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input style="height: auto" type="text" class="form-control" name="txtProductName" placeholder="Tên sản phẩm"/>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input style="height: auto" class="form-control hightInput" type="number" min="100000" max="999999999999" name="txtPrice"
                                   placeholder="Giá"/>
                        </div>

                        <div class="form-group">
                            <label>Khuyến mãi</label>
                            <input style="height: auto" class="form-control hightInput" type="number" min="0" max="100" name="txtSale"
                                   placeholder="Phần trăm khuyến mãi"/>
                        </div>

                        <div class="form-group">
                            <label>Số lượng sản phẩm</label>
                            <input style="height: auto" class="form-control hightInput" type="number" value="0" min="0" max="100" name="txtQuantity"
                                   placeholder="Số lượng sản phẩm ban đầu"/>
                        </div>

                        <div class="form-group">
                            <label for="txtUnit">Đơn vị tính</label>
                            <select class="form-control" name="txtUnit" id="txtUnit">
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Trạng thái</label>
                            <br>
                            <label class="radio-inline">
                                <input name="rdoNew" value="1" checked type="radio">Hiện
                            </label>

                            <label class="radio-inline">
                                <input name="rdoNew" value="0" type="radio">Ẩn
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea class="form-control" rows="3" name="txtDescription"
                                      placeholder="Tóm tắt ngắn gọn về sản phẩm"></textarea>
                            <script>
                                CKEDITOR.replace('txtDescription');
                            </script>
                        </div>

                        <div class="form-group">
                            <label>Hình đại diện</label>
                            <input type="file" name="fImages">
                        </div>

                        <div class="form-group">
                            <label>Các hình chi tiết</label>
                            <input type="file" name="mutilFile[]" multiple>
                        </div>

                    </div>
                    <button type="submit" name="themSP" class="btn btn-default"> Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </div>

                <!--End Advanced Tables -->
            </div>

        </div>
    </form>

@endsection
