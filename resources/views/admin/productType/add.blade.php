
@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h2>Thêm loại sản phẩm</h2>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-sm-12 col-xs-12 ">
        @include('admin.blocks.error')
        <div class="panel-body">
            <form action="{{route('admin.productType.getAdd')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <label>Tên loại sản phẩm</label>
                    <input type="text" class="form-control" name="txtName" placeholder="Tên loại sản phẩm"/>
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="form-control" rows="3" name="txtDescription"
                              placeholder="Tóm tắt ngắn gọn về loại sản phẩm"></textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" name="fImages" >
                </div>
                <button type="submit" name="btnAdd" class="btn btn-default"> Thêm</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection