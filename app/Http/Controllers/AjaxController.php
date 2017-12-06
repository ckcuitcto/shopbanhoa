<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public static function getProductListOfBill($id)
    {

        $list = DB::table('products')
            ->leftJoin('bill_detail', 'products.id', '=', 'bill_detail.id_product')
            ->leftJoin('bills', 'bill_detail.id_bill', '=', 'bills.id')
            ->select('products.*', 'bill_detail.quantity as qty')
            ->where('bills.id', $id)
            ->get();

        $totalAll = 0;
        $data = "  <h4 style='text-align: center;'>Các sản phẩm của đơn hàng ID: $id </h4>
                        <hr class=\"soft\"/>
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th style=\"text-align: center\">Số lượng</th>
                            <th style=\"text-align: center\">Đơn Giá</th>
                            <th style=\"text-align: center\">Tổng giá</th>
                        </tr>
                        </thead>
                       <tbody>";

        foreach ($list as $value) {
            $total = $value->qty * $value->unit_price;
            $data .=
                "<tr>
                    <td>$value->name</td>
                    <td style=\"text-align: center\"> $value->qty </td>
                    <td style=\"text-align: center\">  $value->unit_price </td>
                    <td style=\"text-align: center\"> $total </td>
                 </tr> ";
            $totalAll += $total;
        }
        $data .= "  <tr>
                        <td colspan=\"3\" style=\"text-align:right;\">Tổng tiền</td>
                        <td style=\"text-align: center;\"> $totalAll VNĐ</td>
                    </tr>
                    </tbody>
                </table>";

        return $data;
    }
}
