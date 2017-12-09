@extends('master')

@section('content')

    <div class="span9" style="margin: 0">
        <ul class="breadcrumb">
            <li><a href="{{route('index')}}">Trang chủ</a> <span class="divider">/</span></li>
            <li><a href="{{route('getProducts')}}">Sản phẩm</a> <span class="divider">/</span></li>
            <li class="active">Preview</li>
        </ul>
        <div class="well well-small">
            <div class="row-fluid">
                <div class="span5">
                    <div id="myCarousel" class="carousel slide cntr">
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"><img src="template/image/product/{{$product->image}}" alt=""
                                                 style="width:100%"></a>
                            </div>
                            @foreach($productImages as $image)
                                <div class="item">
                                    <img src="template/image/productImages/{{$image->image}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="span7">
                    <ul class="inline">

                        <li><h3> {{$product->name}}</h3></li>
                        <li style="float: right;"><h5><span class="icon-eye-open help-inline"></span> {{$product->view}}
                            </h5></li>
                    </ul>
                    <hr class="soft"/>

                    <form class="form-horizontal qtyFrm" action="{{route('purchaseProductDetail')}}" method="post">
                        <input name="_token" type="hidden" value="{!! csrf_token() !!} ">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="control-group">
                            <label class="control-label"><span>{{number_format($product->unit_price,0,",",".")}}
                                    đ</span></label>
                            <div class="controls">
                                <input {{ $product->quantity > 0 ? "" : "disabled='disabled'" }} type="number" min="1"
                                       max="{{$product->quantity}}" name="qty" class="span6" value="1">
                            </div>
                        </div>

                        <h4>{{ ($product->quantity > 0) ? "Còn ".$product->quantity." sản phẩm trong kho" : "Sản phẩm này đã hết hàng"}} </h4>
                        @if ($productOrdered->total>0)

                        <h5>{{ $productOrdered->total." sản phẩm đã được đặt "}}
                            <a data-toggle="tooltip" id="tooltip" title="
                            Khi còn sản phẩm trong kho và đã có người khác đặt hàng thì bạn vẫn có thể tiếp tục đặt hàng.
                            Nếu người khách đặt trước bạn hủy đơn thì bạn có thể được nhận hàng.
                            Nếu số lượng hàng trong kho không đủ thì đơn hàng của bạn sẽ bị hủy. ">?</a>
                        </h5>
                        @endif
                        <p>{{$product->description}}</p>
                        <button type="submit"
                                {{ (\App\Http\Controllers\PageController::checkQuantity($product->id)) ? "" : "disabled" }}   class="btn btn-success">
                            <span class=" icon-shopping-cart"></span> Add to cart
                        </button>
                    </form>
                </div>
            </div>
            <hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
                <li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#cat1" data-toggle="tab">Category one</a></li>
                        <li><a href="#cat2" data-toggle="tab">Category two</a></li>
                    </ul>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
                <div class="tab-pane fade active in" id="home">
                    <h4>Thông tin chi tiết sản phẩm</h4>
                    <table class="table table-striped">
                        <tbody>
                        <tr class="techSpecRow">
                            <td class="techSpecTD1">Màu sắc chủ đạo:</td>
                            <td class="techSpecTD2">Màu vàng</td>
                        </tr>
                        <tr class="techSpecRow">
                            <td class="techSpecTD1">Số lượng hoa:</td>
                            <td class="techSpecTD2">20 cây hoa hồng</td>
                        </tr>
                        <tr class="techSpecRow">
                            <td class="techSpecTD1">Loại hoa:</td>
                            <td class="techSpecTD2">Hoa hồng vàng</td>
                        </tr>
                        <tr class="techSpecRow">
                            <td class="techSpecTD1">Kiểu:</td>
                            <td class="techSpecTD2">Dành cho các cặp đôi</td>
                        </tr>
                        <tr class="techSpecRow">
                            <td class="techSpecTD1">Giá tiền:</td>
                            <td class="techSpecTD2">122855031</td>
                        </tr>
                        <tr class="techSpecRow">
                            <td class="techSpecTD1">Giấy gói:</td>
                            <td class="techSpecTD2">Giấy báo kiểu</td>
                        </tr>
                        </tbody>
                    </table>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                        retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                        Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                        terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan
                        american apparel, butcher voluptate nisi qui.</p>

                </div>
                <div class="tab-pane fade" id="profile">
                    @foreach($relatedProducts as $product)
                        <div class="row-fluid">
                            <div class="span2">
                                <img src="template/image/product/{{$product->image}}" alt="">
                            </div>
                            <div class="span6">
                                <h5>{{$product->name}} </h5>
                                <p>
                                    {{$product->description}}
                                </p>
                            </div>
                            <div class="span4 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> {{$product->unit_price}}</h3>
                                    <!--      <label class="checkbox">
                                             <input type="checkbox"> Adds product to compair
                                         </label> -->
                                    <br>
                                    <div class="btn-group">
                                        <a href='#' class="defaultBtn"><span
                                                    class=" icon-shopping-cart"></span> Add to cart</a>
                                        <a href="{{route('productDetail',$product->id)}}" class="shopBtn">VIEW</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="soften"/>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="cat1">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo
                        retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft
                        beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                        banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever
                        gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you
                        probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu
                        synth chambray yr.</p>
                    <br>
                    <br>
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/b.jpg" alt="">
                        </div>
                        <div class="span6">
                            <h5>Product Name </h5>
                            <p>
                                Nowadays the lingerie industry is one of the most successful business spheres.
                                We always stay in touch with the latest fashion tendencies -
                                that is why our goods are so popular..
                            </p>
                        </div>
                        <div class="span4 alignR">
                            <form class="form-horizontal qtyFrm">
                                <h3> $140.00</h3>
                                <label class="checkbox">
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.html" class="defaultBtn"><span
                                                class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.html" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften"/>
                    <div class="row-fluid">
                        <div class="span2">
                            <img src="assets/img/a.jpg" alt="">
                        </div>
                        <div class="span6">
                            <h5>Product Name </h5>
                            <p>
                                Nowadays the lingerie industry is one of the most successful business spheres.
                                We always stay in touch with the latest fashion tendencies -
                                that is why our goods are so popular..
                            </p>
                        </div>
                        <div class="span4 alignR">
                            <form class="form-horizontal qtyFrm">
                                <h3> $140.00</h3>
                                <label class="checkbox">
                                    <input type="checkbox"> Adds product to compair
                                </label><br>
                                <div class="btn-group">
                                    <a href="product_details.html" class="defaultBtn"><span
                                                class=" icon-shopping-cart"></span> Add to cart</a>
                                    <a href="product_details.html" class="shopBtn">VIEW</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr class="soften"/>
                </div>
                <div class="tab-pane fade" id="cat2">
                    @foreach($relatedProducts as $product)
                        <div class="row-fluid">
                            <div class="span2">
                                <img src="template/image/product/{{$product->image}}" alt="">
                            </div>
                            <div class="span6">
                                <h5>{{$product->name}} </h5>
                                <p>
                                    {{$product->description}}
                                </p>
                            </div>
                            <div class="span4 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> {{$product->unit_price}}</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br>
                                    <div class="btn-group">
                                        <a href="product_details.html" class="defaultBtn"><span
                                                    class=" icon-shopping-cart"></span> Add to cart</a>
                                        <a href="{{route('productDetail',$product->id)}}" class="shopBtn">VIEW</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="soften"/>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#tooltip').tooltip(function () {
                placement: 'right'
            });
        });

    </script>
@endsection