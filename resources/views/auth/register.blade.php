@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="span9" style="background-color: #f5f5f5">
            <div class="panel panel-default"><br>
                <div class="panel-heading" style="font-size: 20px;text-align: center;">Đăng ký</div><br>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Tên</label>

                            <div class="controls">
                                <input id="name" type="text" class="form-control span5" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail</label>

                            <div class="controls">
                                <input id="email" type="email" class="form-control span5" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="controls">
                                <input id="password" type="password" class="form-control span5" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="password-confirm" class="control-label">Nhập lại Password</label>

                            <div class="controls">
                                <input id="password-confirm" type="password" class="form-control span5" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
