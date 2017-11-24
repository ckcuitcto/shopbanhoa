@extends('master')
@section('content')

<<<<<<< HEAD
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
=======
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
                        <h4>
                            <a class="defaultBtn" href="{{route('productDetail',$product->id)}}"
                               title="Click to view"><span
                                        class="icon-zoom-in"></span></a>
                            <a class="shopBtn" idProduct="{{$product->id}}"
                               href="{{route('purchase',['id'=> $product->id,'qty'=>1])}}"
                               title="add to cart"><span class="icon-plus"></span></a>
                            <span class="pull-right">{{number_format($product->unit_price,0,",",".")}}đ</span>
                        </h4>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="pagination row-fluid" align="center">{{$products->links()}}</div>
    </div>
>>>>>>> ab53859d4a2257f38f00a21224602e518f5a3e1e
@endsection