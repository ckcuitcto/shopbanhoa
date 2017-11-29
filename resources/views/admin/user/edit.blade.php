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
            <div class="col-md-8 col-sm-12 col-xs-12">
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
                        @if($userLogin->level ==2  AND $user->level !=2)
                         <div class="form-group">
                                <label for="txtUnit">Cấp</label>
                                <select class="form-control" name="slLevel" id="slLevel">
                                    <option {{($user->level ==0 )? "selected" : "" }} value="0">User</option>
                                    <option {{($user->level ==1 )? "selected" : "" }} value="1">Admin</option>
                                    <option {{($user->level ==2 )? "selected" : "" }} value="2">Super Admin</option>
                                </select>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Giới tính</label>
                            <label class="radio-inline"><input type="radio" {{($user->gender ==1 )? "checked" : "" }} value="1" name="rdoGender">Nam</label>
                            <label class="radio-inline"><input type="radio" {{($user->gender ==0 )? "checked" : "" }}  value="0" name="rdoGender">Nữ</label>
                            <label class="radio-inline"><input type="radio" {{($user->gender ==2 )? "checked" : "" }}  value="2" name="rdoGender">Khác</label>

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
                            <input style="height: auto" class="form-control" type="date" name="dateBirthday"
                                   value="{{old('dateBirthday',$user->birthday)}}" placeholder="Ngày sinh"/>
                        </div>
                        <div class="form-group">
                            <label>Ghi chú</label>
                            <textarea rows="8" cols="500" id="my-editor" name="txtNote" class="form-control">{!!old('txtNote',$user->note) !!}</textarea>
                            <script src="js/ckeditor.js"></script>
                            <script>
                                var options = {
                                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                };
                            </script>
                            <script>
                                CKEDITOR.replace('txtNote', options);
                            </script>
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