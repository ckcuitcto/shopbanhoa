@extends('master')
@section('content')
    <div style="margin: 0">
        <div class="well np">


            {{-- <div id="myCarousel" class="carousel slide homCar" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="..." alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="..." alt="Third slide">
                </div>
              </div>
            </div> --}}

            
            <div id="myCarousel" class="carousel slide homCar" data-ride="carousel">
                <!-- Indicators -->
                {{-- <ul class="carousel-indicators">
                    @for ($i = 0; $i < count($slide); $i++)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{ ($i==0) ? 'active' : '' }}"></li>
                    @endfor
                </ul> --}}
                <!-- The slideshow -->
                <div class="carousel-inner">
                    @php $active = false; @endphp
                    @foreach($slide as $value)
                        <div class="carousel-item {{ ($active == false) ? 'active' : '' }}">
                            <img style="height:430px;" class="rounded mx-auto d-block"
                                 src="/template/image/slide/{{$value->image}}" alt="slide">
                        </div>
                        @php $active = true; @endphp
                    @endforeach
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <br>
        <!-- New Products-->
        <div class="well well-small" style="background-color: #f5f5f5">
            <h3>Các loại hoa mới nhập về </h3>
            <hr class="soften"/>
            {{--<div class="row">--}}
            <div id="newProductCar" class="carousel slide">
                <div class="carousel-inner">
                    @for($i = 0;$i < 4 ; $i++)
                        <div class="carousel-item {{ $i==0 ? 'active' : '' }}">
                            <div class="row">
                                @for($j=$i*4 ; $j < $i*4 +4 ; $j++ )
                                    <div class="col-md-3 col-sm-3">
                                        <div class="thumbnail">
                                            {{--<a class="zoomTool"--}}
                                            {{--href="{{route('productDetail',$newProduct[$j]['id'])}}"--}}
                                            {{--title="add to cart"><span--}}
                                            {{--class="icon-search"></span> {{$newProduct[$j]['name']}}</a>--}}
                                            <a href="#" class="tag"></a>
                                            <a href="{{route('productDetail',$newProduct[$j]['id'])}}"><img
                                                        style="height: 170px;"
                                                        src="template/image/product/{{$newProduct[$j]['image']}}"
                                                        alt="bootstrap-ring" class="img-thumbnail"></a>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#newProductCar" data-slide="prev"><<&lsaquo;</a>
                <a class="carousel-control-next" href="#newProductCar" data-slide="next">&rsaquo;>></a>
            </div>
            {{--</div>--}}
        </div>
        <br>
        <!--  Featured Products   -->
        <div class="well well-small" style="background-color: #f5f5f5">
            <h3><a class="btn btn-mini pull-right" href="{{route('getProducts')}}" title="View more"><span
                            class="icon-plus"></span></a>Các loại hoa nổi bật</h3>
            <hr class="soften"/>
            <div class="row">
                @foreach($featuredProducts as $product)
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <a href="{{route('productDetail',$product->id)}}"><img
                                        src="template/image/product/{{$product->image}}" alt=""
                                        class="img-thumbnail"></a>
                            <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart">
                                <span>{{number_format($product->unit_price,0,",",".")}} đ</span></a>
                            <div class="caption">
                                <h5> {{$product->name}}</h5>
                                <h4>
                                    <a class="defaultBtn" href="{{route('productDetail',$product->id)}}"
                                       title="Click to view"><span
                                                class="icon-zoom-in"></span></a>
                                    @if ( \App\Http\Controllers\PageController::checkQuantity($product->id) )
                                        <a class="shopBtn" idProduct="{{$product->id}}"
                                           title="add to cart"><span class="icon-plus"></span></a>
                                    @endif
                                    <span class="pull-right">{{number_format($product->unit_price,0,",",".")}}
                                        đ</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <div class="well well-small" style="background-color: #f5f5f5">
            <h3><a class="btn btn-mini pull-right" href="{{route('getProducts')}}"><span class="icon-plus"></span></a>
                Các loại hoa bán chạy nhất</h3>
            <hr class="soften"/>
            <div class="row">
                @foreach($mostBoughtProduct as $product)
                    <div class="col-md-4 col-sm-4">
                        <div class="thumbnail">
                            <a href="{{route('productDetail',$product->id)}}">
                                <img style="height: 250px;" src="template/image/product/{{$product->image}}" alt="">
                            </a>
                            <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart">
                                <span>{{number_format($product->unit_price,0,",",".")}} đ</span></a>
                            <div class="caption">
                                <h5> {{$product->name}}</h5>
                                <h4>
                                    <a class="defaultBtn" href="{{route('productDetail',$product->id)}}"
                                       title="Click to view"><span
                                                class="icon-zoom-in"></span></a>
                                    @if ( \App\Http\Controllers\PageController::checkQuantity($product->id) )
                                        <a class="shopBtn" idProduct="{{$product->id}}"
                                           title="add to cart"><span class="icon-plus"></span></a>
                                    @endif
                                    <span class="pull-right">{{number_format($product->unit_price,0,",",".")}}
                                        đ</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection