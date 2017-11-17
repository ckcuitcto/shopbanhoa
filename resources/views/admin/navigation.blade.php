<?php
/**
 * Created by PhpStorm.
 * User: CKC
 * Date: 13-Nov-17
 * Time: 10:22 PM
 */
?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                <div style="color: red"></div>
            </li>

            <li>
                <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i>Trang quản lí</a>
            </li>
            <li  >
                <a  href="index.php?p=lienhe"><i class="fa fa-table fa-3x"></i>Liên hệ <span class="glyphicon glyphicon-envelope"></span></a>
            </li>
            <li  >
                <a  href="index.php?p=dathang"><i class="fa fa-table fa-3x"></i> Đơn hàng</a>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Người dùng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="index.php?p=listUser">Danh sách người dùng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="index.php?p=listSP">Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?p=themsp">Thêm sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Thể loại<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="index.php?p=listtl">Danh sách thể loại</a>
                    </li>
                    <li>
                        <a href="index.php?p=themtl">Thêm thể loại</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Loại sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="index.php?p=listlsp">Danh sách loại sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?p=themlsp">Thêm loại sản phẩm</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>