@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Chi tiết liên hệ</h2>
        </div>
    </div>
    <hr/>

    <form action="{{route('admin.contact.getDetailContact',$contact->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-11 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <form action="{{route('admin.contact.getDetailContact',$contact->id)}}" method="POST"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <td> Tên người gửi</td>
                                    <td> Số điện thoại - Email</td>
                                    <td> Chủ đề</td>
                                    <td> Nội dung</td>
                                    <td> Phản Hồi</td>
                                    <td> Ngày gửi</td>
                                    <td> Ngày xác nhận</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$contact->name}} </td>
                                    <td>{{$contact->phone_number}} - {{$contact->email}}</td>
                                    <td> {{$contact->title}}</td>
                                    <td> {{$contact->description}}</td>
                                    <td>
                                        <span class='glyphicon {{ ($contact->confirm == 1) ? 'glyphicon-ok-sign' : 'glyphicon-remove-sign' }}'></span>
                                    </td>
                                    <td> {{$contact->created_at}}</td>
                                    <td> {{ ($contact->confirm == 1) ? $contact->updated_at : "(>-<)"}}</td>
                                </tr>
                                </tbody>

                            </table>

                            <div class="form-group">
                                <label>Trả lời tin liên hệ khách hàng :</label>
                                <textarea class="form-control" rows="3" name="txtBody"></textarea>
                                <script>
                                    CKEDITOR.replace('txtBody');
                                </script>
                            </div>
                            <div class="form-group">
                                <label>File đính kèm</label>
                                <input type="file" name="mutilFile[]" multiple>
                            </div>
                        </div>
                        <button type="submit" name="themSP" class="btn btn-success"> Gửi </button>
                        <button type="reset" class="btn btn-danger"> Làm mới </button>
                    </form>
                </div>
                <!--End Advanced Tables -->
            </div>

        </div>
    </form>

@endsection
