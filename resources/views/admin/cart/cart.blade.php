@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12 ">
     <h2>Danh sách đơn hàng</h2>   
        
    </div>
</div>
<div class="row">
    <div class="col-md-4 donhang" xacnhan="2">
     <h3><a href="{{route('admin.cart.getCart','2')}}">Tất cả đơn hàng</a></h3>     
    </div>
    <div class="col-md-4 donhang" xacnhan="1">
     <h3><a href="{{route('admin.cart.getCart','1')}}">Đơn hàng đã xác nhận</a> </h3>     
    </div>
    <div class="col-md-4 donhang" xacnhan="0">
     <h3><a href="{{route('admin.cart.getCart','0')}}">Đơn hàng chưa nhận </a></h3>     
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12">
    <div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th style="text-align: center">STT</th>
                <th style="text-align: center">ID Đơn Hàng</th>
                <th style="text-align: center">Tên người nhận</th>
                <th style="text-align: center">Nơi nhận</th>
                <th style="text-align: center" >Số điện thoại</th>
                 <th style="text-align: center" >Ghi chú</th>
                <th style="text-align: center">Số tiền (VNĐ)</th>
                <th style="text-align: center">Tình trạng</th>
              </tr>
            </thead>

            <tbody >

              <tr >
                <td style="text-align: center"></td>
                <td style="text-align: center" class="sanphamdathang" ></td>
                <td style="text-align: center"></a></td>
                <td style="text-align: center"></td>

                <td style="text-align: center"></td>
                 <td style="text-align: center">/td>
                <td style="text-align: center"></td>
                <td style="text-align: center"></td>
              </tr>

            </tbody>
         
          </table>

          <div id="ketquaz"></div>
    </div>
    </div>
</div>


@endsection