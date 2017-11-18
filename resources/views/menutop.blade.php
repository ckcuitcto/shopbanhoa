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
                <a class="active" href="index.html"> <span class="icon-home"></span> Trang chủ</a>
                <a href="#"><span class="icon-user"></span>Tài khoản</a>
                <a href="{{route('register')}}"><span class="icon-edit"></span> Đăng ký</a>
                <a href="contact.html"><span class="icon-envelope"></span>Liên hệ</a>
                <a href="{{route('cart')}}"><span class="icon-shopping-cart"></span> {{Cart::count()}} Sản phẩm(s) - <span
                            class="badge badge-warning"> {{Cart::total()}}</span></a>
            </div>
        </div>
    </div>
</div>
