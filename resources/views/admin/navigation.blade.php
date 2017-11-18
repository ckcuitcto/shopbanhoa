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
                        <a href="{{route('admin.product.list')}}">Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="{{route('admin.product.getAdd')}}">Thêm sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Loại sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.productType.list')}}">Danh sách loại sản phẩm</a>
                    </li>
                    <li>
                        <a href="{{route('admin.productType.getAdd')}}">Thêm loại sản phẩm</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>