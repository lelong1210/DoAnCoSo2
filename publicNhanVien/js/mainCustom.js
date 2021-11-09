$(document).ready(function () {
    //link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    //
    $("button").click(function (e) { 
        var btn_cv = "btn_cv";
        var btn_ht = "btn_ht";
        idThis = $(this).attr("id");
        if(idThis.startsWith(btn_cv)){
            var macv = idThis.slice(btn_cv.length,idThis.length);
            if(setCongViec(macv)){
                alert("Bạn Đã Nhận Công Việc - Với Mã Công Việc Là : "+macv+" ^_^ !!!");
                location.reload();
            }
        }
        if(idThis.startsWith(btn_ht)){
            var macv = idThis.slice(btn_ht.length,idThis.length);
            if(XacNhanDaXongCV(macv)){
                alert("Bạn Đã Xác Hoàn Thành Nhận Công Việc - Với Mã Công Việc Là : "+macv+" ^_^ !!!");
                location.reload();                
            }
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
    function XacNhanDaXongCV(macv){
        var result = "";
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/xacNhanXongCongViec",
            data: {macv:macv},
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
});