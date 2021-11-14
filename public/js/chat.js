$(document).ready(function () {
    var linkTuyetDoi = "http://localhost/www/";
    $("#gui").click(function (e) { 
        var noidung = $("#ndTN").val();
        if(noidung != ""){
            var result = insertToTN(noidung);
            if(result){
                var content = "<li class='clearfix'><div class='message-data text-right'><span class='message-data-time'>"+result+"</span></div><div class='message other-message float-right'>"+noidung+"</div></li>";
                $("#dstn").append(content);
                $("#ndTN").val("");
                $("#lastTime").html(result);
            }
        }
    });
    // functio support
    function insertToTN(noidung){
        var result =  "";
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/chat",
            data: {
                noidung:noidung
            },
            success: function (response) {
              result = response;  
            }
        });
        return result;
    }
    function check_newMess(thoigiannhan){
        var result = "";
        $.ajax({
            type: "post",
            async:false,
            data:{thoigiannhan:thoigiannhan},
            url: linkTuyetDoi+"ajax/check_newMess",
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    // real time chat
    setInterval(() => {
        // var lastTime = $("#lastTime").html();
        // var result = check_newMess(lastTime);
        // if(result){
        //     alert(result);
        // }
    },10000);
}); 