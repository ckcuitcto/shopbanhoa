@extends('master')
@section('content')
<div class="well well-small">
	@foreach($news as $tintuc)

	<div class="row-fluid">
		<div class="span2">
			<img src="template/image/news/{{$tintuc->image}}" alt="">
		</div>
		<div class="span6">
			<h5><a href="{{route('newsDetails',$tintuc->id)}}" >{{$tintuc->title}} </a></h5>

		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<!-- <h3> $140.00</h3> -->
		<!-- <label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br> -->
		<div class="btn-group">
		  <!-- <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a> -->
		  <a href="{{route('newsDetails',$tintuc->id)}}" class="shopBtn">Xem thêm</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	@endforeach()
</div>
@endsection