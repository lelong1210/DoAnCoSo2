$(document).ready(function () {
    //link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    //
    $("button").click(function (e) { 
        var btn_cv = "btn_cv";
        idThis = $(this).attr("id");
        if(idThis.startsWith(btn_cv)){
            var macv = idThis.slice(btn_cv.length,idThis.length);
            alert(setCongViec(macv));
        }
    });
    // function support
    function setCongViec(macv){
        var result = "";
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/setCongViec",
            data: {macv:macv},
            success: function (response) {
                result = response;
            }
        });
        return result;
    }

});