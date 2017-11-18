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