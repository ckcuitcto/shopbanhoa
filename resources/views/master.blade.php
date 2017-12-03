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
    <link href="{{ url('template/assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{ url('template/assets/css/jquery-ui.min.css')}}" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{ url('template/style.css')}}" rel="stylesheet"/>
    <!-- font awesome styles -->
    <link href="{{ url('template/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!--[if IE 7]>
    <link href="{{ url('template/assets/font-awesome/css/font-awesome-ie7.min.css')}}" rel="stylesheet">
    <![endif]-->
    <!--[if lt IE 9]>
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
@include('menuTop')

<!--  Lower Header Section  -->
<div class="container">

@include('header')

<!--  Navigation Bar Section  -->
@include('menu')
<!--  Body Section   -->
    <div class="row">

        @if(!(Request::is('gio-hang') OR Request::is('san-pham') OR Request::is('xac-nhan-don-hang') OR Request::is('ca-nhan')))
            <div class="span3">
                @include('leftmenu')
            </div>
        @endif
        <div class="{{ (!(Request::is('gio-hang') OR Request::is('san-pham') OR Request::is('xac-nhan-don-hang') OR Request::is('ca-nhan'))) ? "span9" : "span12" }}">
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
<script src="template/assets/js/jquery.js"></script>
<script src="template/assets/js/bootstrap.min.js"></script>
<script src="template/assets/js/jquery.easing-1.3.min.js"></script>
<script src="template/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="template/assets/js/shop.js"></script>
<script src="template/assets/js/duc.js"></script>

@yield('script')
</body>
</html>