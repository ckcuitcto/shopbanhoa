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
              @foreach($carts as $value)
              <tr >
                <td style="text-align: center" class="sanphamdathang" ><a href="{{route('admin.cart.getBillDetail',$value->id)}}">{{$value->id}}</a></td>
                <td style="text-align: center">{{$value->recipient}}</td>
                <td style="text-align: center">{{$value->address}}</td>

                <td style="text-align: center">{{$value->phone_number}}</td>
                 <td style="text-align: center">{{$value->note}}</td>
                <td style="text-align: center">{{$value->total}}</td>
                <td style="text-align: center">
                  <span class='glyphicon {{ ($value->confirm == 1) ? 'glyphicon-ok-sign' : 'glyphicon-remove-sign' }}'></span>
                </td>
              </tr>
              @endforeach

            </tbody>

          </table>

          <div id="ketquaz"></div>
    </div>
    </div>
</div>


@endsection