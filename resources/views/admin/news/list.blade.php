@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách tin tức</h2>
            <h5>Xem danh sách, xoá , sửa tin tức tại đây! </h5>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách tin tức
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newsList as $news)
                                <tr class="odd gradeX">
                                    <td><a href="{{route('admin.news.getEdit',$news->id)}}"> {{$news->id}} </a>
                                    </td>
                                    <td><a href="{{route('admin.news.getEdit',$news->id)}}"> {{$news->title}}
                                            <p><img width="200px" src="/template/image/news/{{$news->image}}"></p>
                                        </a></td>
                       
                                    <td>{{$news->created_at}}</td>
                                    <td>{{$news->updated_at}}</td>
                                    <td><a onclick="return confirm('Bạn có chắc muốn xoá không')"
                                           href="{{route('admin.news.getDelete',$news->id)}}">Xoá</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

@endsection