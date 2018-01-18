@extends('master')
@section('content')
    <div class="well well-small">
        @foreach($news as $tintuc)

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
        @endforeach
    </div>
@endsection