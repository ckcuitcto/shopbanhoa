<?php
/**
 * Created by PhpStorm.
 * User: Thai Duc
 * Date: 24-Nov-17
 * Time: 11:53 AM
 */
?>

@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Thêm sản phẩm</h2>
        </div>
    </div>
    <hr/>

    <form action="{{route('admin.contact.getContact')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <div class="table-responsive">


                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input style="height: auto" type="text" class="form-control" name="txtAddress" id="txtAddress" placeholder="Địa chỉ công ty"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input style="height: auto" class="form-control hightInput" type="email" name="txtEmail" id="txtEmail"
                                   placeholder="Email"/>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input style="height: auto" class="form-control hightInput" type="text"  name="txtPhoneNumber" id="txtPhoneNumber"
                                   placeholder="Số điện thoại"/>
                        </div>

                        <div class="form-group">
                            <label>Website</label>
                            <input style="height: auto" class="form-control hightInput" type="text" name="txtWebsite" id="txtWebsite"
                                   placeholder="Website"/>
                        </div>

                        <div class="form-group">
                            <label>Bản đồ</label>
                            <input style="height: auto" class="form-control hightInput" type="text" name="txtMap" id="txtMap"
                                   placeholder="Dán link bản đồ từ google map"/>
                        </div>

                    </div>
                    <button type="button" name="edit" id="edit" class="btn btn-default"> Sửa</button>
                    <button type="submit" name="save" id="save" class="btn btn-default">Lưu</button>
                    <button type="cancel"  name="cancel" id="cancel" class="btn btn-default">Hủy</button>
                </div>

                <!--End Advanced Tables -->
            </div>

        </div>
    </form>



    <script>
        $(document).ready(function(){
            $('#save').hide();
            $('#cancel').hide();

            $("#txtAddress").attr("disabled", "disabled");
            $("#txtEmail").attr("disabled", "disabled");
            $("#txtPhoneNumber").attr("disabled", "disabled");
            $("#txtWebsite").attr("disabled", "disabled");
            $("#txtMap").attr("disabled", "disabled");


            $('#edit').click(function(){
                $('#save').show();
                $('#cancel').show();
                $('#edit').hide();

                $('#txtEmail').removeAttr("disabled");
                $('#txtPhoneNumber').removeAttr("disabled");
                $('#txtWebsite').removeAttr("disabled");
                $('#txtMap').removeAttr("disabled");

            });
            $('#txtEmail').disable();
            $('#txtPhoneNumber').hide();
            $('#txtWebsite').hide();
            $('#txtMap').hide();

        });
    </script>
@endsection
