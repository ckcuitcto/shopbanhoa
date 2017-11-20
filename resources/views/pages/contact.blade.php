@extends('master')
@section('content')

<div style="margin: 0">
<div class="well well-small">
    <h1>Địa chỉ liên hệ</h1>
    <hr class="soften"/>
    <div class="row-fluid">
        <div class="span12 relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9425020208073!2d106.67614631524697!3d10.738914992347022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752face37719c3%3A0x3baea7afedffaa6d!2zMTkwIENhbyBM4buXLCBwaMaw4budbmcgNCwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1511091801829" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="absoluteBlk">
                <div class="well wellsmall">
                    <h4>Contact Details</h4>
                    <h5>
                        2601 Mission St.<br/>
                        San Francisco, CA 94110<br/><br/>

                        info@mysite.com<br/>
                        ﻿Tel 123-456-6780<br/>
                        Fax 123-456-5679<br/>
                        web:wwwmysitedomain.com
                    </h5>
                </div>
            </div>
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