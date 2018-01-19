@extends('master')

@section('content')

    <div class="span9" style="margin: 0">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color: #f5f5f5">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a> </li>
            <li class="breadcrumb-item"><a href="{{route('getProducts')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
          </ol>
        </nav>


       {{--  <ul class="breadcrumb">
            <li><a href="{{route('index')}}">Trang chủ</a> <span class="divider">/</span></li>
            <li><a href="{{route('getProducts')}}">Sản phẩm</a> <span class="divider">/</span></li>
            <li class="active">{{$product->name}}</li>
        </ul> --}}
        <div class="well well-small" style="background-color: #f5f5f5">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div id="myCarousel" class="carousel slide cntr" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="template/image/product/{{$product->image}}" alt="" style="width:100%">
                            </div>
                            @foreach($productImages as $image)
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="template/image/productImages/{{$image->image}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-ms-7 col-sm-7">
                    <div class="inline row" style="padding-top: 30px">

                        <div class="col-6">
                            <h2> {{$product->name}}</h2>
                        </div>
                        <div class="col-6" align="right" style="padding-right: 50px">
                            <h5><span class="icon-eye-open help-inline"></span> {{$product->view}}
                            </h5>
                        </div>
                    </div>
                    <hr class="soft"/>

                    <form class="form-horizontal qtyFrm" action="{{route('purchaseProductDetail')}}" method="post">
                        <input name="_token" type="hidden" value="{!! csrf_token() !!} ">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="control-group row">
                            <label class="control-label col-6"><span>{{number_format($product->unit_price,0,",",".")}}
                                    đ</span></label>
                            <div class="controls">
                                <input {{ $product->quantity > 0 ? "" : "disabled='disabled'" }} type="number" min="1"
                                       max="{{$product->quantity}}" name="qty" class="col-6" value="1">
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


            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#detail" class="nav-link active" data-toggle="tab">Thông tin chi tiết</a>
                </li>
                <li class="nav-item">
                    <a href="#related" class="nav-link" data-toggle="tab"> Sản phẩm liên quan </a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
                <div class="container tab-pane active" id="detail">
                    <h4>Thông tin chi tiết sản phẩm</h4>

                    <p>{!!  $product->description !!}</p>

                </div>
                <div class="container tab-pane fade" id="related">
                    @foreach($relatedProducts as $product)
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <a href="{{route('productDetail',$product->id)}}">
                                    <img src="template/image/product/{{$product->image}}" style="width: 100%;" alt=""></a>
                            </div>
                            <div class="col-ms-6 col-sm-6">
                                <h5><a href="{{route('productDetail',$product->id)}}">{{$product->name}} </a></h5>

                            </div>
                            <div class="col-ms-4 col-sm-4 alignR">
                                <form class="form-horizontal qtyFrm">
                                    <h3> {{number_format($product->unit_price,0,",",".")}} đ</h3>
                                    <a href="{{route('productDetail',$product->id)}}" class="defaultBtn">Xem</a>
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