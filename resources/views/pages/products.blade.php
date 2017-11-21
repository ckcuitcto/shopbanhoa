@extends('master')
@section('content')

<div class="span12" style="background-color: #f5f5f5;margin:0">
	<h3>Tất cả sản phẩm</h3>
		<ul class="thumbnails">
			@foreach($productType as $cate)
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="{{route('productType',$cate->id)}}"><img src="template/image/product/{{$cate->image}}" alt=""></a>
				<div class="caption cntr">
					<p>{{$cate->name}}</p>
				</div>
			  </div>
			</li>
			@endforeach
		  </ul>
		  <div class="pagination row-fluid" align="center">{{$productType->links()}}</div>
</div>
@endsection