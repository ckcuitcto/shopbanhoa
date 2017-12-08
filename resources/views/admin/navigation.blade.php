<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="/admin/assets/img/user.jpg" class="user-image img-responsive"/>
                <div style="color: #FF3333"></div>
            </li>
            <li>
                <a class="active-menu"  href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard fa-3x"></i>Trang quản lí</a>
            </li>
            <li>
                <a  href=""><i class="fa fa-envelope fa-3x"></i>Liên hệ khách hàng <span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.contact.getContact')}}">Quản lí liên hệ</a>
                    </li>
                    <li>
                        <a href="{{route('admin.contact.getContactUs','0')}}">Quản lí liên hệ khách hàng</a>
                    </li>
                </ul>
            </li>
            <li  >
                <a  href="#"><i class="fa fa-shopping-cart fa-3x"></i> Đơn hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.cart.getBill','0')}}">Danh sách đơn hàng</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-user fa-3x"></i>Người dùng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.user.list')}}">Danh sách người dùng</a>
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
            <li>
                <a href=""><i class="fa fa-newspaper-o fa-3x"></i> Tin tức<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.news.list')}}">Danh sách tin tức</a>
                    </li>
                    <li>
                        <a href="{{route('admin.news.getAdd')}}">Thêm tin tức</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.slide.getList')}}">Danh sách các slide</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap fa-3x"></i>Giới thiệu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.introduce.getIntroduce')}}">Giới thiệu về chúng tôi</a>
                    </li>
                    <li>
                        <a href="{{route('admin.introduce.getFooter')}}">Thêm thông tin trang web</a>
                    </li>
                </ul>
            </li>
            {{--<li>--}}
                {{--<a href=""><i class="fa fa-sitemap fa-3x"></i>Quản lý header<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="#">Dòng chữ trên header</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </div>
</nav>
