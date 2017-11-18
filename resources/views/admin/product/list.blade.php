

@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h2>Danh sách sản phẩm</h2>
        <h5>Xem danh sách, xoá , sửa sản phẩm tại đây! </h5>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Hình</th>
                            <th>Giá (VNĐ)</th>
                            <th>Nội dung</th>
                            <th>Tóm tắt</th>
                            <th>Số lần xem</th>
                            <th>Ẩn hiện</th>
                            <th>Thể loại</th>
                            <th>Loại sản phẩm</th>
                            <th>KM (%)</th>
                            <th>Tồn kho</th>
                            <th>Đã bán</th>
                            <th>CN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //while($row=mysql_fetch_array($danhsachsanpham))

                            ?>
                            <tr class="odd gradeX">
                                <td></td>
                                <td></td>
                                <td><img style="height: 100px; width: 100px;" src="">
                                </td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a onclick="return confirm('Bạn có chắc muốn xoá không')"
                                       href="pages/xoasp.p">Xoá</a> <a
                                            href="index.php?p=suasp&idSP?>">Sửa</a></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

    @endsection