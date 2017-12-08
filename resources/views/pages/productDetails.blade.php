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
                        <button type="submit"
                                {{ (\App\Http\Controllers\PageController::checkQuantity($product->id)) ? "" : "disabled" }}   class="btn btn-success">
                            <span class=" icon-shopping-cart"></span> Add to cart
                        </button>
                    </form>
                </div>
            </div>
            <hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Thông tin chi tiết</a></li>
                <li class=""><a href="#profile" data-toggle="tab"> Sản phẩm liên quan </a></li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
                <div class="tab-pane fade active in" id="home">
                    <h4>Thông tin chi tiết sản phẩm</h4>

                    <p>{!!  $product->description !!}</p>

                </div>
                <div class="tab-pane fade" id="profile">
                    @foreach($relatedProducts as $product)
                        <div class="row-fluid">
                            <div class="span2">
                                <a href="{{route('productDetail',$product->id)}}"> <img
                                            src="template/image/product/{{$product->image}}" alt=""></a>
                            </div>
                            <div class="span6">
                                <h5><a href="{{route('productDetail',$product->id)}}">{{$product->name}} </a></h5>

                            </div>
                            <div class="span4 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> {{number_format($product->unit_price,0,",",".")}} đ</h3>
                                    <a href="{{route('productDetail',$product->id)}}" class="defaultBtn">Xem</a>
                                </form>
                            </div>
                        </div>
                        <hr class="soften"/>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="cat2">
                    @foreach($relatedProducts as $product)
                        <div class="row-fluid">
                            <div class="span2">
                                <img src="template/image/product/{{$product->image}}" alt="">
                            </div>
                            <div class="span6">
                                <h5>{{$product->name}} </h5>

                            </div>
                            <div class="span4 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> {{$product->unit_price}}</h3>
                                    <label class="checkbox">
                                        <input type="checkbox"> Adds product to compair
                                    </label><br>
                                    <div class="btn-group">
                                        @if ( \App\Http\Controllers\PageController::checkQuantity($product->id) )
                                            <a class="shopBtn" idProduct="{{$product->id}}"
                                               title="add to cart"><span class="icon-shopping-cart"></span> Thêm vào giỏ</a>
                                        @endif
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

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#tooltip').tooltip(function () {
                placement: 'right'
            });
        });

    </script>
@endsection