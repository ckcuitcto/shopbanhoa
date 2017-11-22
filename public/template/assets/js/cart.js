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
                if(data == "success") {
                    window.location.reload();
                }
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
                if(data == "success") {
                    window.location.reload();
                }
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
                if(data== "success") {
                    window.location.reload();
                }
            }
        });
    });



    var time = 10; // Thời gian đếm ngược
    var page = "index.php?p=canhan"; // Trang bạn muốn chuyển đến
    function countDown() {
        time--;
        gett("timecount").innerHTML = time;
        if (time == -1) {
            window.location = page;
        }
    }
    function gett(id) {
        if (document.getElementById) return document.getElementById(id);
        if (document.all) return document.all.id;
        if (document.layers) return document.layers.id;
        if (window.opera) return window.opera.id;
    }
    function init() {
        if (gett('timecount')) {
            setInterval(countDown, 1000);
            gett("timecount").innerHTML = time;
        }
        else {
            setTimeout(init, 50);
        }
    }
    document.onload = init();
});


var time = 10; // Thời gian đếm ngược
var page = "index.php?p=canhan"; // Trang bạn muốn chuyển đến
function countDown() {
    time--;
    gett("timecount").innerHTML = time;
    if (time == -1) {
        window.location = page;
    }
}
function gett(id) {
    if (document.getElementById) return document.getElementById(id);
    if (document.all) return document.all.id;
    if (document.layers) return document.layers.id;
    if (window.opera) return window.opera.id;
}
function init() {
    if (gett('timecount')) {
        setInterval(countDown, 1000);
        gett("timecount").innerHTML = time;
    }
    else {
        setTimeout(init, 50);
    }
}
document.onload = init();