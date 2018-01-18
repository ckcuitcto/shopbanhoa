<nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: #f5f5f5;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse container" id="navbarSupportedContent" style="margin-top: -10px;margin-bottom: -15px">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="https://twitter.com/?lang=vi"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://www.youtube.com/"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://www.tumblr.com/"><i class="fa fa-tumblr-square fa-2x" aria-hidden="true"></i></a>
      </li>

    </ul>
    <ul class="navbar-nav">
    @auth
        @if(Auth::user()->level >= 1)
        <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fa fa-lock" aria-hidden="true"></i> Trang Quản Lý</a>
        @endif
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('postPersonal')}}"><i class="fa fa-user" aria-hidden="true"></i>   {{ Auth::user()->name }}       </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
        </form>

        @else
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>  Đăng nhập </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('register')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Đăng ký </a>
      </li>
      @endauth
      <li class="nav-item ">
        <a class="nav-link" href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  {{Cart::count()}}  Sản phẩm(s) - {{Cart::subtotal(0)}} đ</a>
      </li>
    </ul>
  </div>
</nav>



<!-- <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">

                    <a href="https://twitter.com/?lang=vi" target="_blank"><span class="icon-twitter"></span></a>
                    <a href="https://www.facebook.com/ngoctrinhfashion89" target="_blank"><span
                                class="icon-facebook"></span></a>
                    <a href="https://www.youtube.com/user/PlaydotaPP" target="_blank"><span class="icon-youtube"></span></a>
                    <a href="https://www.tumblr.com/explore/trending" target="_blank"><span class="icon-tumblr"></span></a>

                </div>

                @auth
                @if(Auth::user()->level >= 1)
                    <a href="{{route('admin.dashboard')}}">
                        <span class="icon-lock"></span> Trang Quản Lý
                    </a>
                @endif
                <a href="{{route('postPersonal')}}">
                    <span class="icon-user"></span> {{ Auth::user()->name }}
                </a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="icon-off"></span> Đăng xuất
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @else
                   <!--  <a href="{{ route('login') }}"><span class="icon-user"></span> Đăng nhập </a>
                    <a href="{{route('register')}}"><span class="icon-edit"></span> Đăng ký </a> -->
                <!-- @endauth -->

                  <!--   <a href="{{route('cart')}}"><span class="icon-shopping-cart"></span> {{Cart::count()}} Sản phẩm(s) -
                        <span class="badge badge-warning"> {{Cart::subtotal(0)}} đ</span></a> -->
<!--             </div>
        </div>
    </div>
</div> -->