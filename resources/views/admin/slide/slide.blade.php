@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Quản lí slide</h2>
        </div>
    </div>
    <hr/>
    <form action="{{route('admin.slide.getList')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">

                                <div class="form-group">
                                    <label>Các slide đang hiển thị</label>
                                    <div class="row">
                                        @foreach($slide as $item)
                                            <div class="col-md-2" style="width: 200px; height: 50%;">
                                                <p>
                                                    <img src="/template/image/slide/{{$item->image}}">
                                                </p>
                                                <button style="margin-top: -6px;margin-left: 60px; " type="button"
                                                        slideId="{{$item->id}}"
                                                        class="btn btn-default slideImage">X
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Thêm slide mới</label>
                                    <input type="file" name="mutilFile[]" multiple>
                                </div>
                      

                        <br>
                        <div class="row">
                            <div class="col-md-9">
                                <button type="submit" name="suaSP" class="btn btn-primary"> Thêm</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection