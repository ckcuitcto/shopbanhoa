@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Chi tiết đơn hàng của khách hàng : {{$productListOfBIll['0']->recipient}} </h2>
            <h3> ID đơn hàng : {{$productListOfBIll['0']->id_bill}}</h3>
        </div>
    </div>
    <hr/>

    <form action="{{route('admin.cart.getBillDetail',$productListOfBIll['0']->id_bill)}}" method="POST"
          enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-11 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <form action="{{route('admin.cart.getBillDetail',$productListOfBIll['0']->id_bill)}}" method="POST"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center">ID Đơn Hàng</th>
                                    <th style="text-align: center">ID sản phẩmn</th>
                                    <th style="text-align: center">Tên sản phẩm</th>
                                    <th style="text-align: center">Hình ảnh sản phẩmn</th>
                                    <th style="text-align: center">Người nhận</th>
                                    <th style="text-align: center">Địa chỉ</th>
                                    <th style="text-align: center">Số điện thoại</th>
                                    <th style="text-align: center">Số lượng</th>
                                    <th style="text-align: center">Đơn giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productListOfBIll as $product)
                                    <tr>
                                        <td>{{$product->id_bill}}</td>
                                        <td>{{$product->id_product}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->image}}</td>
                                        <td>{{$product->recipient}}</td>
                                        <td>{{$product->address}}</td>
                                        <td>{{$product->phone_number}}</td>
                                        <td>{{$product->quantity}} </td>
                                        <td>{{$product->unit_price}} </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </form>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </form>

@endsection
