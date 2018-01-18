<div class="list-group">
    @foreach($category as $cate)
    <a href="{{route('productType',$cate->id)}}" class="list-group-item list-group-item-action"><span
                class="icon-chevron-right"></span>{{$cate->name}} {{$cate->total}}</a>
    @endforeach
        <a class="totalInCart list-group-item list-group-item-action" href="{{route('cart')}}"><strong>Tổng tiền<span
                        class="badge badge-warning pull-right" style="line-height:18px;">
                            {{Cart::subtotal(0)}} đ
                        </span></strong></a>
        {{--<a href="#" class="list-group-item list-group-item-action"><img src="template/assets/img/paypal.jpg" alt="payment method paypal"></a>--}}
</div>
<br>
<div class="list-group" id="sidebar">

    <a class="shopBtn btn-block" href="#">Sản phẩm ngẫu nhiên<br></a>

    <ul class="nav flex-column promowrapper">
        <li class="nav-item">
            @foreach($randomProduct as $product)
                <div class="thumbnail">
                    <a class="zoomTool nav-link" href="{{route('productDetail',$product->id)}}" title="add to cart">
                        <span>{{number_format($product->unit_price,0,",",".")}} đ</span></a>
                    <a href="{{route('productDetail',$product->id)}}" class="nav-link"><img style="height: 250px;"
                                                                           src="template/image/product/{{$product->image}}"
                                                                           alt="">
                    </a>
                    <div class="caption">
                        <h5>{{$product->name}}</h5>
                    </div>
                </div>
            @endforeach
        </li>
        <li style="border:0"> &nbsp;</li>
    </ul>
</div>
