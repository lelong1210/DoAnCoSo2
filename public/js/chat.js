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
    function check_newMess(){
        var result = "";
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/check_newMess",
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    // real time chat
    setInterval(() => {
        if(check_newMess()){
            // alert("có sự thay đổi");
        }
    },1000);
}); 