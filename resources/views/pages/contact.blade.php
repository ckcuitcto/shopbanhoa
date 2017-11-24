@extends('master')
@section('content')

<div style="margin: 0">
<div class="well well-small">
    <h1>Địa chỉ liên hệ</h1>
    <hr class="soften"/>
    <div class="row-fluid">
        <div class="span12 relative">
            {!! $contact->map !!}
            {{--<div class="absoluteBlk">--}}
                {{--<div class="well wellsmall">--}}
                    {{--<h4>Liên hệ với chúng tôi</h4>--}}
                    {{--<h5>--}}
                        {{--194 Cao Lỗ<br/>--}}
                        {{--Phường 4, Quận 8<br/><br/>--}}

                      {{--<a href="http://hoasaigon.tk"> http://hoasaigon.tk </a> <br/>--}}
                        {{--﻿Tel 123-456-6780<br/>--}}
                        {{--Fax 123-456-5679<br/>--}}
                    {{--</h5>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <div class="span12">
            <h4>Email cho chúng tôi</h4>
            <form class="form-horizontal" action="{!! url('lien-he') !!}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div class="control-group">
                        <input type="text" name="name" placeholder="Tên" class="input-xlarge"/>
                    </div>
                    <div class="control-group">
                        <input type="text" name="email" placeholder="Email" class="input-xlarge"/>
                    </div>
                    <div class="control-group">
                        <input type="text" name="title" placeholder="Tiêu đề" class="input-xlarge"/>
                    </div>
                    <div class="control-group">
                        <textarea rows="3" name="mess" id="textarea" class="input-xlarge"></textarea>
                    </div>
                    <button class="shopBtn" type="submit" name="submit">Gửi email</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
@endsection