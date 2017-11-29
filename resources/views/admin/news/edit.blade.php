@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Sửa tin tức</h2>
        </div>
    </div>
    <hr/>
    <form action="{{route('admin.news.getEdit',$news->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="form-group">
                            <label>Title</label>
                            <input style="height: auto" type="text" class="form-control" name="txtNewsTitle"
                                   value="{{old('txtNewsTitle',$news->title)}}" placeholder="Title"/>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea rows="8" cols="500" id="my-editor" name="txtNewsContent" class="form-control">{!! old('content',  $news->content) !!}</textarea>
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

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Hình đại diện hiện tại</label>
                                    <img width="400px" src="/template/image/news/{{$news->image}}">
                                </div>
                                <div class="form-group">
                                    <label>Sửa hình đại diện</label>
                                    <input type="file" name="fImages">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="suaTT" class="btn btn-default"> Sửa</button>
                    <button type="cancel" class="btn btn-default">Hủy</button>
                </div>

                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
@endsection