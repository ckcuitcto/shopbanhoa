<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">

                    <a href="https://twitter.com/?lang=vi" target="_blank"><span class="icon-twitter"></span></a>
                    <a href="https://www.facebook.com/ngoctrinhfashion89" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="https://www.youtube.com/user/PlaydotaPP" target="_blank"><span class="icon-youtube"></span></a>
                    <a href="https://www.tumblr.com/explore/trending" target="_blank"><span class="icon-tumblr"></span></a>

                </div>

                @guest
                <a href="{{ route('login') }}"><span class="icon-user"></span> Đăng nhập </a>
                <a href="{{route('register')}}"><span class="icon-edit"></span> Đăng ký </a>
                @else
                    @if(Auth::user()->level == 1)
                        <a href="{{route('admin.dashboard')}}">
                            <span class="icon-lock"></span> Trang Quản Lý
                        </a>
                    @endif
                    <a href="{{route('postPersonal')}}">
                        <span class="icon-user"></span> {{ Auth::user()->name }}
                    </a>

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        <span class="icon-off"></span>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    
                    @endguest
                    <a href="{{route('cart')}}"><span class="icon-shopping-cart"></span> {{Cart::count()}} Sản phẩm(s) -
                        <span
                                class="badge badge-warning"> {{Cart::total(0)}}</span></a>
            </div>
        </div>
    </div>
</div>
