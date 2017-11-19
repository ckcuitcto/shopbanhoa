@extends('master')
@section('content')
    <div class="row" style="background-color: #f5f5f5;margin-left: 5px">
        <div class="well well-small" style="border:none;margin-left: 25px">
        <h3>&nbsp;Các loại hoa hiện có</h3>
        <div class="row">
            <ul class="thumbnails">
                @foreach($productsByIdType as $product)
                <li class="span3" style="width: 210px">
                    <div class="thumbnail">
                        <a href="product_details.html" class="overlay"></a>
                        <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                        <a href="{{route('productDetail',$product->id)}}"><img src="template/image/product/{{$product->image}}" style="height: 210px"></a>
                        <div class="caption cntr">
                            <p>{{$product->name}}</p>
                            <p><strong> {{$product->unit_price}}</strong></p>
                            <h4><a class="shopBtn" idProduct="{{$product->id}}" href="{{route('purchase',['id'=> $product->id,'qty'=>1])}}" title="add to cart"> Add to cart </a></h4>
                            <div class="actionList">
                                <a class="pull-left" href="#">Add to Wish List </a>
                                <a class="pull-left" href="#"> Add to Compare </a>
                            </div>
                            <br class="clr">
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="pagination row-fluid" align="center">{{$productsByIdType->links()}}</div>
    </div>
    </div>
@endsection
