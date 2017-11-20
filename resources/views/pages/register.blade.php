@extends('master')
@section('content');

<!-- <script type="text/javascript">

            $("#formdangki").validate({
                rules: {
                    Fname: {
                        required: true,
                        minlength: 2
                    },
                    Email: {
                        required: true,
                        Email: true
                    },
                    Password: {
                        required: true,
                        minlength: 5
                    },
                    re_Password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#Password"
                    }
                },
                messages: {
                    Fname: {
                        required: "Vui lòng nhập họ tên",
                        minlength: "Họ và tên phải có ít nhất 2 kí tự"
                    },
                    Email: {
                        required: "Vui lòng nhập email",
                        minlength: "Email không hợp lệ, vui lòng nhập lại"
                    },
                    Password: {
                        required: "Vui lòng nhập password",
                        minlength: "Password phải có ít nhất 5 kí tự"
                    },
                    re_Password: {
                        required: "Vui lòng nhập lại password",
                        minlength: "Password phải có ít nhất 5 kí tự",
                        equalTo: "Password vừa nhập không trùng khớp với password ở trên"
                    }
                }
            });
    </script> -->


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
        <li class="active">Registration</li>
    </ul>
    <h3> Registration</h3>
    <hr class="soft"/>
    <div class="well">
        <form action="{{route('register')}}" method="post" class="form-horizontal" id="formdangki" name="formdangki">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $err)
                        <li>
                            {{$err}}
                        </li>
                        @endforeach
                    </ul>
                    </div>
                @endif
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
            </div>
            <h3>Thông tin cá nhân</h3>
            <div class="control-group">
                <label class="control-label" for="Fname">Họ và tên <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Fname" id="Fname" placeholder="Full Name" required>
                </div>
            </div>
        
            <div class="control-group">
                <label class="control-label" for="Email">Email <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Email" id="Email" placeholder="Email" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="Password">Mật khẩu <sup>*</sup></label>
                <div class="controls">
                    <input type="password" name="Password" id="Password" placeholder="Password" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="re_Password">Nhập lại mật khẩu <sup>*</sup></label>
                <div class="controls">
                    <input type="password" name="re_Password" id="re_Password" placeholder="RePassword" required>
                </div>
            </div>
         <!--    <div class="control-group">
                <label class="control-label" for="Phone">Phone <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Phone" placeholder="Phone" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="Address">Address <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Address" placeholder="Address" required>
                </div>
            </div> -->
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value="Đăng lý" class="exclusive shopBtn">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection