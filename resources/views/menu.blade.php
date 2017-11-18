<?php

?>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="{{route('index')}}">Trang chủ</a></li>
                    <li class=""><a href="list-view.html">Sản phẩm</a></li>
                    <li class=""><a href="grid-view.html">Liên hệ</a></li>
                    <li class=""><a href="three-col.html">Giới thiệu</a></li>
                    <li class=""><a href="four-col.html">Tin tức</a></li>
                    <li class=""><a href="general.html">Thêm</a></li>
                </ul>
                <form action="#" class="navbar-search pull-left">
                    <input type="text" placeholder="Tìm kiếm..." class="search-query span2">
                </form>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span>
                            Đăng nhập <b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <form class="form-horizontal loginFrm">
                                <div class="control-group">
                                    <input type="text" class="span2" id="inputEmail" placeholder="Email">
                                </div>
                                <div class="control-group">
                                    <input type="password" class="span2" id="inputPassword" placeholder="Password">
                                </div>
                                <div class="control-group">
                                    <label class="checkbox">
                                        <input type="checkbox"> Remember me
                                    </label>
                                    <button type="submit" class="shopBtn btn-block">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
