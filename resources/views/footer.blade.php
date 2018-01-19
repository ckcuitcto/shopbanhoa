<footer class="footer">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <h5>Tài khoản của bạn</h5>
            @foreach($account as $acc)
            <a href="#">{{$acc}}</a><br>
            @endforeach
        </div>
        <div class="col-md-2 col-sm-2">
            <h5>Thông Tin</h5>
            @foreach($info as $acc)
            <a href="#">{{$acc}}</a><br>
            @endforeach
        </div>
        <div class="col-md-2 col-sm-2">
            <h5>Nguồn</h5>
            @foreach($source as $acc)
            <a href="#">{{$acc}}</a><br>
            @endforeach
        </div>
        <div class="col-md-6 col-sm-6">
            <h5>Một vài thông tin về trang web</h5>
            <p>{!!$description!!}</p>
        </div>
    </div>
</footer>
