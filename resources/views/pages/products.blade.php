@extends('master')
@section('content')

<h3>Tất cả sản phẩm</h3>
		<ul class="thumbnails">
			{{--@foreach($productType as $cate)--}}
			{{--<li class="span3">--}}
			  {{--<div class="thumbnail">--}}
				{{--<a href="product_details.html" class="overlay"></a>--}}
				{{--<!-- <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"> --><!-- </span> QUICK VIEW</a> -->--}}
				{{--<a href="{{route('productType',$cate->id)}}"><img src="template/image/product/{{$cate->image}}" alt=""></a>--}}
				{{--<div class="caption cntr">--}}
					{{--<p>{{$cate->name}}</p>--}}
					{{--<!-- <p><strong>{{$cate->unit_price}}</strong></p> -->--}}
					<!-- <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4> -->
					<!-- <div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>  -->
			@foreach($products as $product)

			<li class="span3">
			  <div class="thumbnail">
				<a href="{{route('productDetail',$product->id)}}" class="overlay"></a>
				<a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart"><span class="icon-search"></span> {{$product->name}}</a>
				<a href="{{route('productDetail',$product->id)}}"><img src="template/image/product/{{$product->image}}" alt=""></a>
				<div class="caption cntr">
					<p>{{$product->name}}</p>
					<p><strong> {{number_format($product->unit_price,0,",",".")}}</strong> đ</p>
					<h4><a class="shopBtn" href="{{route('purchase',['id'=> $product->id,'qty'=>1])}}" title="add to cart"> Add to cart </a></h4>

				</div>
			  </div>
			</li>
			@endforeach

		</ul>
		  <div class="pagination row-fluid" align="center">{{$products->links()}}</div>
@endsection