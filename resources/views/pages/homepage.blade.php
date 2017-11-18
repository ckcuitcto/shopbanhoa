<?php
/**
 * Created by PhpStorm.
 * User: CKC
 * Date: 04-Nov-17
 * Time: 11:39 PM
 */
?>
@extends('master')
@section('content')
    <div class="span9">
        <div class="well np">
            <div id="myCarousel" class="carousel slide homCar">
                <div class="carousel-inner">
                    @foreach($slide as $value)
                        <div class="item">
                            <img style="width:100%" src="template/image/slide/{{$value->image}}"
                                 alt="bootstrap ecommerce templates">
                            <div class="carousel-caption">
                                <h4>Bootstrap shopping cart</h4>
                                <p><span>Very clean simple to use</span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <!--
        New Products
        -->
        <div class="well well-small">
            <h3>New Products </h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <div id="newProductCar" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html"><img src="template/assets/img/bootstrap-ring.png"
                                                                            alt="bootstrap-ring"></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html"><img src="template/assets/img/i.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html"><img src="template/assets/img/g.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                                    class="icon-search"></span> QUICK VIEW</a>
                                        <a href="product_details.html"><img src="template/assets/img/s.png" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            {{--<div class="row-fluid">--}}
            {{--<ul class="thumbnails">--}}
            {{--<li class="span4">--}}
            {{--<div class="thumbnail">--}}

            {{--<a class="zoomTool" href="product_details.html" title="add to cart"><span--}}
            {{--class="icon-search"></span> QUICK VIEW</a>--}}
            {{--<a href="product_details.html"><img src="template/assets/img/b.jpg" alt=""></a>--}}
            {{--<div class="caption cntr">--}}
            {{--<p>Manicure & Pedicure</p>--}}
            {{--<p><strong> $22.00</strong></p>--}}
            {{--<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>--}}
            {{--<div class="actionList">--}}
            {{--<a class="pull-left" href="#">Add to Wish List </a>--}}
            {{--<a class="pull-left" href="#"> Add to Compare </a>--}}
            {{--</div>--}}
            {{--<br class="clr">--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li class="span4">--}}
            {{--<div class="thumbnail">--}}
            {{--<a class="zoomTool" href="product_details.html" title="add to cart"><span--}}
            {{--class="icon-search"></span> QUICK VIEW</a>--}}
            {{--<a href="product_details.html"><img src="template/assets/img/c.jpg" alt=""></a>--}}
            {{--<div class="caption cntr">--}}
            {{--<p>Manicure & Pedicure</p>--}}
            {{--<p><strong> $22.00</strong></p>--}}
            {{--<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>--}}
            {{--<div class="actionList">--}}
            {{--<a class="pull-left" href="#">Add to Wish List </a>--}}
            {{--<a class="pull-left" href="#"> Add to Compare </a>--}}
            {{--</div>--}}
            {{--<br class="clr">--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li class="span4">--}}
            {{--<div class="thumbnail">--}}
            {{--<a class="zoomTool" href="product_details.html" title="add to cart"><span--}}
            {{--class="icon-search"></span> QUICK VIEW</a>--}}
            {{--<a href="product_details.html"><img src="template/assets/img/a.jpg" alt=""></a>--}}
            {{--<div class="caption cntr">--}}
            {{--<p>Manicure & Pedicure</p>--}}
            {{--<p><strong> $22.00</strong></p>--}}
            {{--<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>--}}
            {{--<div class="actionList">--}}
            {{--<a class="pull-left" href="#">Add to Wish List </a>--}}
            {{--<a class="pull-left" href="#"> Add to Compare </a>--}}
            {{--</div>--}}
            {{--<br class="clr">--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
        </div>
        <!--
        Featured Products
        -->
        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span
                            class="icon-plus"></span></a> Featured Products </h3>
            <hr class="soften"/>
            <div class="row-fluid">
                <ul class="thumbnails">
                    @foreach($featuredProducts as $product)
                        <li class="span4">
                            <div class="thumbnail">
                                {{--<a class="zoomTool" href="{{route('productDetail',$product->id)}}" title="add to cart"><span--}}
                                {{--class="icon-search"></span> QUICK VIEW</a>--}}
                                <a href="{{route('productDetail',$product->id)}}"><img
                                            src="template/image/product/{{$product->image}}" alt=""></a>
                                <div class="caption">
                                    <h5> {{$product->name}}</h5>
                                    <h4>
                                        <a class="defaultBtn" href="{{route('productDetail',$product->id)}}"
                                           title="Click to view"><span
                                                    class="icon-zoom-in"></span></a>
                                        <a class="shopBtn" idProduct="{{$product->id}}"
                                           href="{{route('purchase',['id'=> $product->id,'qty'=>1])}}"
                                           title="add to cart"><span class="icon-plus"></span></a>
                                        <span class="pull-right">{{$product->unit_price}}</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Popular Products
        </div>
        <hr>
        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Best selling Products
        </div>
    </div>
@endsection