<footer class="footer">
    <div class="row">

        <div class="col-md-3">
            <ul style="list-style-type: none"><h5>Tài khoản</h5>

            @foreach($account as $acc)
            <li>{{$acc}}</li>
            @endforeach</ul>
        </div>

        <div class="col-md-2">
            <ul style="list-style-type: none"><h5>Thông Tin</h5>

            @foreach($info as $acc)
            <li>{{$acc}}</li>
            @endforeach</ul>
        </div>

        <div class="col-md-2">
            <ul style="list-style-type: none"><h5>Nguồn</h5>

            @foreach($source as $acc)
            <li>{{$acc}}</li>
            @endforeach</ul>
        </div>

        <div class="col-md-5">

            <h5>Một vài thông tin về trang web</h5>
            <p>{!!$description!!}</p>
        </div>
    </div>
</footer>
