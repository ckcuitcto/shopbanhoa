@extends('master')
@section('content')
    <div class="span9" style="margin: 0">
        <div class="well np">
            <div id="myCarousel" class="carousel slide homCar">
                <div class="carousel-inner">
                    <?php $item = 1; ?>
                    @foreach($slide as $value)

                        <div class="item {{ ($item==1) ? 'active' : '' }}">
                            <img style="width:100%" src="/template/image/slide/{{$value->image}}"
                                 alt="bootstrap ecommerce templates">
                        </div>
                        <?php $item++; ?>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <!-- New Products-->
        <div class="well well-small">
            <h3>Các loại hoa mới nhập về </h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <div id="newProductCar" class="carousel slide">
                    <div class="carousel-inner">
                         @for($i = 0;$i < 4 ; $i++)
                        <div class="item {{ $i==0 ? 'active' : '' }}">
                            <ul class="thumbnails">
                                @for($j=$i*4 ; $j < $i*4 +4 ; $j++ )
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="{{route('productDetail',$newProduct[$j]['id'])}}" title="add to cart"><span
                                                    class="icon-search"></span> {{$newProduct[$j]['name']}}</a>
                                        <a href="#" class="tag"></a>
                                        <a href="{{route('productDetail',$newProduct[$j]['id'])}}"><img style="height: 190px;" src="template/image/product/{{$newProduct[$j]['image']}}"
                                                                            alt="bootstrap-ring"></a>
                                    </div>
                                </li>
                                @endfor
                            </ul>
                        </div>
                        @endfor
                    </div>
                    <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
                </div>
            </div>
        </div>
        <!--  Featured Products   -->
        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="{{route('getProducts')}}" title="View more">VIew More<span
                            class="icon-plus"></span></a>Các loại hoa nổi bật</h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <ul class="thumbnails">
                    @foreach($featuredProducts as $product)
                        <li class="span4">
                            <div class="thumbnail">
                                <a href="{{route('productDetail',$product->id)}}"><img
                                            src="template/image/product/{{$product->image}}" alt=""></a>
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
                                        
                                        <span class="pull-right">{{number_format($product->unit_price,0,",",".")}} đ</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="{{route('getProducts')}}">View more <span class="icon-plus"></span></a>
            Các loại hoa bán chạy nhất</h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <ul class="thumbnails">
                    @foreach($mostBoughtProduct as $product)
                        <li class="span4">
                            <div class="thumbnail">
                                
                                <a href="{{route('productDetail',$product->id)}}"><img
                                            src="template/image/product/{{$product->image}}" alt="">
                                </a>
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
                                            <span class="pull-right">{{number_format($product->unit_price,0,",",".")}} đ</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection