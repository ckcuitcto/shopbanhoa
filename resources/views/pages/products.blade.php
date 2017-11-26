@extends('master')
@section('content')

    <div class="span12" style="background-color: #f5f5f5;margin:0">
        <h3>Tất cả sản phẩm</h3>
        <ul class="thumbnails">
            @foreach($products as $product)
                <li class="span3" style="width: 210px;margin-left: 27px">
                    <div class="thumbnail" style="padding-left: -15px">
                        <a href="product_details.html" class="overlay"></a>
                        <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                        <a href="{{route('productDetail',$product->id)}}"><img style="height: 213px;" src="template/image/product/{{$product->image}}" alt=""></a>
                        <div class="caption cntr">
                            <p>{{$product->name}}</p>
                        </div>
                        <h4>
                            <a class="defaultBtn" href="{{route('productDetail',$product->id)}}"
                               title="Click to view"><span
                                        class="icon-zoom-in"></span></a>
                            @if($product->quantity > 0 )
                            <a class="shopBtn" idProduct="{{$product->id}}"
                               href="{{route('purchase',['id'=> $product->id,'qty'=>1])}}"
                               title="add to cart"><span class="icon-plus"></span></a>
                            @endif
                            <span class="pull-right">{{number_format($product->unit_price,0,",",".")}}đ</span>
                        </h4>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="pagination row-fluid" align="center">{{$products->links()}}</div>
    </div>
@endsection