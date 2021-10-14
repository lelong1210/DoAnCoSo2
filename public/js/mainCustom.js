/*****************CUSTOM************************/

$(document).ready(function () {
    let ErrDk = true;
    let arr = ["tendangnhap_DK", "matkhau_DK", "rematkhau_DK", "email_DK"];
    $("#dangky").click(function (e) {
        alert(ErrDk);
        var tendangnhap = $("#" + arr[0]).val();
        var matkhau = $("#" + arr[1]).val();
        var rematkhau = $("#" + arr[2]).val();
        var email = $("#" + arr[3]).val();
        if (tendangnhap == "" || matkhau == "" || matkhau == "" || email == "") {
            alert("các ô không được để trồng");
        } else {
            if (ErrDk) {
                $.post("./ajax/dangky", { tendangnhap: tendangnhap, matkhau: matkhau, email: email }, function (data) {
                    alert(data);
                });
            } else {
                alert("loi tren man hinh");
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
        if (id == arr[0]) {
            var tendangnhap = $(this).val();
            $.post("./ajax/checkAcount", { tendangnhap: tendangnhap }, function (data) {
                if (data) {
                    ErrDk = false;
                    $("#" + "sp" + "tendangnhap_DK").css({ "color": "#fa0000 !important" });
                    $("#" + "sp" + "tendangnhap_DK").html(ErrDk);
                    
                } else {
                    ErrDk = true;
                    $("#" + "sp" + "tendangnhap_DK").html(ErrDk);
                }
            });
        }
        if (id == arr[2]) {
            var pass1 = $("#" + arr[1]).val();
            var pass2 = $(this).val();
            // alert(pass2+"==="+pass1);
            if (comparePassword(pass1, pass2)) {
                $("#" + "sp" + arr[2]).html("");
                ErrDk = true;
            } else {
                $("#" + "sp" + arr[2]).css({ "color": "#fa0000 !important" });
                $("#" + "sp" + arr[2]).html("mật khẩu không trùng khớp");
                ErrDk = false;
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
function checkAcount(tendangnhap) {
    $.post("./ajax/checkAcount", { tendangnhap: tendangnhap }, function (data) {
        if (data) {
            $("#" + "sp" + "tendangnhap_DK").css({ "color": "#fa0000 !important" });
            $("#" + "sp" + "tendangnhap_DK").html("tài khoản đã tồn tại");
            ErrDk = false;
        } else {
            $("#" + "sp" + "tendangnhap_DK").html("");
            ErrDk = true;
        }
    });
}