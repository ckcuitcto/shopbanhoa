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
                            <input style="height: auto" type="text" class="form-control" name="txtNewsContent"
                                   value="{{old('txtNewsContent',$news->content)}}" placeholder="Content"/>
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
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Hình chi tiết</label>
                                    <div class="row">
                                    @foreach($newsImage as $image)
                                        <div class="col-md-2" style="width: 200px; height: 200px;">
                                            <p>
                                            <img  src="/template/image/newsImage/{{$image->image}}">
                                            </p>
                                            <button style="margin-top: -6px;margin-left: 60px; " type="button" newsImageId="{{$image->id}}"
                                                    class="btn btn-default NewsImage">X
                                            </button>
                                        </div>
                                    @endforeach
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Thêm hình chi tiết</label>
                                    <input type="file" name="mutilFile[]" multiple>
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