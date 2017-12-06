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
                    <li class=""><a href="{{route('getProducts')}}">Sản phẩm</a></li>
                    <li class=""><a href="{{route('contact')}}">Liên hệ</a></li>
                    <li class=""><a href="{{route('introduce')}}">Giới thiệu</a></li>
                    <li class=""><a href="{{route('news')}}">Tin tức</a></li>

                </ul>
                <form action="{{route('search')}}" class="navbar-search pull-right" method="get">
                    <input type="hidden" name="_token" value="{{csrf_token()}}";>
                    <input type="text" id="productSearch" name="productSearch" autocomplete="off"  placeholder="Tìm kiếm..." class="search-query span2">
                </form>
                
            </div>
        </div>
    </div>
</div>