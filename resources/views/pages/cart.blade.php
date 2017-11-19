@extends('master')

@section('content')
    <div class="row">
        <div class="span12">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Check Out</li>
            </ul>
            <div class="well well-small">
                <h1>Check Out
                    <small class="pull-right"> {{Cart::count()}} Items are in the cart</small>
                </h1>
                <hr class="soften"/>

                <table class="table table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Avail.</th>
                        <th>Unit price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form action="" method="post">
                        <input name="_token" type="hidden" value="{!! csrf_token() !!} ">

                    @foreach($content as $item)
                    <tr>
                        <td><img width="100" src="template/image/product/{{$item->options->img}}" alt=""></td>
                        <td>{{$item->name}}<br>Carate:24 <br>Model:HBK24</td>
                        <td><span class="shopBtn"><span class="icon-ok"></span></span></td>
                        <td>{{$item->price}} VNĐ</td>
                        <td>
                            <input class="span1 quantity1" idProduct="{{$item->rowId}}" value="{{$item->qty}}" min="1"
                                   max="100" name="{{$item->rowId}}" style="max-width:34px" type="number">
                            <div class="input-append">
                                <button class="btn btn-default btn-number" data-type="minus"
                                        data-field="{{$item->rowId}}" type="button"><i class="icon-minus"></i></button>
                                <button class="btn btn-default btn-number" data-type="plus"
                                        data-field="{{$item->rowId}}" type="button"><i class="icon-plus"></i></button>
                                <button class="btn btn-default btn-danger removeProduct" type="button" idProduct="{{$item->rowId}}">
                                    {{--<a href="{{route('deleteProduct',['id'=>$item->rowId ])}}">--}}
                                        <span class="icon-remove"></span></a>
                                </button>
                            </div>
                        </td>
                        <td>{{$item->qty}}</td>
                    </tr>
                    @endforeach
                    </form>
                    <tr>
                        <td colspan="5" class="alignR">Total products:</td>
                        <td> {{Cart::total()}}</td>
                    </tr>
                    </tbody>
                </table>
                <br/>


                {{--<table class="table table-bordered">--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--<form class="form-inline">--}}
                                {{--<label style="min-width:159px"> VOUCHERS Code: </label>--}}
                                {{--<input type="text" class="input-medium" placeholder="CODE">--}}
                                {{--<button type="submit" class="shopBtn"> ADD</button>--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    {{--</tr>--}}

                    {{--</tbody>--}}
                {{--</table>--}}
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ESTIMATE YOUR SHIPPING & TAXES</td>
                    </tr>
                    <tr>
                        <td>
                            <form class="form-horizontal">
                                <div class="control-group">
                                    <label class="span2 control-label" for="inputEmail">Country</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Country">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="span2 control-label" for="inputPassword">Post Code/ Zipcode</label>
                                    <div class="controls">
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="shopBtn">Click to check the price</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue
                    Shopping
                </a>
                <a href="login.html" class="shopBtn btn-large pull-right">Next <span
                            class="icon-arrow-right"></span></a>
            </div>
        </div>
    </div>
@endsection