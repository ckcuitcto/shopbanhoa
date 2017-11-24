@extends('master')
@section('content')

<div style="margin: 0">
<div class="well well-small">
    <h1>Địa chỉ liên hệ</h1>
    <hr class="soften"/>
    <div class="row-fluid">
        <div class="span12 relative">
            {!! $contact->map !!}
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