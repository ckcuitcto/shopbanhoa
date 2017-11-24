<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="https://www.twitter.com"><span class="icon-twitter"></span></a>
                    <a href="https://www.facebook.com"><span class="icon-facebook"></span></a>
                    <a href="https://www.youtube.com"><span class="icon-youtube"></span></a>
                    <a href="https://www.tumblr.com"><span class="icon-tumblr"></span></a>
                </div>
                <a href="#"><span class="icon-user"></span>Tài khoản</a>
                <a href="{{route('register')}}"><span class="icon-edit"></span> Đăng ký</a>
                <a href="{{route('cart')}}"><span class="icon-shopping-cart"></span> {{Cart::count()}} Sản phẩm(s) - <span
                            class="badge badge-warning"> {{Cart::total()}}</span></a>
            </div>
        </div>
    </div>
</div>
