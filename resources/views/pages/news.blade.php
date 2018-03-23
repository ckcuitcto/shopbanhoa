@extends('master')
@section('content')
    <div class="well well-small" style="background-color: #f5f5f5">
        <h1 align="center" style="font-family: cursive;">Tin tức</h1>
  
        <ul class="list-group">
            @foreach($news as $tintuc)
              <li class="list-group-item">
                <div class="row">                  

                    <div class="col-md-2 col-sm-2">
                        <img src="template/image/news/{{$tintuc->image}}" style="width: 100%;display: inline;" alt="">
                    </div>

                    <div class="col-md-10 col-sm-10">
                        <div class="alert alert-secondary" role="alert">
                            <h5><a href="{{route('newsDetails',$tintuc->id)}}" style="text-decoration: none;">{{$tintuc->title}} </a></h5>
                            <div class="alignR">
                                <div class="btn-group">
                                    <a href="{{route('newsDetails',$tintuc->id)}}" class="shopBtn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </li>                       
           @endforeach
        </ul>


     {{--    @foreach($news as $tintuc)
        <br>
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <img src="template/image/news/{{$tintuc->image}}" style="width: 100%" alt="">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h5><a href="{{route('newsDetails',$tintuc->id)}}">{{$tintuc->title}} </a></h5>

                </div>
                <div class="col-md-4 col-sm-4 alignR">
                        <div class="btn-group">
                            <a href="{{route('newsDetails',$tintuc->id)}}" class="shopBtn">Xem thêm</a>
                        </div>
                </div>
            </div>
            <hr class="soften">
        @endforeach --}}
    </div>
@endsection