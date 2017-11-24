@extends('master')
@section('content')

<div style="margin: 0">
<div class="well well-small">
    <h1>Địa chỉ liên hệ</h1>
    <hr class="soften"/>
    <div class="row-fluid">
        <div class="span12 relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9425020208073!2d106.67614631524697!3d10.738914992347022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752face37719c3%3A0x3baea7afedffaa6d!2zMTkwIENhbyBM4buXLCBwaMaw4budbmcgNCwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1511091801829" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="span12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h4>Email cho chúng tôi</h4>
            <form action="{{route('contact')}}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div class="control-group">
                        <label for="name" class="span2">Tên</label>
                        <div class="controls">
                            <input type="text" class="span5" name="name" placeholder="Tên" class="input-xlarge"/>
                        </div>
                    </div>
                  <div class="control-group">
                    <label for="email" class="span2">Email</label>
                    <div class="controls">
                      <input type="email" class="span5" name="email" placeholder="Email" class="input-xlarge"/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="phone" class="span2">Phone</label>
                    <div class="controls">
                      <input type="text" class="span5" name="phone" placeholder="Phone" class="input-xlarge control-input"/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="title" class="span2">Tiêu đề</label>
                    <div class="controls">
                      <input type="text" class="span5" name="title" placeholder="Tiêu đề" class="input-xlarge control-input"/>
                    </div>
                  </div>
                  
                <div class="control-group">
                    <label for="description" class="span2">Nội dung</label>
                    <div class="controls">
                      <textarea rows="3" class="span5" name="description" placeholder="Nội dung" id="textarea" class="input-xlarge"></textarea>
                    </div>
                </div>
                    <button class="shopBtn" type="submit" name="submit">Gửi email</button>
                </fieldset>
            </form>
        </div>
        <div class="span12">
            @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {!! Session::get('flash_message') !!}
                        </div>
                    @endif
        </div>
    </div>
</div>
</div>
@endsection