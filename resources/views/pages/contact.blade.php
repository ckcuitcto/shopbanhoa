@extends('master')
@section('content')

<div style="margin: 0">
<div class="well well-small">
    <h1>Địa chỉ liên hệ</h1>
    <hr class="soften"/>
    <div class="row-fluid">
        <div class="col-md-12 col-sm-12">
            {!! $contact->map !!}
        </div>
        <div class="col-md-12 col-sm-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <div class="card">
              <div class="card-body">
                <h4 align="center" style="padding-bottom: 20px">Email cho chúng tôi</h4>


                <form action="{{route('contact')}}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <div class="form-group row">
                    <label for="name" class="col-3">Tên</label>
                    <input type="text" class="form-control col-5" name="name"  placeholder="Tên">
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-3">Email</label>
                    <input type="email" class="form-control col-5" name="email" placeholder="Email">
                  </div>
                  <div class="form-group row">
                    <label for="phone" class="col-3">Phone</label>
                    <input type="text" class="form-control col-5" name="phone" placeholder="Phone">
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-3">Tiêu đề</label>
                    <input type="text" class="form-control col-5" name="title" placeholder="Tiêu đề">
                  </div>
                  <div class="form-group row">
                    <label for="description" class="col-3">Nội dung</label>
                    <textarea class="form-control col-8" name="description" rows="3" ></textarea>
                    {{-- <input type="text" class="form-control col-5" name="description" placeholder="Nội dung"> --}}
                  </div>
                  
                  <div align="center"><button type="submit" class="shopBtn btn btn-primary" name="submit">Gửi email</button></div>
                </form>


                {{-- <form action="{{route('contact')}}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div class="control-group">
                        <label for="name" class="span2">Tên</label>
                        <div class="controls">
                            <input type="text" class="span5" name="name" placeholder="Tên" class="input-xlarge"/>
                        </div>
                    </div> --}}
                 {{--  <div class="control-group">
                    <label for="email" class="span2">Email</label>
                    <div class="controls">
                      <input type="email" class="span5" name="email" placeholder="Email" class="input-xlarge"/>
                    </div>
                  </div> --}}
                  {{-- <div class="control-group">
                    <label for="phone" class="span2">Phone</label>
                    <div class="controls">
                      <input type="text" class="span5" name="phone" placeholder="Phone" class="input-xlarge control-input"/>
                    </div>
                  </div> --}}
                  {{-- <div class="control-group">
                    <label for="title" class="span2">Tiêu đề</label>
                    <div class="controls">
                      <input type="text" class="span5" name="title" placeholder="Tiêu đề" class="input-xlarge control-input"/>
                    </div>
                  </div> --}}
                  
               {{--  <div class="control-group">
                    <label for="description" class="span2">Nội dung</label>
                    <div class="controls">
                      <textarea rows="3" class="span5" name="description" placeholder="Nội dung" id="textarea" class="input-xlarge"></textarea>
                    </div>
                </div> --}}
                    {{-- <button class="shopBtn" type="submit" name="submit">Gửi email</button> --}}
             {{--    </fieldset>
            </form> --}}
              </div>
            </div>

            {{-- <h4>Email cho chúng tôi</h4>
            <form action="{{route('contact')}}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div class="control-group">
                        <label for="name" class="col-md-2 col-sm-2">Tên</label>
                        <div class="controls">
                            <input type="text" class="col-md-5 col-sm-5" name="name" placeholder="Tên" />
                        </div>
                    </div>
                  <div class="control-group">
                    <label for="email" class="col-md-2 col-sm-2">Email</label>
                    <div class="controls">
                      <input type="email" class="col-md-5 col-sm-5" name="email" placeholder="Email" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="phone" class="col-md-2 col-sm-2">Phone</label>
                    <div class="controls">
                      <input type="text" class="col-md-5 col-sm-5" name="phone" placeholder="Phone" class="control-input"/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label for="title" class="col-md-2 col-sm-2">Tiêu đề</label>
                    <div class="controls">
                      <input type="text" class="col-md-5 col-sm-5" name="title" placeholder="Tiêu đề" class="control-input"/>
                    </div>
                  </div>
                  
                <div class="control-group">
                    <label for="description" class="col-md-2 col-sm-2">Nội dung</label>
                    <div class="controls">
                      <textarea rows="3" class="col-md-5 col-sm-5" name="description" placeholder="Nội dung" id="textarea"></textarea>
                    </div>
                </div>
                    <button class="shopBtn" type="submit" name="submit">Gửi email</button>
                </fieldset>
            </form> --}}


        </div>
        <div class="col-md-12 col-sm-12">
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