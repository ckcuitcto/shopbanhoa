<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> HoaSaiGon.tk </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('')}}">


    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- Customize styles -->
    <link href="{{ url('template/style.css')}}" rel="stylesheet"/>
    <!-- font awesome styles -->
    <link href="{{ url('template/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ url('template/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    <!-- Favicons -->
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="{{ url('template/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ url('template/assets/js/jquery-ui.js')}}"></script>
    <link rel="shortcut icon" href="{{ url('template/assets/ico/Rose-flower-icon.png')}}">
    <script src="{{ url('template/assets/js/cart.js')}}"></script>



</head>
<body>
<!--  Upper Header Section  -->
@include('menutop')

<!--  Lower Header Section  -->
<div class="container">

@include('header')

<!--  Navigation Bar Section  -->
@include('menu')
    <br>
<!--  Body Section   -->
    <div class="row">

        @if(!(Request::is('gio-hang') OR Request::is('san-pham') OR Request::is('xac-nhan-don-hang') OR Request::is('ca-nhan')))
            <div class="col-md-3 col-sm-3">
                @include('leftmenu')
            </div>
        @endif
        <div class="{{ (!(Request::is('gio-hang') OR Request::is('san-pham') OR Request::is('xac-nhan-don-hang') OR Request::is('ca-nhan'))) ? 'col-md-9 col-sm-9' : 'col-md-12 col-sm-12' }}">
            @yield('content')
        </div>

    </div>
<!--  Clients   -->
    

<!--    Footer    -->
    @include('footer')
</div>
<!-- /container -->
@include('copyright')
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


{{--<script src="template/assets/js/jquery.js"></script>--}}
{{--<script src="template/assets/js/bootstrap.min.js"></script>--}}
<script src="template/assets/js/jquery.easing-1.3.min.js"></script>
<script src="template/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="template/assets/js/shop.js"></script>
<script src="template/assets/js/duc.js"></script>

@yield('script')
</body>
</html>