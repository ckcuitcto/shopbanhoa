/**
 * Created by CKC on 07-Nov-17.
 */
$(document).ready(function () {
    $(".quantity1").change(function () {
        var quantity = $(this).val();
        var idProduct = $(this).attr("idProduct");
        var token = $("input[name='_token']").val();
        $.ajax({
            url:'cap-nhat-gio-hang/'+idProduct+'/'+quantity,
            type:'GET',
            cache:false,
            data:{"_token":token,"id":idProduct,"qty":quantity},
            success:function (data) {
                    window.location.reload();
            }
        });
    });

    $(".shopBtn").click(function () {
        var idProduct = $(this).attr("idProduct");
        $.ajax({
            url:'mua-hang/'+idProduct+'/1',
            type:'GET',
            cache:false,
            data:{"id":idProduct,"qty":1},
            success:function (data) {
                    window.location.reload();
            }
        });
    });

    $(".removeProduct").click(function () {
        var idProduct = $(this).attr("idProduct");
        $.ajax({
            url:'xoa-san-pham/'+idProduct,
            type:'GET',
            cache:false,
            data:{"id":idProduct},
            success:function (data) {
                window.location.reload();
            }
        });
    });
});

