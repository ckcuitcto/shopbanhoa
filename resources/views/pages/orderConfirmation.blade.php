@extends('master')
@section('content')
    @if (Cart::count()>0 OR Session::has('flash_message'))
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a> <span class="divider">/</span></li>
                <li class="active"> Mua hàng</li>
            </ul>
            <h3> Xác nhận đơn hàng </h3>
            <hr class="soft"/>
            <div class="span6">
                <form class="form-horizontal" method="post" action="{{route('getOrderConfirmation')}}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="input01">Tên người nhận</label>
                            <div class="controls">
                                <input type="text" name="txtRecipient" value="{{$user->name}}" class="input-xlarge"
                                       id="input01">

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input11">Nơi nhận</label>
                            <div class="controls">
                                <input type="text" name="txtAddress" value="{{$user->address}}" class="input-xlarge"
                                       id="input11">

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input11">SĐT</label>
                            <div class="controls">
                                <input type="text" name="txtPhoneNumber" value="{{$user->phone_number}}" class="input-xlarge"
                                       id="input11">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea">Ghi chú</label>
                            <div class="controls">
                            <textarea class="input-xlarge" name="txtNote" id="textarea" rows="3"
                                      style="height:65px"></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="pay" class="btn btn-primary">Mua</button>
                                <button type="cancel" class="btn">Từ từ</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {!! Session::get('flash_message') !!}
                    Bạn sẽ nhận được hàng trong ít nhất 5 ngày kể từ thời điểm này !!
                </div>
                <h4>Trang sẽ tự chuyển đến trang cá nhân sau <span id="timecount"></span> giây!</h4>
            @endif
                @include('admin.blocks.error')
            </div>
            <div class="span6">
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
                        <td style="text-align: center;">{{Cart::total(0)}} đ</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection