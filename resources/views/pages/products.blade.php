@extends('master')
@section('content')

<div class="col-md-12 col-sm-12" id="searchBox" style="background-color: #f5f5f5;margin:0; ">
    <p align="center" style="padding-top: 10px;padding-bottom: -20px">
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <h3>Tìm kiếm theo yêu cầu  <i class=" icon-chevron-down"></i></h3>
        </button>
    </p>
    <hr>
</div>

<div class="col-md-12 col-sm-12" style="background-color: #f5f5f5;" id="search">
    <!-- <div class="row" id="search"> -->
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
            
                <form action="{{route('getProducts')}}" method="GET">

                <div class="form-group row">
                    <label for="txtName" class="col-md-2 col-sm-2 col-form-label">Tên sản phẩm</label>
                    <div class="col-sm-10 col-sm-10">
                        @if (!empty($oldValue['txtName']))
                            <input type="text" class="form-control" value="{{ $oldValue['txtName'] }}" name="txtName"
                                   placeholder="Tên của sản phẩm">
                        @else
                            <input type="text" class="form-control" name="txtName" placeholder="Tên của sản phẩm">
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="slProductType" class="col-sm-2 col-form-label">Loại sản phẩm</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="slProductType">
                            <option value="0" {{ ($oldValue['slProductType']==0)  ? "selected" : "" }}> --Tất cả--
                            </option>
                            @foreach($category as $value)
                                <option value="{{$value->id}}" {{ ($oldValue['slProductType']==$value->id)  ? "selected" : "" }}>{{$value->name}} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="slPrice" class="col-sm-2 col-form-label">Giá</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="slPrice">
                            @if (!empty($oldValue['slPrice']))
                                <option value="0" {{ ($oldValue['slPrice']==0)  ? "selected" : "" }} > Tất cả</option>
                                <option value="1" {{ ($oldValue['slPrice']==1) ? "selected" : ""}} > Dưới 200.000đ
                                </option>
                                <option value="2" {{ ($oldValue['slPrice']==2 ) ? "selected" : "" }}> Từ 200.000đ
                                    ->400.000đ
                                </option>
                                <option value="3" {{ ($oldValue['slPrice']==3 ) ? "selected" : "" }}> Từ 400.000đ
                                    ->800.000đ
                                </option>
                                <option value="4" {{ ($oldValue['slPrice']==4 ) ? "selected" : "" }}> Từ 800.000đ
                                    ->1.000.000đ
                                </option>
                                <option value="5" {{ ($oldValue['slPrice']==5 ) ? "selected" : "" }}> Từ 1.000.000đ
                                    ->5.000.000đ
                                </option>
                                <option value="6" {{ ($oldValue['slPrice']==6 ) ? "selected" : "" }}> Trên 5.000.000đ
                                </option>
                            @else
                                <option value="0"> Tất cả</option>
                                <option value="1"> Dưới 200.000đ</option>
                                <option value="2"> Từ 200.000đ -> 400.000đ</option>
                                <option value="3"> Từ 400.000đ -> 800.000đ</option>
                                <option value="4"> Từ 800.000đ -> 1.000.000đ</option>
                                <option value="5"> Từ 1.000.000đ -> 5.000.000đ</option>
                                <option value="6"> Trên 5.000.000đ</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="slOrderBy" class="col-sm-2 col-form-label">Sắp xếp theo</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="slOrderBy">
                            @if (!empty($oldValue['slOrderBy']))
                                <option value="0" {{ ($oldValue['slOrderBy']==0)  ? "selected" : "" }}> --Chọn--
                                </option>
                                <option value="1" {{ ($oldValue['slOrderBy']==1)  ? "selected" : "" }}> Sản phẩm được
                                    mua nhiều
                                </option>
                                <option value="2" {{ ($oldValue['slOrderBy']==2)  ? "selected" : "" }}> Sản phẩm được
                                    xem nhiều
                                </option>
                                <option value="3" {{ ($oldValue['slOrderBy']==3)  ? "selected" : "" }}> Giá từ cao đến
                                    thấp
                                </option>
                                <option value="4" {{ ($oldValue['slOrderBy']==4)  ? "selected" : "" }}> Giá từ thấp đến
                                    cao
                                </option>
                            @else
                                <option value="0"> --Chọn--</option>
                                <option value="1"> Sản phẩm được mua nhiều</option>
                                <option value="2"> Sản phẩm được xem nhiều</option>
                                <option value="3"> Giá từ cao đến thấp</option>
                                <option value="4"> Giá từ thấp đến cao</option>
                            @endif
                        </select>
                    </div>
                </div>


                <div class="form-group" align="center">
                    <input type="checkbox" class="form-check-input"
                           {{ (!empty($oldValue['chksoldOut'])) ? "checked" : ""}} name="chksoldOut">
                    <label class="form-check-label" for="chksoldOut">Chỉ sản phẩm còn hàng</label>
                </div>


               <!--  <div class="form-check">                 
                    <div class="col-sm-12 col-md-12">
                        <input type="checkbox" class="form-check-input"
                           {{ (!empty($oldValue['chksoldOut'])) ? "checked" : ""}} name="chksoldOut">
                        <label class="form-check-label" for="chksoldOut">Chỉ sản phẩm còn hàng</label>
                    </div>
                </div> -->
                <div class="form-group" align="center">
                    <!-- <div class="col-sm-2 col-md-2">&nbsp;</div>
                    <div class="col-sm-10"> -->
                        <button type="submit" value="ok" name="submit" class="btn btn-success">Tìm kiếm</button>
                        <button type="cancel" name="cancel" class="btn btn-danger">Làm mới</button>
                    <!-- </div> -->
                </div>

            </form>
            </div>
        </div>
    <!-- </div> -->
