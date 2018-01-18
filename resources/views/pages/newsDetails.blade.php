@extends('master')
@section('content')
    <div class="well well-small">
        <div class="col-md-9 col-sm-9">
            <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Trang chủ</a> <span class="divider">/</span></li>
                <li class="{{route('news')}}">Tin tức</li>
            </ul>
            <div class="well well-small">
                <h2> {{$news->title}}</h2>
                <img src="template/image/news/{{$news->image}}">

                <hr class="soft"/>
                <p>{!! $news->content !!}</p>
            </div>
        </div>
    </div>
@endsection