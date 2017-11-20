@extends('master')
@section('content')

<h3>Tất cả sản phẩm</h3>
		<ul class="thumbnails">
<<<<<<< HEAD
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
=======
			@foreach($products as $product)

			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.html"><img src="assets/img/a.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
>>>>>>> e6c5000df97741b559be43c89ac8abbbd673a7da
					<br class="clr">
				</div>
			  </div>
			</li>
<<<<<<< HEAD
			@endforeach
=======
				@endforeach
>>>>>>> e6c5000df97741b559be43c89ac8abbbd673a7da
		  </ul>
		  <div class="pagination row-fluid" align="center">{{$productType->links()}}</div>
@endsection