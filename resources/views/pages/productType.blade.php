@extends('master')
@section('content')
    <div class="row" style="background-color: #f5f5f5;padding-top: 10px">
        @if(count($productsByIdType)>0)
     
            <div class="well well-small" style="border:none;margin-left: 10px;margin-right: 10px">
                <h3>&nbsp;Có tất cả {{$productsByIdType->total()}} sản phẩm thuộc loại: {{$productType->name}}</h3>
   
                <div class="row">
                    @foreach($productsByIdType as $product)
                        <div class="col-md-4 col-sm-4" style="width: 100%;padding-bottom: 20px">
                            <div class="card thumbnail">
                                <a href="{{route('productDetail',$product->id)}}" class="overlay"></a>
                                <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart">
                                    <span>{{number_format($product->unit_price,0,",",".")}} đ</span></a>
                                <a href="{{route('productDetail',$product->id)}}"><img
                                            src="template/image/product/{{$product->image}}" style="height: 210px"></a>
                                <div class="caption cntr">
                                    <p>{{$product->name}}</p>

                                    @if ( \App\Http\Controllers\PageController::checkQuantity($product->id) )
                                        <h4><a class="shopBtn" idProduct="{{$product->id}}"
                                               title="add to cart"> Thêm vào giỏ </a></h4>
                                    @else
                                        <h4><a class="defaultBtn" title="add to cart"> Hết hàng </a></h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="pagination row justify-content-center">{{ $productsByIdType->links("pagination::bootstrap-4") }}</div>

            </div>
        @else
            <div class="well well-small" style="border:none;margin-left: 25px">
                <h3>&nbsp;Loại hoa này không có sản phẩm hoa nào !</h3>
            </div>
        @endif
    </div>
@endsection
