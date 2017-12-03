@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Chỉnh sửa liên hệ</h2>
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
                            <input style="height: auto" disabled type="text" class="form-control"
                                   value="{{$contact->address}}" name="txtAddress" id="txtAddress"
                                   placeholder="Địa chỉ công ty"/>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input style="height: auto" disabled class="form-control hightInput"
                                   value="{{$contact->email}}" type="email" name="txtEmail" id="txtEmail"
                                   placeholder="Email"/>
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input style="height: auto" disabled class="form-control hightInput" type="text"
                                   value="{{$contact->phone_number}}" name="txtPhoneNumber" id="txtPhoneNumber"
                                   placeholder="Số điện thoại"/>
                        </div>

                        <div class="form-group">
                            <label>Website</label>
                            <input style="height: auto" disabled class="form-control hightInput"
                                   value="{{$contact->website}}" type="text" name="txtWebsite" id="txtWebsite"
                                   placeholder="Website"/>
                        </div>

                        <div class="form-group">
                            <label>Bản đồ</label>
                            <input style="height: auto" disabled value="{{$contact->map}}"
                                   class="form-control hightInput" type="text" name="txtMap" id="txtMap"
                                   placeholder="Dán link bản đồ từ google map"/>
                        </div>

                        <div class="form-group">
                            <div class="span12 relative">
                                {!! $contact->map !!}
                            </div>
                        </div>

                    </div>
                    <button type="button" name="edit" id="edit" class="btn btn-primary"> Sửa</button>
                    <button type="submit" style="display: none" name="save" id="save" class="btn btn-success">Lưu
                    </button>
                    <button type="cancel" style="display: none" name="cancel" id="cancel" class="btn btn-danger">Hủy
                    </button>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function () {

            $('#edit').click(function () {
                $('#save').show();
                $('#cancel').show();
                $('#edit').hide();

                $('#txtAddress').removeAttr("disabled");
                $('#txtEmail').removeAttr("disabled");
                $('#txtPhoneNumber').removeAttr("disabled");
                $('#txtWebsite').removeAttr("disabled");
                $('#txtMap').removeAttr("disabled");
            });
        });
    </script>
@endsection
