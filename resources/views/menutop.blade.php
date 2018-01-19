<nav class="topNav navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: #f5f5f5;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse container" id="navbarSupportedContent" style="margin-top: -5px;margin-bottom: -5px">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="https://twitter.com/?lang=vi"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://www.youtube.com/"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://www.tumblr.com/"><i class="fa fa-tumblr-square fa-3x" aria-hidden="true"></i></a>
      </li>

    </ul>
    <ul class="navbar-nav">
    @auth
        @if(Auth::user()->level >= 1)
        <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.dashboard')}}" style="font-size: 15px"><i class="fa fa-lock" aria-hidden="true"></i> Trang Quản Lý</a>
        @endif
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('postPersonal')}}" style="font-size: 15px"><i class="fa fa-user" aria-hidden="true"></i>   {{ Auth::user()->name }}       </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 15px"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
        </form>

        @else
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login') }}" style="font-size: 15px"><i class="fa fa-user" aria-hidden="true"></i>  Đăng nhập </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('register')}}" style="font-size: 15px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Đăng ký </a>
      </li>
      @endauth
      <li class="nav-item ">
        <a class="nav-link" href="{{route('cart')}}" style="font-size: 15px"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  {{Cart::count()}}  Sản phẩm(s) - {{Cart::subtotal(0)}} đ</a>
      </li>
    </ul>
  </div>
</nav>



{{--3 --}}