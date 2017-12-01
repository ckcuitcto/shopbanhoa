@extends('master')

@section('content')
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Check Out</li>
            </ul>
            @if (Cart::count() > 0)
                <div class="well well-small">
                    <h1>Check Out
                        <small class="pull-right"> {{Cart::count()}} sản phẩm trong giỏ hàng</small>
                    </h1>
                    <hr class="soften"/>

                    <table class="table table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th>Hình ảnh sản phẩm</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form action="" method="post">
                            <input name="_token" type="hidden" value="{!! csrf_token() !!} ">

                            @foreach($content as $item)
                                <tr>
                                    <td><img width="100" src="template/image/product/{{$item->options->img}}" alt="">
                                    </td>
                                    <td>{{$item->name}}<br>Carate:24 <br>Model:HBK24</td>
                                    <td>{{number_format($item->price,0,",",".")}} VNĐ</td>
                                    <td>
                                        <input class="span1 quantity1" idProduct="{{$item->rowId}}"
                                               value="{{$item->qty}}" min="1"
                                               max="100" name="{{$item->rowId}}" style="max-width:34px" type="number">
                                        <div class="input-append">
                                            <button class="btn btn-default btn-number" data-type="minus"
                                                    data-field="{{$item->rowId}}" type="button"><i
                                                        class="icon-minus"></i></button>
                                            <button class="btn btn-default btn-number" data-type="plus"
                                                    data-field="{{$item->rowId}}" type="button"><i
                                                        class="icon-plus"></i></button>
                                            <button class="btn btn-default btn-danger removeProduct" type="button"
                                                    idProduct="{{$item->rowId}}">
                                                {{--<a href="{{route('deleteProduct',['id'=>$item->rowId ])}}">--}}
                                                <span class="icon-remove"></span></a>
                                            </button>
                                        </div>
                                    </td>
                                    <td>{{number_format($item->price*$item->qty,0,",",".")}} VNĐ</td>
                                </tr>
                            @endforeach
                        </form>
                        <tr>
                            <td colspan="4" class="alignR">Total products:</td>
                            <td> {{Cart::subtotal()}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br/>

                    <a href="{{route('index')}}" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Quay
                        lại mua hàng
                    </a>
                    <a href="{{route('getOrderConfirmation')}}" class="shopBtn btn-large pull-right">Next <span
                                class="icon-arrow-right"></span></a>
                </div>
            @else
                <div class="well well-small">
                    <h1>Check Out
                        <small class="pull-right"> {{Cart::count()}} sản phẩm trong giỏ hàng</small>
                    </h1>
                    <hr class="soften"/>
                    <div class="alert alert-danger">
                        Giỏ hàng rỗng!!!
                    </div>
                    <a href="{{route('index')}}" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Quay
                        lại mua <hàng></hàng>
                    </a>
                </div>
            @endif

        </div>
    </div>
@endsection