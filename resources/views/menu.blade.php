<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-between">
    <ul class="navbar-nav" style="font-weight: bold;">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('index')}}">Trang chủ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('getProducts')}}">Sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Liên hệ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('introduce')}}">Giới thiệu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('news')}}">Tin tức</a>
        </li>
    </ul>
    <form action="{{route('getProducts')}}" class="navbar-search pull-right" method="get">
        <input type="hidden" name="_token" value="{{csrf_token()}}" ;>
        <input class="form-control" type="text" id="txtName" name="txtName" autocomplete="off"
               placeholder="Tìm kiếm..." class="search-query span2">
        <input type="submit" value="ok" name="submit" style="display: none" />
    </form>

</nav>

@section('script')
    {{--<script type="text/javascript">--}}

        {{--$(".nav a").on("click", function () {--}}
            {{--$(".nav").find(".active").removeClass("active");--}}
            {{--$(this).parent().addClass("active");--}}
        {{--});--}}
    {{--</script>--}}

@endsection

