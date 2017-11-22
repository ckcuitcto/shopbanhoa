@extends('master')
@section('content')

<div class="span12" style="background-color: #f5f5f5;margin:0">
	<h3>Tất cả sản phẩm</h3>
		<ul class="thumbnails">
			@foreach($productType as $product)
			<li class="span3" style="width: 210px;margin-left: 27px">
			  <div class="thumbnail" style="padding-left: -15px">
				<a href="product_details.html" class="overlay"></a>
				<a class="zoomTool" href="{{route('productType',$product->id)}}" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="{{route('productType',$product->id)}}"><img src="template/image/product/{{$product->image}}" alt=""></a>
				<div class="caption cntr">
					<p>{{$product->name}}</p>
					<!-- <p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>  -->
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
		  <div class="pagination row-fluid" align="center">{{$productType->links()}}</div>
</div>
@endsection