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
                    <li class=""><a href="{{route('products')}}">Sản phẩm</a></li>
                    <li class=""><a href="{{route('contact')}}">Liên hệ</a></li>
                    <li class=""><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
                    <li class=""><a href="{{route('news')}}">Tin tức</a></li>

                </ul>
                <form action="{{route('search')}}" class="navbar-search pull-left" method="get">
                    <input type="hidden" name="_token" value="{{csrf_token()}}";>
                    <input type="text" id="productSearch" name="productSearch" autocomplete="off"  placeholder="Tìm kiếm..." class="search-query span2">
                </form>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span>
                            Đăng nhập <b class="caret"></b></a>
                        <div class="dropdown-menu">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif

                            @if(session('thongbao'))
                            <div class="alert alert-danger">
                                {{session('thongbao')}}
                            </div>
                            @endif

                            <form class="form-horizontal loginFrm" action="login" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="control-group">
                                    <input type="text" class="span2" name="email" placeholder="Email">
                                </div>
                                <div class="control-group">
                                    <input type="password" class="span2" name="password" placeholder="Password">
                                </div>
                                <div class="control-group">
                                    <label class="checkbox">
                                        <input type="checkbox"> Remember me
                                    </label>
                                    <button type="submit" class="shopBtn btn-block">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>