<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">

                    <a href="https://twitter.com/?lang=vi"><span class="icon-twitter"></span></a>
                    <a href="https://www.facebook.com/ngoctrinhfashion89"><span class="icon-facebook"></span></a>
                    <a href="https://www.youtube.com/user/PlaydotaPP"><span class="icon-youtube"></span></a>
                    <a href="https://www.tumblr.com/explore/trending"><span class="icon-tumblr"></span></a>

                </div>
                <a href="#"><span class="icon-user"></span>Tài khoản</a>
                <a href="{{route('register')}}"><span class="icon-edit"></span> Đăng ký</a>
                <a href="{{route('cart')}}"><span class="icon-shopping-cart"></span> {{Cart::count()}} Sản phẩm(s) - <span
                            class="badge badge-warning"> {{Cart::total(0)}}</span></a>
            </div>
        </div>
    </div>
</div>
