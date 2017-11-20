@extends('master')
@section('content')

<h3>Tất cả sản phẩm</h3>
		<ul class="thumbnails">
			@foreach($productType as $cate)
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<!-- <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"> --><!-- </span> QUICK VIEW</a> -->
				<a href="{{route('productType',$cate->id)}}"><img src="template/image/product/{{$cate->image}}" alt=""></a>
				<div class="caption cntr">
					<p>{{$cate->name}}</p>
					<!-- <p><strong>{{$cate->unit_price}}</strong></p> -->
					<!-- <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4> -->
					<!-- <div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>  -->
					<br class="clr">
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
		  <div class="pagination row-fluid" align="center">{{$productType->links()}}</div>
@endsection