@extends('master')
@section('content')
    @if (Cart::count()>0 OR Session::has('flash_message'))
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #f5f5f5">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">  Mua hàng </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row" style="background-color: #f5f5f5;margin:0">

            <div class="col-6">
                <h3> Xác nhận đơn hàng </h3>
                <form method="post" action="{{route('postOrderConfirmation')}}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="txtRecipient">Tên người nhận</label>
                        <input type="text" class="form-control col-md-8" name="txtRecipient" value="{{$user->name}}"
                               id="txtRecipient">
                    </div>

                    <div class="form-group">
                        <label for="txtAddress">Nơi nhận</label>
                        <input type="text" class="form-control col-md-8" value="{{$user->address}}" name="txtAddress"
                               id="txtAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="text" class="form-control col-md-8" id="txtEmail" name="txtEmail" value="{{$user->email}}"
                               placeholder="gmail,hotmail,...">
                    </div>
                    {{--<div class="form-row">--}}
                    <div class="form-group">
                        <label for="txtPhoneNumber">Số điện thoại</label>
                        <input type="text" class="form-control col-md-8" name="txtPhoneNumber" value="{{$user->phone_number}}"
                               id="txtPhoneNumber">
                    </div>
                    {{--</div>--}}

                    <div class="form-group">
                        <label for="txtNote">Ghi chú</label>
                        <textarea class="form-control col-md-8" name="txtNote" id="textarea" rows="5"
                                  style="height:65px"></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Mua</button>
                </form>

                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        {!! Session::get('success_message') !!}
                        Chúng tôi sẽ sớm liên hệ với bạn !
                        <h4>Trang sẽ tự chuyển đến trang chủ sau <span id="timecount"></span> giây!</h4>
                    </div>
                @endif

                @include('admin.blocks.error')
            </div>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th style="text-align: center">STT</th>
                        <th>Tên Sản Phẩm</th>
                        <th style="text-align: center">Số lượng</th>
                        <th style="text-align: center">Đơn Giá</th>
                        <th style="text-align: center">Tổng giá</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($listCart as $item)

                        <tr>
                            <td style="text-align: center">{{$i}}</td>
                            <td style="text-align: center">{{$item->name}}</td>
                            <td style="text-align: center">{{$item->qty}}</td>
                            <td style="text-align: center">{{number_format($item->price,0,",",".")}}</td>
                            <td style="text-align: center">{{number_format($item->qty * $item->price,0,",",".")}} đ</td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                    <tr>
                        <td colspan="4" style="text-align:right;">Tổng giá</td>
                        <td style="text-align: center;">{{Cart::subtotal(0)}} đ</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            @if(Session::has('success_message'))
                @php
                    Cart::destroy();
                    Session::forget('success_message');
                @endphp
            @endif

        </div>

    @endif
@endsection