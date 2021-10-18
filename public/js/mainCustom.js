/*****************CUSTOM************************/
var result = true;
$(document).ready(function () {
    $("#dangnhap").click(function (e) {
        var tendangnhap = $("#tendangnhap_DN").val();
        var matkhau = $("#matkhau_DN").val();
        dangNhap(tendangnhap, matkhau);
    });
    $("#dangky").click(function () {
        let arrDk = ["tendangnhap_DK","matkhau_DK","rematkhau_DK","email_DK"];
        
    });
    $("input").keyup(function (e) { 
        let arrDk = ["tendangnhap_DK","matkhau_DK","rematkhau_DK","email_DK"];
        if($(this).attr('id') == arrDk[0]){
            if(checkAcount($(this).val())){
                spanErr($(this).attr('id'),false,"Tồn Tại...");
            }else{
                spanErr($(this).attr('id'),true,"");
            }
        }
        if($(this).attr('id') == arrDk[2]){
            var pass1 = $("#"+arrDk[1]).val();
            var pass2 = $(this).val();
            if(comparePassword(pass1,pass2)){
                spanErr($(this).attr('id'),true,"");
            }else{
                spanErr($(this).attr('id'),false,"Mật Khẩu Không Khớp...");
            }  
        }
        if($(this).attr('id') == arrDk[3]){
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var email = $(this).val();
            if(pattern.test(email)){
                spanErr($(this).attr('id'),true,"");
            }else{
                spanErr($(this).attr('id'),false,"Không Phải Định Dạng Email...");
            }    
        }
    });
    // function support 
    function checkAcount(tendangnhap){
        var php_data;
        $.ajax({
            type: "post",
            url: "./ajax/CheckAcount",
            async: false, 
            data: {tendangnhap:tendangnhap},
            // dataType: "dataType",
            success: function (response) {
                php_data = response;
            }
        });
        return php_data;
    }
    function comparePassword(pass1,pass2) {
        if (pass1 == pass2) {
            return true;
        } else {
            return false;
        }
    }
    function dangNhap(tendangnhap, matkhau) {
        $.post("./ajax/dangnhap", { tendangnhap: tendangnhap, matkhau: matkhau }, function (data) {
            if (data) {
                location.replace("./taikhoan");
            } else {
                alert("DANG NHAP THAT BAI");
            }
        });
    }
    function spanErr(idName,option,mess) {
        if(option){
            $("#sp"+idName).html("");
            $("#sp"+idName).css({"color":"red","font-size":"small"});
        }else{
            $("#sp"+idName).html(mess);
            $("#sp"+idName).css({"color":"red","font-size":"small"});
        }
        // $("#sp"+idName).addClass("fas fa-times");
    
    }

});





