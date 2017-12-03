@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Thêm tin tức</h2>
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
                            <input style="height: auto" class="form-control hightInput" type="text" name="txtNewsTitle"
                                   placeholder="Title"/>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                           

                            <textarea rows="8" cols="500" id="my-editor" name="txtNewsContent" class="form-control">{!! old('txtNewsContent' ,"") !!}</textarea>
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
                        <div class="form-group">
                            <label>Hình đại diện</label>
                            <input type="file" name="fImages">
                        </div>

                    </div>
                    <button type="submit" name="themTT" class="btn btn-default"> Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
@endsection
