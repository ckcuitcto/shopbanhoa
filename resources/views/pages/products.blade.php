@extends('master')
@section('content')
    <div class="span12" id="searchBox" style="background-color: #f5f5f5;margin:0; ">
        <h3 style="padding-left: 20px">Tìm kiếm <i class=" icon-chevron-down"></i></h3>
        <hr>
    </div>
    <div class="span12" style="background-color: #f5f5f5;margin:0; ">
        <div class="row" id="search">
            <form class="form-horizontal" action="{{route('getProducts')}}" method="GET">

                <div class="control-group">
                    <label class="control-label" for="slPrice">Giá</label>
                    <div class="controls">
                        <select class="span4" name="slPrice">
                            <option value="0"> Tất cả </option>
                            <option value="1"> Dưới 200.000đ</option>
                            <option value="2"> Từ 200.000đ -> 400.000đ </option>
                            <option value="3"> Từ 400.000đ -> 800.000đ </option>
                            <option value="4"> Trên 800.000đ </option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="txtName">Tên sản phẩm</label>
                    <div class="controls">
                        <input type="text" class="span4" name="txtName" placeholder="Tên của sản phẩm">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="slOrderBy">Sắp xếp theo</label>
                    <div class="controls">
                        <select class="span4" name="slOrderBy">
                            <option value="0"> --Chọn-- </option>
                            <option value="1"> Sản phẩm được mua nhiều</option>
                            <option value="2"> Sản phẩm được xem nhiều</option>
                            <option value="3"> Giá từ cao đến thấp</option>
                            <option value="4"> Giá từ thấp đến cao</option>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="chksoldOut"> Sản phẩm đã hết hàng
                        </label>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" class="btn btn-success">Tìm kiếm</button>
                        <button type="cancel" name="cancel" class="btn btn-danger">Làm mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <hr>
    <div class="span12" style="background-color: #f5f5f5;margin:0">
        <h3 style="padding-left: 20px;">Các sản phẩm</h3>
        <ul class="thumbnails">
            @foreach($products as $product)
                <li class="span3" style="width: 210px;margin-left: 27px">
                    <div class="thumbnail" style="padding-left: -15px">
                        <a href="product_details.html" class="overlay"></a>
                        <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                        <a href="{{route('productDetail',$product->id)}}"><img style="height: 213px;"
                                                                               src="template/image/product/{{$product->image}}"
                                                                               alt=""></a>
                        <div class="caption cntr">
                            <p>{{$product->name}}</p>
                        </div>
                        <h4>
                            <a class="defaultBtn" href="{{route('productDetail',$product->id)}}" title="Click to view">
                                <span class="icon-zoom-in"></span></a>
                            @if($product->quantity > 0 )
                                <a class="shopBtn" idProduct="{{$product->id}}" title="add to cart"><span
                                            class="icon-plus"></span></a>
                            @endif
                            <span class="pull-right">{{number_format($product->unit_price,0,",",".")}} đ</span>
                        </h4>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="pagination row-fluid" align="center">{{$products->links()}}</div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $("#searchBox").click(function () {
                $("#search").slideToggle("slow");
            });
        });
    </script>
@endsection