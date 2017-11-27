@extends('master')
@section('content')

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{route('index')}}">Trang chủ</a> <span class="divider">/</span></li>
		<li class="{{route('news')}}">Tin tức</li>
    </ul>
	<div class="well well-small">
		<h2> {{$news->title}}</h2>	
		<hr class="soft"/>
		<p>{{$news->content}}</p>
		<img src="template/image/news/{{$news->image}}">
	</div>
</div>

@endsection