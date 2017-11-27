@extends('master')

@section('content')
    <div class="row">
        <ul class="breadcrumb">
            <li><a href="{{route('index')}}">Home</a> <span class="divider">/</span></li>
            <li class="active"> Trang cá nhân</li>
        </ul>
        <h3 style="text-align: center;"> Trang cá nhân </h3>
        <hr class="soft"/>
        <div class="span6">
            <form class="form-horizontal" method="post" action="{{route('postPersonal')}}">
                {{ csrf_field() }}
                <h4 style="text-align: center;">Thông tin cá nhân</h4>
                <hr class="soft"/>

                <div class="control-group">
                    <label class="control-label" for="input_email">Email <sup>*</sup></label>
                    <div class="controls">
                        <input type="email" disabled="" value="{{$personal->email}}" name="txtEmail" id="txtEmail"
                               placeholder="Email">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputFname1">Tên <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="txtName" value="{{ $personal->name }}" name="txtName" placeholder="Tên">
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
                        <input type="date" value="{{$personal->birthday}}" name="txtBirthday" min="1940-01-01" id="txtBirthday"
                               max="2017-07-07"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="mobile">Số điện thoại <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" value="{{$personal->phone_number}}" name="txtPhoneNumber" id="txtPhoneNumber" placeholder="09xxxxxxxx"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputLnam"> Địa chỉ <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="txtAddress" value="{{$personal->address}}" id="txtAddress" placeholder="Địa chỉ">
                    </div>
                </div>

                <p><sup>*</sup> không được để trống </p>

                <div class="control-group">
                    <div class="controls">

                        <button type="button" name="edit" id="edit" class="btn btn-success"> Sửa</button>
                        <button type="submit" name="save" id="save" class="btn btn-primary">Lưu</button>
                        <button type="cancel"  name="cancel" id="cancel" class="btn btn-danger">Hủy</button>
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
        <div class="span6">
            <h4 style="text-align: center;">Thông tin đơn hàng</h4>
            <hr class="soft"/>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="text-align: center">STT</th>
                    <th>ID </th>
                    <th style="text-align: center">Nơi nhận</th>
                    <th style="text-align: center">Số điện thoại</th>
                    <th style="text-align: center">Số tiền</th>
                    <th style="text-align: center">Tình trạng</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bills as $key => $value)
                <tr>
                    <td style="text-align: center">{{$key}}</td>
                    <td class="sanphamdathang" idDatHang=""> {{$value['id']}}</td>
                    <td style="text-align: center"> {{$value['address']}}</td>
                    <td style="text-align: center"> {{$value['phone_number']}}</td>
                    <td style="text-align: center"> {{$value['total']}}</td>
                    <td style="text-align: center"> {{ ($value['confirm']==1) ? "Đã nhận" : "Chưa nhận" }}</td>
                </tr>
                @endforeach

                <tr>
                    <td colspan="5" style="text-align:right;">Tổng tiền tất cả đơn hàng đã mua</td>
                    <td style="text-align: center;"> VNĐ</td>
                </tr>
                </tbody>
            </table>
            <div id="ketquaz"></div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#save').hide();
            $('#cancel').hide();

            $("#txtAddress").attr("disabled", "disabled");
            $("#txtBirthday").attr("disabled", "disabled");
            $("#txtPhoneNumber").attr("disabled", "disabled");
            $("#txtGen").attr("disabled", "disabled");
            $("#txtName").attr("disabled", "disabled");


            $('#edit').click(function(){
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
