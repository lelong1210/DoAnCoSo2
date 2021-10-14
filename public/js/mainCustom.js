/*****************CUSTOM************************/
$(document).ready(function () {
    $("#dangky").click(function (e) {
        // // alert("Da Dang Ky");
        var tendangnhap = $("#tendangnhap_DK").val();
        var matkhau = $("#matkhau_DK").val();
        var rematkhau = $("#rematkhau_DK").val();
        var email = $("#email_DK").val();
        // alert(tendangnhap + matkhau + rematkhau + emnail);
        if (comparePassword(matkhau, rematkhau)) {
            $.post("./ajax/dangky", { tendangnhap: tendangnhap, matkhau: matkhau, email: email }, function (data) {
                alert(data);
            });
        } else {
            alert("pass !=");
        }
    });
    $("#dangnhap").click(function (e) {
        var tendangnhap = $("#tendangnhap_DN").val();
        var matkhau = $("#matkhau_DN").val();

        $.post("./ajax/dangnhap", {tendangnhap: tendangnhap, matkhau: matkhau}, function (data) {
            if(data){
                location.replace("./taikhoan");
            }else{
                alert("DANG NHAP THAT BAI");
            }
        });
    });
    // $("#tendangnhap_DK").keyup(function (e) { 
    //     $("#sp"+$(this).attr('id')).html($(this).val());
    //     $("#sp"+$(this).attr('id')).css({"color":"red"});
    // });
    $("input").keyup(function (e) {
        var id = $(this).attr('id');
        spanErr(id);
    });
    $("#test").click(function (e) { 
        var x = $("#file").val();
        $.post("./ajax/show1", {lurl:x}, function (data) {
            if(data){
                alert(data);
            }else{
                alert("DANG NHAP THAT BAI");
            }
        });
    });
});
function comparePassword($pass1, $pass2) {
    if ($pass1 == $pass2) {
        return true;
    } else {
        return false;
    }
}
function spanErr(idName) {
    // $("#sp"+idName).html($("#"+idName).val());
    // $("#sp"+idName).css({"color":"red","font-size":"small"});
    // $("#sp"+idName).addClass("fas fa-times");

}