</div>

    <div class="col-md-12 col-sm-12" style="background-color: #f5f5f5;margin:0">

        @if($products->count() > 0)

            <h3 style="padding-top: 10px">Tìm thấy {{ $products->total() }} sản phẩm :</h3>
            <div class="col-md-9 col-sm-9">
                <h4>
                    <ul>
                        @if(!empty($oldValue['txtName']))
                            <li>
                                {{ " tên :".$oldValue['txtName'] }}
                            </li>
                        @endif

                        @if(!empty($oldValue['slProductType']))
                            <li>
                                {{ " loại sản phẩm :". \App\Http\Controllers\ProductTypeController::getNameByTypeId($oldValue['slProductType']) }}
                            </li>
                        @endif

                        @if(!empty($oldValue['slPrice']))
                            <li>
                            {{ " mức giá :"}}
                            @if($oldValue['slPrice']==1)
                                {{ "Dưới 200.000đ" }}
                            @elseif($oldValue['slPrice']==2)
                                {{ "Từ 200.000đ ->400.000đ" }}
                            @elseif($oldValue['slPrice']==3)
                                {{ "Từ 400.000đ ->800.000đ" }}
                            @elseif($oldValue['slPrice']==4)
                                {{ "Từ 800.000đ ->1.000.000đ" }}
                            @elseif($oldValue['slPrice']==5)
                                {{ "Từ 1.000.000đ ->5.000.000đ" }}
                            @elseif($oldValue['slPrice']==6)
                                {{ "Trên 5.000.000đ" }}
                            @endif
                        @endif
                    </ul>
                </h4>
            </div>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-3" style="width: 210px;">
                        <div class="card-body thumbnail" style="padding-left: -15px;margin-bottom: 10px">
                            <a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart"><span
                                        class="icon-search"></span> QUICK VIEW</a>
                            <a href="{{route('productDetail',$product->id)}}"><img style="height: 213px;"
                                                                                   src="template/image/product/{{$product->image}}"
                                                                                   alt=""></a>
                            <div class="caption cntr">
                                <p>{{$product->name}}</p>
                            </div>
                            <h4>
                                <a class="defaultBtn" href="{{route('productDetail',$product->id)}}"
                                   title="Click to view">
                                    <span class="icon-zoom-in"></span></a>
                                @if($product->quantity > 0 )
                                    <a class="shopBtn" idProduct="{{$product->id}}" title="add to cart"><span
                                                class="icon-plus"></span></a>
                                @endif
                                <span class="pull-right" style="color: red;">{{number_format($product->unit_price,0,",",".")}}
                                    đ</span>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>


            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <br>
    </div>
    @else
        <h3>Không tìm thấy kết quả </h3>
        @endif
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