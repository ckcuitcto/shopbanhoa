@extends('master')
@section('content')
    <div class="well well-small">
        {{-- <div class="col-md-9 col-sm-9"> --}}
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="background-color: #f5f5f5">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a> </li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Tin tức</a> </li>
              </ol>
            </nav>

            {{-- <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Trang chủ</a> <span class="divider">/</span></li>
                <li class="{{route('news')}}">Tin tức</li>
            </ul> --}}
            <div class="well well-small" style="background-color: #f5f5f5">
                <div class="row" align="center"><h3> {{$news->title}}</h3></div>
                <img src="template/image/news/{{$news->image}}" width="100%">

                <hr class="soft"/>
                <p>{!! $news->content !!}</p>
            </div>
        {{-- </div> --}}
    </div>
@endsection