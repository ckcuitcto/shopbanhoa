@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Cập nhật User</h2>
        </div>
    </div>
    <hr/>
    <form action="{{route('admin.user.getEdit',$user->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">

                        

                        <div class="form-group">
                            <label>ID User</label>
                            <input style="height: auto" type="text" class="form-control" name="txtIdUser"
                                   value="{{old('txtIdUser',$user->id)}}" placeholder="ID User" disabled />
                        </div>
                        <div class="form-group">
                            <label>Tên User</label>
                            <input style="height: auto" type="text" class="form-control" name="txtName"
                                   value="{{old('txtName',$user->name)}}" placeholder="Tên User"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input style="height: auto" type="Password" class="form-control" name="txtPassword"
                                   value="{{old('txtPassword',$user->password)}}" placeholder="Password" disabled />
                        </div>
                        <div class="form-group">
                            <label>Cấp</label>
                            <input style="height: auto" type="text" class="form-control" name="txtLevel"
                                   value="{{old('txtLevel',$user->level)}}" placeholder="Cấp"/>
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <input style="height: auto" class="form-control" type="text" name="txtGender"
                             value="{{old('txtGender',$user->gender)}}" placeholder="Giới tính"/>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input style="height: auto" class="form-control" type="text" name="txtAddress"
                                   value="{{old('txtAddress',$user->address)}}" placeholder="Địa chỉ"/>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input style="height: auto" class="form-control" type="text" name="txtPhone"
                                   value="{{old('txtPhone',$user->phone_number)}}" placeholder="Số điện thoại"/>
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input style="height: auto" class="form-control" type="text" name="txtBirthday"
                                   value="{{old('txtBirthday',$user->birthday)}}" placeholder="Ngày sinh"/>
                        </div>
                        <div class="form-group">
                            <label>Ghi chú</label>
                            <input style="height: auto" class="form-control" type="text" name="txtNote"
                                   value="{{old('txtNote',$user->note)}}" placeholder="Ghi chú"/>
                        </div>
                        <div class="form-group">
                            <label>Quên mật khẩu</label>
                            <input style="height: auto" class="form-control" type="text" name="txtRemember_token"
                                   value="{{old('txtRemember_token',$user->remember_token)}}" placeholder="Quên mật khẩu"/>
                        </div>
                        <div class="form-group">
                            <label>Ngày tạo</label>
                            <input style="height: auto" class="form-control" type="text" name="txtCreated_at"
                                   value="{{old('txtCreated_at',$user->created_at)}}" placeholder="Ngày tạo"/>
                        </div>
                        <div class="form-group">
                            <label>Ngày cập nhật</label>
                            <input style="height: auto" class="form-control" type="text" name="txtUpdated_at"
                                   value="{{old('txtUpdated_at',$user->update_at)}}" placeholder="Ngày cập nhật"/>
                        </div>
                        </div>
                    </div>
                    <button type="submit" name="suaSP" class="btn btn-default"> Sửa</button>
                    <button type="cancel" class="btn btn-default">Hủy</button>
                </div>

                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
@endsection