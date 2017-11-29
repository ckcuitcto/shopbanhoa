/**
 * Created by CKC on 14-Nov-17.
 */

$(document).ready(function () {
    $('#dataTables-example').dataTable();



});

$('div.alert-success').delay(2000).slideUp();

function confirmDelete(msg) {
    if(window.confirm(msg) == true){
        return true;
    }
    return false;
}

$(document).ready(function () {
    $(".slideImage").click(function () {
        var slideId = $(this).attr("slideId");
        $.ajax({
            url: '/admin/slide/deleteSlide/' + slideId,
            type: 'GET',
            cache: false,
            data: {"id": slideId},
            success: function (data) {
                if (data = "success") {
                    window.location.reload();
                }
            }
        });
    });

});