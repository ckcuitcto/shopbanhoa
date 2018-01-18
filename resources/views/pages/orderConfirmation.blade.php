@extends('master')
@section('content')
    @if (Cart::count()>0 OR Session::has('flash_message'))
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}">Trang chủ</a> <span class="divider">/</span></li>
                    <li class="active"> Mua hàng</li>
                </ul>
            </div>
        </div>

        <div class="row">

            <hr class="soft"/>
            <div class="col-md-6 col-sm-6">
                <h3> Xác nhận đơn hàng </h3>
                <form method="post" action="{{route('getOrderConfirmation')}}">

                    <div class="form-group">
                        <label for="txtRecipient">Tên người nhận</label>
                        <input type="text" class="form-control" name="txtRecipient" value="{{$user->name}}"
                               id="txtRecipient">
                    </div>

                    <div class="form-group">
                        <label for="txtAddress">Nơi nhận</label>
                        <input type="text" class="form-control" value="{{$user->address}}" name="txtAddress"
                               id="txtAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="text" class="form-control" id="txtEmail" value="{{$user->email}}"
                               placeholder="abcd@mail.com">
                    </div>
                    {{--<div class="form-row">--}}
                    <div class="form-group">
                        <label for="txtPhoneNumber">Số điện thoại</label>
                        <input type="text" class="form-control" name="txtPhoneNumber" value="{{$user->phone_number}}"
                               id="txtPhoneNumber">
                    </div>
                    {{--</div>--}}


                    <div class="form-group">
                        <label for="txtNote">Ghi chú</label>
                        <textarea class="form-control" name="txtNote" id="textarea" rows="5"
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
            <div class="col-md-6 col-sm-6">
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