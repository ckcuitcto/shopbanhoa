@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Chỉnh sửa footer</h2>
        </div>
    </div>
    <hr/>

    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">


                        <div class="form-group">
                            <label>Tài khoản</label>
                            <textarea class="form-control" disabled rows="3" name="txtAccount" id="txtAccount" placeholder="Tài khoản">{{$footer->account}}</textarea>                             
                        </div>
                        <div class="form-group">
                            <label>Thông tin</label>
                            <textarea class="form-control" disabled rows="3" name="txtInform" id="txtInform" placeholder="Thông tin">{{$footer->inform}}</textarea>                            
                        </div>

                        <div class="form-group">
                            <label>Nguồn</label>                            
                            <textarea class="form-control" disabled rows="3" name="txtSource" id="txtSource"
                                   placeholder="Nguồn">{{$footer->source}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea rows="8" cols="500" id="my-editor" name="txtDescription" class="form-control">{{$footer->description}}</textarea>
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
                                CKEDITOR.replace('txtDescription', options);
                            </script>
                        </div>

                        <div class="form-group">
                            <label>Phần title trên thanh header</label>                            
                            <textarea class="form-control" disabled rows="3" name="txtTitleHeader" id="txtTitleHeader"
                                   placeholder="Title Header">{{$footer->titleHeader}}</textarea>
                        </div>

                    </div>
                    <button type="button"  name="edit" id="edit" class="btn btn-warning"> Sửa</button>
                    <button type="submit" style="display: none" name="save" id="save" class="btn btn-success">Lưu</button>
                    <button type="cancel" style="display: none" name="cancel" id="cancel" class="btn btn-danger">Hủy</button>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function(){


            // $("#txtAccount").attr("disabled", "disabled");
            // $("#txtInform").attr("disabled", "disabled");
            // $("#txtSource").attr("disabled", "disabled");
            // $("#txtDescription").attr("disabled", "disabled");


            $('#edit').click(function(){
                $('#save').show();
                $('#cancel').show();
                $('#edit').hide();

                $('#txtAccount').removeAttr("disabled");
                $('#txtInform').removeAttr("disabled");
                $('#txtSource').removeAttr("disabled");
                $('#txtDescription').removeAttr("disabled");
                $('#txtTitleHeader').removeAttr("disabled");
            });

        });
    </script>
@endsection
