@extends('master')
@section('content')

<div class="col-md-12 col-sm-12" style="background-color: #f5f5f5;margin: 0px;border-radius: 2px;">
@foreach($introduce as $intro)
    <h1 align="center">{{$intro->title}}</h1>

<hr class="soften">
<div class="row">
    <div class="col" style="padding-left: 40px">
        <p>{!! $intro->content !!}</p>
    </div>
    <div class="col-md-3 col-sm-3 " style="float: right">
    	<br><br>
        HoaSaiGon.tk<br/>
        Thân mến<br/>
    </div>
</div>
@endforeach
</div>
@endsection