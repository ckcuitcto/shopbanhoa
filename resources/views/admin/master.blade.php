<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Vàng Bạc Thái Đức ADMIN</title>
    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen"/>
    <link href="{{ url('admin/assets/css/base.css')}}" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="{{ url('admin/assets/css/font-awesome2.css')}}" rel="stylesheet" type="text/css">

    <!-- BOOTSTRAP STYLES-->
    <link href="{{ url('admin/assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="{{ url('admin/assets/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- MORRIS CHART STYLES-->
    <link href="{{ url('admin/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="{{ url('admin/assets/css/custom.css')}}" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <!-- TABLE STYLES-->
    <link href="{{ url('admin/assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="{{ url('admin/assets/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ url('admin/assets/js/jquery.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ url('admin/assets/js/duc.js')}}"></script>
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$("#idTL").change(function () {--}}
                {{--var id = $(this).val();--}}

                {{--$.get("blocks/loaisp.php", {idTL: id}, function (data) {--}}
                    {{--$("#loaisanpham").html(data);--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$(".sanphamdathang").click(function () {--}}
                {{--//var slm=$(this).val();--}}
                {{--var id = $(this).attr("idDatHang");--}}
                {{--alert(id);--}}
                {{--$.GET("pages/chitietdonhang.php", {idDH: id}, function (data) {--}}
                    {{--$("#ketquaz").html(data);--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$(".leveluser").change(function () {--}}
                {{--var capdo = $(this).val();--}}
                {{--var idU = $(this).attr("idUsers");--}}
                {{--$.get("pages/user/suaUser.php", {cap: capdo, idUser: idU}, function () {--}}
                    {{--location.reload();--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$(".xacnhanthulienhe").change(function () {--}}
                {{--var xn = $(this).val();--}}
                {{--var idlh = $(this).attr("idLienHe");--}}
                {{--$.get("pages/lienhe/suaLH.php", {xacnhan: xn, idLH: idlh}, function () {--}}
                    {{--location.reload();--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
</head>
<body>
<div id="wrapper">
    @include ("admin.navbar")
<!-- /. NAV TOP  -->
    @include ("admin.navigation")
<!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {!! Session::get('flash_message') !!}
                        </div>
                        @endif
                </div>
            </div>
            @yield('content');
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

<!-- JQUERY SCRIPTS -->
<script src="{{ url('admin/assets/js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ url('admin/assets/js/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{ url('admin/assets/js/jquery.metisMenu.js')}}"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="{{ url('admin/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{ url('admin/assets/js/morris/morris.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<!-- CUSTOM SCRIPTS -->
<script src="{{ url('admin/assets/js/custom.js')}}"></script>

<script src="{{ url('admin/assets/js/jquery-1.10.2.js')}}"></script>

<!-- DATA TABLE SCRIPTS -->
<script src="{{ url('admin/assets/js/dataTables/jquery.dataTables.js')}}"></script>

<script src="{{ url('admin/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>

<!-- MORRIS CHART SCRIPTS -->
<script src="{{ url('admin/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{ url('admin/assets/js/morris/morris.js')}}"></script>
<script src="{{ url('admin/assets/js/myscrip.js')}}"></script>


</body>
</html>

