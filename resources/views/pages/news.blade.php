@extends('master')
@section('content')
    <div class="well well-small">
        @foreach($news as $tintuc)

            <div class="row-fluid">
                <div class="span2">
                    <img src="template/image/news/{{$tintuc->image}}" alt="">
                </div>
                <div class="span6">
                    <h5><a href="{{route('newsDetails',$tintuc->id)}}">{{$tintuc->title}} </a></h5>

                </div>
                <div class="span4 alignR">
                    <form class="form-horizontal qtyFrm">

                        <div class="btn-group">

                            <a href="{{route('newsDetails',$tintuc->id)}}" class="shopBtn">Xem thêm</a>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="soften">
        @endforeach
    </div>
@endsection