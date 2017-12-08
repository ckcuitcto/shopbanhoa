<div id="sidebar">
    <div class="well well-small">
        <ul class="nav nav-list" style="padding: 10px">
            @foreach($category as $cate)
                <li>
                    <a href="{{route('productType',$cate->id)}}"><span class="icon-chevron-right"></span>{{$cate->name}}</a>
                </li>
            @endforeach
            <li style="border:0"> &nbsp;</li>
            <li>
                <a class="totalInCart" href="{{route('cart')}}"><strong>Total Amount <span class="badge badge-warning pull-right" style="line-height:18px;">{{Cart::subtotal(0)}} đ </span></strong></a>
            </li>
        </ul>
    </div>


    <div class="well well-small"><a href="#"><img src="template/assets/img/paypal.jpg" alt="payment method paypal"></a>
    </div>

    <a class="shopBtn btn-block" href="#">Sản phẩm ngẫu nhiên<br>

    </a>
    <br>
    <br>
    <ul class="nav nav-list promowrapper">
        <li>
            @foreach($randomProduct as $product)
            <div class="thumbnail">
                <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart">
                    <span>{{number_format($product->unit_price,0,",",".")}} đ</span></a>
                <a href="{{route('productDetail',$product->id)}}"><img style="height: 250px;" src="template/image/product/{{$product->image}}" alt="">
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
