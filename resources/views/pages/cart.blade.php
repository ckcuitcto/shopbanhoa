@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #f5f5f5">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ol>
            </nav>

            @if (Cart::count() > 0)
                <div class="well well-small">
                    <h1>Giỏ hàng
                        <small class="pull-right"> {{Cart::count()}} sản phẩm trong giỏ hàng</small>
                    </h1>
                    <hr class="soften"/>
                    <form action="{{route('getOrderConfirmation')}}" method="get" style="background-color: #f5f5f5">
                        <table class="table table-bordered table-condensed table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Hình ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{--<input name="_token" type="hidden" value="{!! csrf_token() !!} ">--}}

                            @foreach($content as $item)
                                <tr>
                                    <td><img width="100" src="template/image/product/{{$item->options->img}}" alt="">
                                    </td>
                                    <td><a href="{{route('productDetail',$item->id)}}">{{$item->name}}</a></td>
                                    <td>{{number_format($item->price,0,",",".")}} đ</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2">
                                            <input class="quantity1" idProduct="{{$item->rowId}}"
                                                   value="{{$item->qty}}" min="1"
                                                   max="{{(\App\Http\Controllers\PageController::getProductQuantityByProductId($item->id)) }}"
                                                   name="{{$item->rowId}}" style="max-width:50px" type="number">
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-default btn-number" data-type="minus"
                                                        data-field="{{$item->rowId}}" type="button"><i
                                                            class="icon-minus"></i></button>
                                                <button {{ (\App\Http\Controllers\PageController::checkQuantity($item->id)) ? "" : "disabled" }} class="btn btn-default btn-number"
                                                        data-type="plus"
                                                        data-field="{{$item->rowId}}" type="button"><i
                                                            class="icon-plus"></i></button>
                                                <button class="btn btn-default btn-danger removeProduct" type="button"
                                                        idProduct="{{$item->rowId}}">
                                                    {{--<a href="{{route('deleteProduct',['id'=>$item->rowId ])}}">--}}
                                                    <span class="icon-remove"></span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{number_format($item->price*$item->qty,0,",",".")}} đ</td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="4" class="alignR">Tổng tiền tất cả sản phẩm:</td>
                                <td> {{Cart::subtotal(0)}} đ</td>
                            </tr>
                            </tbody>
                        </table>

                        <a href="{{route('index')}}" class="shopBtn btn-large"><span class="icon-arrow-left"></span>
                            Quay lại mua hàng
                        </a>
                        <button type="submit" name="submit" class="shopBtn btn-large pull-right">
                            <span class=" icon-shopping-cart"></span> Tiếp tục
                        </button>
                    </form>
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
                        lại mua
                        <hàng></hàng>
                    </a>
                </div>
            @endif

        </div>
    </div>
@endsection