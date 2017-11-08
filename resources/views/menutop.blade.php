<?php
/**
 * Created by PhpStorm.
 * User: CKC
 * Date: 04-Nov-17
 * Time: 11:52 PM
 */
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-tumblr"></span></a>
                </div>
                <a class="active" href="index.html"> <span class="icon-home"></span> Home</a>
                <a href="#"><span class="icon-user"></span> My Account</a>
                <a href="{{route('register')}}"><span class="icon-edit"></span> Free Register </a>
                <a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
                <a href="{{route('cart')}}"><span class="icon-shopping-cart"></span> {{Cart::count()}} Item(s) - <span
                            class="badge badge-warning"> {{Cart::total()}}</span></a>
            </div>
        </div>
    </div>
</div>
