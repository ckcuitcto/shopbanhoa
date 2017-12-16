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
                <form action="{{route('getProducts')}}" class="navbar-search pull-right" method="get">
                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}" ;>--}}
                    <input type="text" id="txtName" name="txtName" autocomplete="off"
                           placeholder="Tìm kiếm..." class="search-query span2">
                    <input type="submit" value="ok" name="submit" style="display: none" />
                </form>

            </div>
        </div>
    </div>
</div>

@section('script')
    {{--<script type="text/javascript">--}}

        {{--$(".nav a").on("click", function () {--}}
            {{--$(".nav").find(".active").removeClass("active");--}}
            {{--$(this).parent().addClass("active");--}}
        {{--});--}}
    {{--</script>--}}

@endsection

