@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Danh sách người dùng</h2>
        <h5>Danh sách người dùng, xoá, sửa user... </h5>

    </div>
</div>
<!-- /. ROW  -->
<hr/>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách người dùng
            </div>
            <div class="panel-body">
                <div class="table-responsive">

                    <!-- DO DL vao day  -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Họ và Tên</td>
                                <td>Email</td>
                                <td>Mật khẩu</td>
                                <td>Cấp</td>
                                <td>Giới tính</td>
                                <td>Địa chỉ</td>
                                <td>Số điện thoại</td>
                                <td>Ngày sinh</td>
                                <td>Ghi chú</td>
                                <td>Quên mật khẩu</td>
                                <td>Ngày tạo</td>
                                <td>Ngày sửa</td>
                                <td>Xóa</td>

                            </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                <tr class="odd gradeX">
                                    <td><a href="{{route('admin.user.getEdit',$user->id)}}"> {{$user->id}} </a>
                                    </td>
                                    <td><a href="{{route('admin.user.getEdit',$user->id)}}"> {{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->level == 1 ? "admin" : "user"}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->phone_number}}</td>
                                    <td>{{$user->birthday}}</td>
                                    <td>{{$user->note}}</td>
                                    <td>{{$user->remember_token}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td><a onclick="return confirm('Bạn có chắc muốn xóa không')"
                                           href="{{route('admin.user.getDelete',$user->id)}}">Xoá</a></td>
                                </tr>
                                @endforeach                         
                            </tbody>

                        </table>
                    <!-- /. het thuc do DL  -->

                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
    @endsection