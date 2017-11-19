@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Thêm sản phẩm</h2>
        </div>
    </div>
    <hr/>

    <form action="{{route('admin.product.getAdd')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
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
                            <input type="text" class="form-control" name="txtProductName" placeholder="Tên sản phẩm"/>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input class="form-control" type="number" min="100000" max="999999999999" name="txtPrice"
                                   placeholder="Giá"/>
                        </div>

                        <div class="form-group">
                            <label>Khuyến mãi</label>
                            <input class="form-control" type="number" min="0" max="100" name="txtSale"
                                   placeholder="Phần trăm khuyến mãi"/>
                        </div>

                        <div class="form-group">
                            <label>Số lượng sản phẩm</label>
                            <input class="form-control" type="number" value="0" min="0" max="100" name="txtQuantity"
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
                            <label>Hình</label>
                            <input type="file" name="fImages">
                            <!-- <input onclick="BrowseServer('Images:/','urlHinh')" type="button" name="btnChonFile" id="btnChonFile" value="Chọn hình"> -->
                        </div>

                    </div>
                    <button type="submit" name="themSP" class="btn btn-default"> Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </div>

                <!--End Advanced Tables -->
            </div>
            {{--<div class="col-md-5 col-sm-12 col-xs-12">--}}
            {{--<div class="panel-body panel">--}}

            {{--<div class="form-group">--}}
            {{--<label>Trọng lượng</label>--}}
            {{--<input class="form-control" name="trongluong" placeholder="G"/>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label>Chủng loại</label>--}}
            {{--<input class="form-control" name="chungloai" placeholder="Nhẫn, dây chuyền, lắc tay ,...."/>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<label>Tuổi</label>--}}
            {{--<input class="form-control" name="tuoi" placeholder="Tuổi vàng"/>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<label>Màu chất liệu</label>--}}
            {{--<input class="form-control" maxlength="10" name="mauchatlieu" placeholder="Trắng, vàng,..."/>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<label>Mô tả</label>--}}
            {{--<textarea class="form-control" rows="3" name="mota"--}}
            {{--placeholder="Mô tả sản phẩm hiển thị ở thông tin chi tiết sản phẩm..."></textarea>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<label>Giới tính</label>--}}
            {{--<label class="radio-inline">--}}
            {{--<input name="rdoGT" value="1" type="radio">Nam--}}
            {{--</label>--}}
            {{--<label class="radio-inline">--}}
            {{--<input name="rdoGT" value="0" type="radio">Nữ--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>

        {{--<div class="row">--}}
        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
        {{--<div class="form-group">--}}
        {{--<label>Nội dung</label>--}}
        {{--<textarea class="form-control " id="txtD" rows="3" name="noidung"></textarea>--}}
        {{--</div>--}}


        {{--</div>--}}
        {{--</div>--}}

    </form>
@endsection
