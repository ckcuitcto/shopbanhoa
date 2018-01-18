<div id="gototop"></div>
<header id="header">
    <div class="row">
        <div class="col-md-3">
            <h3>
                <a class="logo" href="{{route('index')}}">
                    <img src="template/assets/img/banner.jpg" alt="bootstrap sexy shop" style="width: 100%">
                </a>
            </h3>
        </div>
        <div class="col-md-6">
            <div class="offerNoteWrapper">
                <h1 class="dotmark" align="center">
                    <i class="icon-cut"></i>
                   {{$titleHeader}}
                </h1>
            </div>
        </div>

        <div class="col-md-3 alignR">
            <p><br> <strong> Hỗ trợ (24/7) : {{$phoneNumber}} </strong><br><br></p>
            <button type="button" class="btn btn-sm" style="background-color: #f5f5f5">[ {{Cart::count()}} ] <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
            <!-- <span class="btn btn-mini">[ {{Cart::count()}} ] <i class="fa fa-shopping-cart" aria-hidden="true"></i></span> -->

            @unless(Cart::count() <= 0)
            <span class="btn btn-warning btn-mini">vnd</span>
            @endunless

        </div>
    </div>
</header>