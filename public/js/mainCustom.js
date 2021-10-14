/*****************CUSTOM************************/
$(document).ready(function () {
    let arr = ["tendangnhap_DK", "matkhau_DK", "rematkhau_DK", "email_DK"];


    $("#dangky").click(function (e) {
        var tendangnhap = $("#" + arr[0]).val();
        var matkhau = $("#" + arr[1]).val();
        var rematkhau = $("#" + arr[2]).val();
        var email = $("#" + arr[3]).val();
        if (tendangnhap == "" || matkhau == "" || matkhau == "" || email == "") {
            alert("CAC O KHONG DUOC DE TRONG");
        } else {
            if (comparePassword(matkhau, rematkhau)) {
                $.post("./ajax/dangky", { tendangnhap: tendangnhap, matkhau: matkhau, email: email }, function (data) {
                    alert(data);
                });
            } else {
                alert("pass !=");
            }
        }
    });
    $("#dangnhap").click(function (e) {
        var tendangnhap = $("#tendangnhap_DN").val();
        var matkhau = $("#matkhau_DN").val();

        $.post("./ajax/dangnhap", { tendangnhap: tendangnhap, matkhau: matkhau }, function (data) {
            if (data) {
                location.replace("./taikhoan");
            } else {
                alert("DANG NHAP THAT BAI");
            }
        });
    });
    $("input").keyup(function (e) {
        var id = $(this).attr('id');
        var count = arr.length;
        for (let i = 0; i < count; i++) {
            if(id == arr[i]){
                alert("CLICK TAI "+arr[i]);
            }
        }
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