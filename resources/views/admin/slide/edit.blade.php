@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Sửa slide</h2>
        </div>
    </div>
    <hr/>
    <form action="{{route('admin.slide.getEdit',$slide->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">

                    
                        <div class="form-group">
                            <label>ID</label>
                            <input style="height: auto" type="text" class="form-control" name="txtSlideID"
                                   value="{{old('txtSlideID',$slide->id)}}" placeholder="ID hình" disabled="disabled" />
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input style="height: auto" class="form-control" type="text" 
                                   name="txtLink" value="{{old('txtLink',$slide->link)}}"
                                   placeholder="Link" disabled="disabled"/>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Hình slide hiện tại</label>
                                <img width="400px" src="/template/image/slide/{{$slide->image}}">
                            </div>
                            <div class="form-group">
                                <label>Sửa slide</label>
                                <input type="file" name="fImages">
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" name="suaSlide" class="btn btn-default"> Sửa</button>
                <button type="cancel" class="btn btn-default">Hủy</button>
            </div>

                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
@endsection