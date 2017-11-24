<?php
/**
 * Created by PhpStorm.
 * User: Thai Duc
 * Date: 24-Nov-17
 * Time: 5:33 PM
 */
?>
@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Danh sách thư liên hệ</h2>
            <h5>Xem danh sách thư liên hệ</h5>

        </div>
    </div>
    <!-- /. ROW  -->
    <hr/>
    <div class="row">
        <div class="col-md-4 donhang" xacnhan="2">
            <h3><a href="{{route('admin.contact.getContactUs','2')}}">Tất cả thư liên hệ</a></h3>
        </div>
        <div class="col-md-4 donhang" xacnhan="1">
            <h3><a href="{{route('admin.contact.getContactUs','1')}}"> Thư liên hệ đã xác nhận</a></h3>
        </div>
        <div class="col-md-4 donhang" xacnhan="0">
            <h3><a href="{{route('admin.contact.getContactUs','0')}}"> Thư liên hệ chưa nhận </a></h3>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách liên hệ
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Tên người gửi</td>
                                <td>Số điện thoại-Email</td>
                                <td>Chủ đề</td>
                                <td>Nội dung</td>
                                <td>Xác nhận</td>
                                <td>Ngày gửi</td>
                                <td>Ngày xác nhận</td>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($contacts as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td><p>{{$value->phone_number}}</p>
                                        <p>{{$value->email}}</p></td>
                                    <td> {{$value->title}}</td>
                                    <td> {{$value->description}}</td>
                                    <td> {{$value->confirm}}</td>
                                    <td> {{$value->created_at}}</td>
                                    <td> {{$value->updated_at}}</td>
                                    <td>
                                        <select class="form-control xacnhanthulienhe" id="thulienhe" name="thulienhe" idLienHe="">
                                            <option value="1"> Đã nhận </option>
                                            <option value="0"> Chưa nhận </option>
                                        </select>
                                    </td>
                                    <td><a onclick="return confirm('Bạn có chắc muốn xoá không')"
                                           href="pages/xoatl.php?idTL={idTL}">Xoá</a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        <!-- /. het thuc do DL  -->
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
