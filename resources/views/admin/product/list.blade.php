@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách sản phẩm</h2>
            <h5>Xem danh sách, xoá , sửa sản phẩm tại đây! </h5>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách sản phẩm
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Miêu tả</th>
                                <th>Giá (VNĐ)</th>
                                <th>KM (%)</th>
                                <th>ĐVT</th>
                                <th>Ẩn hiện</th>
                       <!--          <th>Loại sản phẩm</th> -->
                                <th>Tồn kho</th>
                                <th>Ngày tạo</th>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productList as $product)
                                <tr class="odd gradeX">
                                    <td><a href="{{route('admin.product.getEdit',$product->id)}}"> {{$product->id}} </a>
                                    </td>
                                    <td><a href="{{route('admin.product.getEdit',$product->id)}}"> {{$product->name}}
                                                <p><img width="200px" src="/template/image/product/{{$product->image}}"></p>
                                        </a></td>
                                    <td>{{strip_tags($product->description)}}</td>
                                    <td>{{number_format($product->unit_price,0,",",".")}}</td>
                                    <td>{{$product->promotion_price}}</td>
                                    <td>{{$product->unit_dvt->name}}</td>
                                    <td>{{$product->new == 1 ? "Hiện" : "Ẩn"}}</td>
                                 <!--    <td>{{$product->product_type->name}}</td> -->
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td><a onclick="return confirm('Bạn có chắc muốn xoá không')"
                                           href="{{route('admin.product.getDelete',$product->id)}}">Xoá</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

@endsection