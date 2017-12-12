@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách loại sản phẩm</h2>
            <h5>Danh sách loại sản phẩm, xoá, sửa loại sản phẩm... </h5>

        </div>
    </div>
    <!-- /. ROW  -->
    <hr/>

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách loại sản phẩm.
                </div>
                <div class="panel-body">
                    <div class="table-responsive">

                        <!-- DO DL vao day  -->
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <td>Mã Loại</td>
                                <td>Tên Loại Sản Phẩm</td>
                                <td>Miêu tả</td>
                                <td>Số lượng sản phẩm hiện có</td>
                                <td>Ảnh</td>
                                <td>Xóa</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productQuantity as $productType)
                                <tr>
                                    <td><a href="{{route('admin.productType.getEdit',$productType->id)}}" >{{$productType->id}}</a></td>
                                    <td><a href="{{route('admin.productType.getEdit',$productType->id)}}" >{{$productType->name}}</a></td>
                                    <td>{{$productType->description}}</td>
                   
                                    <td>{{$productType->soluong}}</td>
                               
                                    <td> <img width="300px" src="/template/image/productType/{{$productType->image}}" alt=""></td>
                                    <td><a onclick="return confirmDelete('Bạn có chắc muốn xóa không?');" href="{{route('admin.productType.getDelete',$productType->id)}}">Xóa</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /. het thuc do DL  -->
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    <!-- /. ROW  -->
@endsection