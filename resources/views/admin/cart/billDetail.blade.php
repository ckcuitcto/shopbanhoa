@extends('admin.master')
@section('content')

    @if(!empty($productListOfBIll))
        <div class="row">
            <div class="col-md-8">
                <h2>Chi tiết đơn hàng của khách hàng : {{$productListOfBIll['0']->recipient}} </h2>
                <h4> ID đơn hàng : {{$productListOfBIll['0']->billID}}</h4>
                <h3> Tổng giá trị đơn hàng : {{number_format($productListOfBIll['0']->total,0,",",".")}} đ</h3>
                <h4> Tên người nhận : {{$productListOfBIll['0']->recipient}}</h4>
                <h4> Địa chỉ nhận hàng : {{$productListOfBIll['0']->address}}</h4>
                <h4> Số điện thoại người nhận : {{$productListOfBIll['0']->phone_number}}</h4>
                <h4> Email người nhận: {{ ($productListOfBIll['0']->email) ? $productListOfBIll['0']->email : "Rỗng" }}</h4>
                <h4> Tình trạng : {{ ($productListOfBIll['0']->confirm) ? "Đã xác nhận" : "Chưa xác nhận" }}</h4>
            </div>
            <div class="col-md-4">
                <h3><a href="{{route('admin.cart.getBill','0')}}"> <<< Trở lại danh sách đơn hàng </a></h3>
            </div>
        </div>
        <hr/>
        <form action="{{route('admin.cart.getBillDetail',$productListOfBIll['0']->billID)}}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="billID" value="{{$productListOfBIll['0']->billID}}">
            <div class="row">
                <div class="col-md-11 col-sm-12 col-xs-12">
                @include('admin.blocks.error')
                <!-- Advanced Tables -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="text-align: center">ID sản phẩm</th>
                                    <th style="text-align: center">Tên sản phẩm</th>
                                    <th style="text-align: center">Số lượng tồn kho</th>
                                    {{--<th style="text-align: center">Hình ảnh sản phẩmn</th>--}}
                                    <th style="text-align: center">Số lượng đặt mua</th>
                                    <th style="text-align: center">Đơn giá</th>
                                    <th style="text-align: center">Tổng giá</th>
                                    <th style="text-align: center">Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productListOfBIll as $item)
                                    <tr>
                                        <td>{{$item->id_product}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->productQuantity}}</td>
                                        {{--<td><img width="150px" src="/template/image/product/{{$item->image}}"></td>--}}
                                        <td><input style="height:auto;" type="number" name="{{$item->billDetailId}}" min="1" max="{{$item->productQuantity}}"
                                                   id="txtQuantity" value="{{$item->billDetailQuantity}}">
                                        </td>
                                        <td> {{number_format($item->unit_price,0,",",".")}} đ </td>
                                        <td>{{number_format($item->billDetailQuantity * $item->unit_price,0,",",".")}} đ</td>
                                        <td>
                                            <a onclick="return confirm('Bạn có chắc muốn xoá không')"
                                               href="{{route('admin.cart.deleteBillDetail',$item->billDetailId)}}">
                                                <span class="glyphicon {{ ($item->confirm == 1) ? '' : 'glyphicon glyphicon-trash' }} "></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            @if(!$productListOfBIll['0']->confirm AND !$productListOfBIll['0']->deleted)
                <div class="row">
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="radio" value="confirm" name="rdoConfirmOrDelete"> Xác nhận đơn hàng </label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="radio" value="deleted" name="rdoConfirmOrDelete"> Hủy đơn hàng </label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input checked type="radio" value="doNothing" name="rdoConfirmOrDelete"> Chỉ sửa số lượng sản phẩm </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" name="edit" class="btn btn-success">Sửa</button>
                        <button type="cancel" name="cancel" id="cancel" class="btn btn-danger">Reset</button>
                    </div>
                </diV>
            @elseif ($productListOfBIll['0']->deleted == 1)
                <div class="col-md-8">
                    <h2> Đơn hàng đã bị hủy</h2>
                    <h3><a href="{{route('admin.cart.getBill','0')}}"> <<< Trở lại danh sách đơn hàng </a></h3>
                </div>

            @endif
        </form>
    @else
        <div class="row">
            <div class="col-md-8">
                <h2> Đơn hàng rỗng</h2>
                <h3><a href="{{route('admin.cart.getBill','0')}}"> <<< Trở lại danh sách đơn hàng </a></h3>
            </div>
        </div>
    @endif
@endsection
