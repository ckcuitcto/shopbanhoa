@extends('master')

@section('content')

   
        <ul class="breadcrumb">
            <li><a href="{{route('index')}}">Home</a> <span class="divider">/</span></li>
            <li class="active"> Trang cá nhân</li>
        </ul>

        <div class="well well-small">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#cart" data-toggle="tab">Thông tin cá nhân</a></li>
            <li><a href="#profile" data-toggle="tab">Danh sách đơn đặt hàng</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="cart">
                <div class="span12">
                    <form class="form-horizontal" method="post" action="{{route('postPersonal')}}">
                        {{ csrf_field() }}
                        <h2 style="text-align: center;">Thông tin cá nhân</h2>
                        <hr class="soft"/>
                        <div class="row">
                            <div class="span1">&nbsp;</div>
                        <div class="span10">
                            <div class="control-group">
                            <label class="control-label" for="input_email">Email <sup>(*)</sup></label>
                            <div class="controls">
                                <input class="span5" type="email" disabled="" value="{{$personal->email}}" name="txtEmail"
                                       id="txtEmail"
                                       placeholder="Email">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputFname1">Tên <sup>(*)</sup></label>
                            <div class="controls">
                                <input class="span5" type="text" id="txtName" value="{{ $personal->name }}" name="txtName"
                                       placeholder="Tên">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Giới tính </label>
                            <div class="controls">
                                <select class="span1" name="txtGen" id="txtGen" style=" width: inherit;">
                                    <option value="1" {{ ( $personal->gender == 1) ? "selected=''" : ""}}> Nam</option>
                                    <option value="0" {{ ( $personal->gender == 0) ? "selected=''" : ""}}> Nữ</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Ngày sinh </label>
                            <div class="controls">
                                <input class="span5" type="date" value="{{$personal->birthday}}" name="txtBirthday" min="1940-01-01"
                                       id="txtBirthday"
                                       max="2017-07-07"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="mobile">Số điện thoại <sup>(*)</sup></label>
                            <div class="controls">
                                <input class="span5" type="text" value="{{$personal->phone_number}}" name="txtPhoneNumber"
                                       id="txtPhoneNumber"
                                       placeholder="09xxxxxxxx"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputLnam"> Địa chỉ <sup>(*)</sup></label>
                            <div class="controls">
                                <input class="span5" type="text" name="txtAddress" value="{{$personal->address}}" id="txtAddress"
                                       placeholder="Địa chỉ">
                            </div>
                        </div>

                        <p><sup>(*)</sup> không được để trống </p>

                        <div class="control-group">
                            <div class="controls">

                                <button type="button" name="edit" id="edit" class="btn btn-success"> Sửa</button>
                                <button type="submit" name="save" id="save" class="btn btn-primary">Lưu</button>
                                <button type="cancel" name="cancel" id="cancel" class="btn btn-danger">Hủy</button>
                            </div>
                        </div>
                        </div>
                        </div>
                    </form>

                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {!! Session::get('flash_message') !!}
                        </div>
                    @endif
                    @include('admin.blocks.error')
                </div>
            </div>
            <div class="tab-pane" id="profile">
                <div class="span11">
                    <h4 style="text-align: center;">Thông tin đơn hàng</h4>
                    <hr class="soft"/>
                    <table class="table table-striped table-hover" id="cartList">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th style="text-align: center">Nơi nhận</th>
                            <th style="text-align: center">SĐT</th>
                            <th style="text-align: center">Số tiền</th>
                            <th style="text-align: center">Tình trạng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bills as $key => $value)
                            <tr class="detailedProductList" billId="{{$value['id']}}">
                                <td> {{$value['id']}}</td>
                                <td style="text-align: center"> {{$value['address']}}</td>
                                <td style="text-align: center"> {{$value['phone_number']}}</td>
                                <td style="text-align: center"> {{$value['total']}}</td>
                                <td style="text-align: center"> {{($value['confirm']==1) ? "Đã nhận" : "Chưa nhận" }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align:right;">Tổng tiền tất cả đơn hàng đã mua</td>
                            <td style="text-align: center;"> {{$totalBill}} </td>
                            <td>VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="result" class="span6"></div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>

        $('a[data-toggle="tab"]').on('shown', function (e) {
            e.target // activated tab
            e.relatedTarget // previous tab
        });

        $(function () {
            $('#myTab a:last').tab('show');
        });


        $(document).ready(function () {
            $('#save').hide();
            $('#cancel').hide();

            $("#txtAddress").attr("disabled", "disabled");
            $("#txtBirthday").attr("disabled", "disabled");
            $("#txtPhoneNumber").attr("disabled", "disabled");
            $("#txtGen").attr("disabled", "disabled");
            $("#txtName").attr("disabled", "disabled");


            $('#edit').click(function () {
                $('#save').show();
                $('#cancel').show();
                $('#edit').hide();

                $('#txtAddress').removeAttr("disabled");
                $('#txtBirthday').removeAttr("disabled");
                $('#txtPhoneNumber').removeAttr("disabled");
                $('#txtGen').removeAttr("disabled");
                $('#txtName').removeAttr("disabled");
            });

        });
    </script>

@endsection