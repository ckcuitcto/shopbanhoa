@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h2>Chi tiết giỏ hàng</h2>
        </div>
    </div>
    <hr/>

    <form action="{{route('admin.cart.getBillDetail',$cart->id)}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="row">
            <div class="col-md-11 col-sm-12 col-xs-12">
            @include('admin.blocks.error')
            <!-- Advanced Tables -->
                <div class="panel-body">
                    <form action="{{route('admin.cart.getBillDetail',$cart->id)}}" method="POST"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center">STT</th>
                                    <th style="text-align: center">ID Đơn Hàng</th>
                                    <th style="text-align: center">Tên người nhận</th>
                                    <th style="text-align: center">Nơi nhận</th>
                                    <th style="text-align: center" >Số điện thoại</th>
                                     <th style="text-align: center" >Ghi chú</th>
                                    <th style="text-align: center">Số tiền (VNĐ)</th>
                                    <th style="text-align: center">Tình trạng</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>{{$cart->recipient}} </td>
                                    <td>{{$cart->address}} </td>
                                    <td>{{$cart->phone_number}} </td>
                                    <td>{{$cart->note}} </td>
                                    <td>{{$cart->total}} </td>
                                    
                                    <td>
                                        <span class='glyphicon {{ ($cart->confirm == 1) ? 'glyphicon-ok-sign' : 'glyphicon-remove-sign' }}'></span>
                                    </td>
                                    <!-- <td> {{$contact->created_at}}</td>
                                    <td> {{ ($contact->confirm == 1) ? $contact->updated_at : "(>-<)"}}</td> -->
                                </tr>
                                </tbody>

                            </table>

                            <!-- <div class="form-group">
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
                        <button type="reset" class="btn btn-danger"> Làm mới </button> -->
                    </form>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </form>

@endsection
