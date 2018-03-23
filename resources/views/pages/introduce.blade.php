@extends('master')
@section('content')

<style type="text/css">
	p span {
		display: block;
	}
	h1 {
		display: inline;
		font-family: cursive;
	}
	h2 {
		font-family: Courier;
		font-weight: bolder;
	}
	.content-text {
		font-family: cursive;
		padding-left: 20%
	}
</style>

{{-- <div class="col-12" style="background-color: #f5f5f5;margin: 0px"> --}}
	{{-- @foreach($introduce as $intro)
	    <h1 align="center">{{$intro->title}}</h1> --}}
{{-- 	    <h2><center>Tìm hiểu Laravel Framework</center></h2>
	    <h4><center>Xây dựng website bán hoa</center></h4>
	    <h3><center>*(hoasaigon.tk)</center></h3>

	<hr class="soften">
	<div class="row">
	    <div style="padding-left: 40px"> --}}
	        {{-- <p>{!! $intro->content !!}</p> --}}
{{-- 			<h3>Danh sách thành viên nhóm 7</h3>

			<ul class="list-unstyled">
			  <li class="media">
			    <img class="col-md-3" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/20046278_1883912798526917_8366875584502312045_n.jpg?oh=8fee7d0f5aefa7d0913e6f2ccd2a35f5&oe=5B4CCE21" alt="Generic placeholder image" width="100%">
			    <div class="media-body">
			      <h5 class="col-md-9">Trần Ngọc Gia Hân</h5>
			    	<span>- Lớp: D14TH02</span>
			    	<span>- MSSV: DH51401681</span>
			    </div>
			  </li>
			  <li>&nbsp;</li>
			  <li class="media">
			    <img class="col-md-3" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/20046278_1883912798526917_8366875584502312045_n.jpg?oh=8fee7d0f5aefa7d0913e6f2ccd2a35f5&oe=5B4CCE21" alt="Generic placeholder image" width="100%">
			    <div class="media-body">
			      <h5 class="col-md-9">Trần Ngọc Gia Hân</h5>
			    	<span>- Lớp: D14TH02</span>
			    	<span>- MSSV: DH51401681</span>
			    </div>
			  </li>
			   <li>&nbsp;</li>
			  <li class="media">
			    <img class="col-md-3" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/20046278_1883912798526917_8366875584502312045_n.jpg?oh=8fee7d0f5aefa7d0913e6f2ccd2a35f5&oe=5B4CCE21" alt="Generic placeholder image" width="100%">
			    <div class="media-body">
			      <h5 class="col-md-9">Trần Ngọc Gia Hân</h5>
			    	<span>- Lớp: D14TH02</span>
			    	<span>- MSSV: DH51401681</span>
			    </div>
			  </li>
			</ul>

			<h3>Bảng phân công công việc</h3>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Gia Hân</th>
			      <th scope="col">Huỳnh Đức</th>
			      <th scope="col">Hào</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<thead class="thead-light">
			    <tr>
			      <td>Gia Hân</td>
			      <td>Huỳnh Đức</td>
			      <td>Hào</td>
			    </tr>
			    <tr>
			      <td></td>
			      <td>Thornton</td>
			      <td>@fat</td>
			    </tr>
			    <tr>
			      <td></td>
			      <td>the Bird</td>
			      <td>@twitter</td>
			    </tr>
			    </thead>
			  </tbody>
			</table>
	    </div>
	</div>
		<div class="row" style="float: right">
	    	<br><br>
	        Cảm ơn thầy!<br/>
	        Thân mến<br/>
	    </div> --}}
	{{-- @endforeach --}}
{{-- </div> --}}



	<div style="background-color: #FCD0DA;padding: 5% 5% 7% 5%">
		<h1 style=" color:#6339EF">DANH</h1><h1 style="color:#E40B81"> SÁCH</h1><h1 style="color:#0CBAA8"> THÀNH</h1><h1 style="color:#FF6112"> VIÊN</h1>
		<h2>Bảng phân công công việc</h2>
		<div class="row" style="padding-top: 5%;background-color: #D73E6E">
			<div class="col-md-8">
				<button type="button" class="btn btn-outline-dark" style="border-radius: 40%;border: 3px solid black;color: #E40B81;font-size: 30px;background-color: white">1</button> <h2 style="display: inline;"> &nbsp;Trần Ngọc Gia Hân</h2>
				<p class="content-text">
					<span>- Xây dựng template website</span>
					<span>- Quản lý hiển thị sản phẩm ở trang chủ</span>
					<span>- Xây dựng trang giới thiệu</span>
					<span>- Tìm kiếm sản phẩm theo yêu cầu</span>
					<span>- Quản lý các slide</span>
					<span>- Quản lý sản phẩm</span>
					<span>- Xem sản phẩm liên quan, sản phẩm cùng loại</span>
					<span>- Quản lý tin tức</span>
					<span>- Làm báo cáo</span>
				</p>
			</div>
			<div class="col-md-4">
				<img src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/20046278_1883912798526917_8366875584502312045_n.jpg?oh=8fee7d0f5aefa7d0913e6f2ccd2a35f5&oe=5B4CCE21" width="100%" style="border-radius: 50%">
			</div>
		</div>

		<div class="row" style="padding-top: 5%;background-color: #036F83">
			<div class="col-md-5">
				<img src="https://goo.gl/z5G5Dx" width="80%" style="border-radius: 50%">
			</div>
			<div class="col-md-7">
				<button type="button" class="btn btn-outline-dark" style="border-radius: 40%;border: 3px solid black;color: #B9E24C;font-size: 30px;background-color: white">2</button> <h2 style="display: inline;"> &nbsp;Thái Huỳnh Đức</h2>
				<p class="content-text">
					<span>- Xây dựng database</span>
					<span>- Xây dựng trang giỏ hàng</span>
					<span>- Thực hiện chức năng thanh toán sản phẩm</span>
					<span>- Xây dựng trang liên hệ</span>
					<span>- Gửi mail đặt hàng, xác nhận đơn hàng, hủy đơn hàng</span>
					<span>- Quên mật khẩu, tìm lại mật khẩu, đổi mật khẩu</span>
					<span>- Đổi thông tin cá nhân</span>
					<span>- Quản lý liên hệ khách hàng</span>
					<span>- Qyản lý đơn hàng</span>
					<span>- Quản lý người dùng</span>
					<span>- Quản lý loại sản phẩm</span>
					<span>- Bản đồ shop</span>
				</p>
			</div>
		</div>

		<div class="row" style="padding-top: 5%; background-color: #80397B">
			<div class="col-md-8">
				<button type="button" class="btn btn-outline-dark" style="border-radius: 40%;border: 3px solid black;color: #FF8633;font-size: 30px;background-color: white">3</button> <h2 style="display: inline;"> &nbsp;Nguyễn Duy Hào</h2>
				<p class="content-text">
					<span>- Đăng ký, đăng nhập, đăng xuất</span>
				</p>
			</div>
			<div class="col-md-4">
				<img src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/20046278_1883912798526917_8366875584502312045_n.jpg?oh=8fee7d0f5aefa7d0913e6f2ccd2a35f5&oe=5B4CCE21" width="100%" style="border-radius: 50%">
			</div>
		</div>
		<h5 align="right" style="padding-top: 5%;font-family: cursive;">Cảm ơn thầy!</h5>
	</div>
@endsection