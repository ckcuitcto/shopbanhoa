@extends('master')
@section('content')

    <div class="span12" style="background-color: #f5f5f5;margin:0">
        <h3>Tất cả sản phẩm</h3>
        <ul class="thumbnails">
            @foreach($products as $product)
                <li class="span3" style="width: 210px;margin-left: 27px">
                    <div class="thumbnail" style="padding-left: -15px">
                        <a href="product_details.html" class="overlay"></a>
                        <a class="zoomTool" href="{{route('productType',$product->id)}}" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                        <a href="{{route('productType',$product->id)}}"><img style="height: 213px;" src="template/image/product/{{$product->image}}" alt=""></a>
                        <div class="caption cntr">
                            <p>{{$product->name}}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="pagination row-fluid" align="center">{{$products->links()}}</div>
    </div>
@endsection