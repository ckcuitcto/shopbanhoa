@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2> Quản lí trang giới thiệu</h2>
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
                            <label>Tiêu đề</label>
                            <input style="height: auto" class="form-control hightInput" type="text" name="txtNewsTitle" id="txtNewsTitle"
                                   placeholder="Title" value="{{$introduce->title}}" disabled />
                        </div>
                        <div class="form-group">
                            <label>Nội dung giới thiệu</label>
                            <textarea rows="8" cols="500" id="txtNewsContent" name="txtNewsContent" class="form-control">
                                <!-- {!! old('txtNewsContent' ,"") !!} -->
                                {{$introduce->content}}

                            </textarea>
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
                                CKEDITOR.replace('txtNewsContent', options);
                            </script>
                        </div>

                    </div>

                    <button type="button"  name="edit" id="edit" class="btn btn-warning"> Sửa</button>
                    <button type="submit" style="display: none" name="submit" id="submit" class="btn btn-success">Lưu</button>
                    <button type="cancel" style="display: none" name="cancel" id="cancel" class="btn btn-danger">Hủy</button>

                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </form>

<script>
        $(document).ready(function(){

            $('#edit').click(function(){
                $('#submit').show();
                $('#cancel').show();
                $('#edit').hide();

                $('#txtNewsTitle').removeAttr("disabled");
                $('#txtNewsContent').removeAttr("disabled");
            });

        });
    </script>
@endsection
