<?php
/**
 * Created by PhpStorm.
 * User: CKC
 * Date: 05-Nov-17
 * Time: 12:39 AM
 */
?>
@extends('master')
@section('content');
<div class="span9">
    <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
        <li class="active">Registration</li>
    </ul>
    <h3> Registration</h3>
    <hr class="soft"/>
    <div class="well">
        <form action="{{route('register')}}" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
            </div>
            <h3>Thông tin cá nhân</h3>
         <!--    <div class="control-group">
                <label class="control-label">Title <sup>*</sup></label>
                <div class="controls">
                    <select class="span1" name="days">
                        <option value="">-</option>
                        <option value="1">Mr.</option>
                        <option value="2">Mrs</option>
                        <option value="3">Miss</option>
                    </select>
                </div>
            </div> -->
            <div class="control-group">
                <label class="control-label" for="Fname">Full name <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Fname" placeholder="Full Name" required>
                </div>
            </div>
        
            <div class="control-group">
                <label class="control-label" for="Email">Email <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Email" placeholder="Email" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="Password">Password <sup>*</sup></label>
                <div class="controls">
                    <input type="password" name="Password" placeholder="Password" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="re_Password">RePassword <sup>*</sup></label>
                <div class="controls">
                    <input type="password" name="re_Password" placeholder="RePassword" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="Phone">Phone <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Phone" placeholder="Phone" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="Address">Address <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="Address" placeholder="Address" required>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value="Đăng lý" class="exclusive shopBtn">
                </div>
            </div>
        </form>
    </div>

   <!--  <div class="well">
        <form class="form-horizontal" >
            <h3>Your Billing Details</h3>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <textarea></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value="Register" class="shopBtn exclusive">
                </div>
            </div>
        </form>
    </div>


    <div class="well">
        <form class="form-horizontal" >
            <h3>Your Account Details</h3>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div><div class="control-group">
                <label class="control-label">Fiels label <sup>*</sup></label>
                <div class="controls">
                    <input type="text" placeholder=" Field name">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value="Register" class="exclusive shopBtn">
                </div>
            </div>
        </form>
    </div> -->


</div>
@endsection