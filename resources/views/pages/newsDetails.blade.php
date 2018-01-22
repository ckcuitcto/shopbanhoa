@extends('master')
@section('content')
<nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="background-color: #f5f5f5">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a> </li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Tin tức</a> </li>
              </ol>
            </nav>
    {{-- <div class="well well-small"> --}}
        {{-- <div class="col-md-9 col-sm-9"> --}}
            

            <div class="well well-small" style="background-color: #f5f5f5">
                <div align="center" style="font-weight: bold;font-size: 25px"> {{$news->title}}</div>
                <img src="template/image/news/{{$news->image}}" width="100%">

                <hr class="soft"/>
                {{-- <p>{!! $news->content !!}</p> --}}
                <div style="text-align: justify;padding-left: 3%;padding-right: 3%">{!! $news->content !!}</div>
            </div>
        {{-- </div> --}}
   {{--  </div> --}}
@endsection