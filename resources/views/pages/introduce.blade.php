@extends('master')
@section('content')

<div class="col" style="background-color: #f5f5f5;margin: 0px">
@foreach($introduce as $intro)
    <h1 align="center">{{$intro->title}}</h1>

<hr class="soften">
<div class="row">
    <div style="padding-left: 40px">
        <p>{!! $intro->content !!}</p>
    </div>
</div>
<div class="row" style="float: right">
    	<br><br>
        HoaSaiGon.tk<br/>
        Thân mến<br/>
    </div>
@endforeach
</div>
@endsection