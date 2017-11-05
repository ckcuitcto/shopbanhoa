<?php
/**
 * Created by PhpStorm.
 * User: CKC
 * Date: 04-Nov-17
 * Time: 11:18 PM
 */
?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('')}}">
    <!-- Bootstrap styles -->
    <link href="template/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="template/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
    <link href="template/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
    <link href="template/assets/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->
    <!--[if lt IE 9]>
    <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="template/assets/ico/favicon.ico">
</head>
<body>
<!--
	Upper Header Section
-->
@include('menuTop')

<!--
Lower Header Section
-->
<div class="container">

@include('header')

<!--
    Navigation Bar Section
    -->
@include('menu')
<!--
    Body Section
    -->
    <div class="row">
        @include('leftmenu')

        @yield('content')

    </div>
    <!--
    Clients
    -->
    <section class="our_client">
        <hr class="soften"/>
        <h4 class="title cntr"><span class="text">Manufactures</span></h4>
        <hr class="soften"/>
        <div class="row">
            <div class="span2">
                <a href="#"><img alt="" src="template/assets/img/1.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="template/assets/img/2.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="template/assets/img/3.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="template/assets/img/4.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="template/assets/img/5.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="template/assets/img/6.png"></a>
            </div>
        </div>
    </section>

    <!--
    Footer
    -->
    @include('footer')
</div><!-- /container -->
@include('copyright')
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<script src="template/assets/js/jquery.js"></script>
<script src="template/assets/js/bootstrap.min.js"></script>
<script src="template/assets/js/jquery.easing-1.3.min.js"></script>
<script src="template/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="template/assets/js/shop.js"></script>
</body>
</html>