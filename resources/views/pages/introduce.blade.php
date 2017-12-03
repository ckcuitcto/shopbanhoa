@extends('master')
@section('content')

<div class="span9" style="background-color: #f5f5f5;margin: 0px;border-radius: 2px;">
@foreach($introduce as $intro)
    <h1 align="center">{{$intro->title}}</h1>

<hr class="soften">
<div class="row">
    <div class="span8" style="padding-left: 40px">
        <p>{!! $intro->content !!}</p>
    </div>
    <div class="span3" style="float: right">
        HoaSaiGon.tk<br/>
        Thân mến<br/>
    </div>
</div>
@endforeach
</div>
@endsection