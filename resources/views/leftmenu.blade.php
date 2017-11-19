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
                <a class="totalInCart" href="{{route('cart')}}"><strong>Total Amount <span class="badge badge-warning pull-right" style="line-height:18px;">{{Cart::total()}} </span></strong></a>
            </li>
        </ul>
    </div>


    <div class="well well-small"><a href="#"><img src="template/assets/img/paypal.jpg" alt="payment method paypal"></a>
    </div>

    <a class="shopBtn btn-block" href="#">Sản phẩm mới cập nhật<br>
        <small>Click to view</small>
    </a>
    <br>
    <br>
    <ul class="nav nav-list promowrapper">
        <li>
            <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span
                            class="icon-search"></span> QUICK VIEW</a>
                <img src="template/assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
                <div class="caption">
                    <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span
                                class="pull-right">$22.00</span>
                    </h4>
                </div>
            </div>
        </li>
        <li style="border:0"> &nbsp;</li>
    </ul>
</div>
