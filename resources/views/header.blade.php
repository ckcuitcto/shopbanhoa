<div id="gototop"></div>
<header id="header">
    <div class="row">
        <div class="span3">
            <h1>
                <a class="logo" href="{{route('index')}}"><span>Twitter Bootstrap ecommerce template</span>
                    <img src="template/assets/img/banner.jpg" alt="bootstrap sexy shop">
                </a>
            </h1>
        </div>
        <div class="span6">
            <div class="offerNoteWrapper">
                <h1 class="dotmark" align="center">
                    <i class="icon-cut"></i>There is nothing more difficult for a truly creative painter than to paint a rose,
                    because before he can do so he has first to forget all the roses that were ever painted. Henri Matisse.</h1>
            </div>
        </div>
        <div class="span3 alignR">
            <p><br> <strong> Hỗ trợ (24/7) : {{$phoneNumber}} </strong><br><br></p>
            <span class="btn btn-mini">[ {{Cart::count()}} ] <span class="icon-shopping-cart"></span></span>
            <span class="btn btn-warning btn-mini">vnd</span>
        </div>
    </div>
</header>
