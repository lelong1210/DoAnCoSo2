$(document).ready(function() {
    //link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    //
    $("button").click(function(e) {
        var btn_cv = "btn_cv";
        var btn_ht = "btn_ht";
        idThis = $(this).attr("id");
        if (idThis.startsWith(btn_cv)) {
            var macv = idThis.slice(btn_cv.length, idThis.length);
            if (setCongViec(macv)) {
                alert("Bạn Đã Nhận Công Việc - Với Mã Công Việc Là : " + macv + " ^_^ !!!");
                location.reload();
            }
        }
        if (idThis.startsWith(btn_ht)) {
            var macv = idThis.slice(btn_ht.length, idThis.length);
            if (XacNhanDaXongCV(macv)) {
                alert("Bạn Đã Xác Hoàn Thành Nhận Công Việc - Với Mã Công Việc Là : " + macv + " ^_^ !!!");
                location.reload();
            }
        }

    });
    // user nhan vien
    $("#update_acount").click(function(e) {
        var tennguoidung = $("#tennguoidung").val();
        var sodienthoai = $("#sodienthoai").val();
        var email = $("#email").val();
        var diachi = $("#diachi").val();
        if (tennguoidung != "", sodienthoai != "", email != "", diachi != "") {
            if (updateAcount(tennguoidung, sodienthoai, email, diachi)) {
                alert("Đã Cập Nhập Thông Tin");
                location.reload();
            }
        } else {
            alert("các ô không được để trống");
        }
    });
    $("#update_pass").click(function(e) {
        var matkhau = $("#matkhau").val();
        var nhaplaimatkhau = $("#nhaplaimatkhau").val();
        if (matkhau != "" && nhaplaimatkhau != "") {
            if (checkStrongPass(matkhau)) {
                if (comparePassword(matkhau, nhaplaimatkhau)) {
                    if (updatePass(matkhau)) {
                        alert("Đã cập nhật mật khẩu");
                        location.reload();
                    } else {
                        alert("Cập nhật thất bại");
                    }
                } else {
                    alert("Lỗi Trên Màn Hình");
                }
            } else {
                alert("Lỗi Trên Màn Hình");
            }
        } else {
            alert("các ô không được để trống");
        }
    });
    $("input").keyup(function(e) {
        let arrDk = ["tendangnhap", "matkhau", "nhaplaimatkhau", "email"];
        if ($(this).attr('id') == arrDk[0]) {
            if (checkAcount($(this).val())) {
                spanErr($(this).attr('id'), false, "Tồn Tại...");
            } else {
                spanErr($(this).attr('id'), true, "");
            }
        }
        if ($(this).attr('id') == arrDk[1]) {
            var matkhau = $(this).val();
            if (checkStrongPass(matkhau) >= 4) {
                spanErr($(this).attr('id'), true, "");
            } else {
                spanErr($(this).attr('id'), false, "Mật Khẩu Phải Bao Gồm Chữ Số ,Viết Hoa ,Viết Thường,Ký Tự Đặc Biệt,Dài Từ 8 Ký Tự...");
            }
        }
        if ($(this).attr('id') == arrDk[2]) {
            var pass1 = $("#" + arrDk[1]).val();
            var pass2 = $(this).val();
            if (comparePassword(pass1, pass2)) {
                spanErr($(this).attr('id'), true, "");
            } else {
                spanErr($(this).attr('id'), false, "Mật Khẩu Không Khớp...");
            }
        }
        if ($(this).attr('id') == arrDk[3]) {
            var email = $(this).val();
            if (checkEmailFormat(email)) {
                spanErr($(this).attr('id'), true, "");
            } else {
                spanErr($(this).attr('id'), false, "Không Phải Định Dạng Email...");
            }
        }
    });
    // function support
    function setCongViec(macv) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/setCongViec",
            data: { macv: macv },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function XacNhanDaXongCV(macv) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/xacNhanXongCongViec",
            data: { macv: macv },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function updateAcount(tennguoidung, sodienthoai, email, diachi) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/updateAcount",
            data: {
                tennguoidung: tennguoidung,
                diachi: diachi,
                sodienthoai: sodienthoai,
                email: email
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function checkStrongPass(pass) {
        var domanh = 0;
        const arr = [/[A-Z]/, /[a-z]/, /[0-9]/, /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/];
        if (pass.length >= 8) {
            $.each(arr, function(indexInArray, valueOfElement) {
                // alert(valueOfElement);
                if (valueOfElement.test(pass)) {
                    domanh++;
                }
            });
            return domanh;
        } else {
            return false;
        }
    }

    function spanErr(idName, option, mess) {
        if (option) {
            $("#sp" + idName).html("");
            $("#sp" + idName).css({ "color": "red", "font-size": "small" });
        } else {
            $("#sp" + idName).html(mess);
            $("#sp" + idName).css({ "color": "red", "font-size": "small" });
        }
        // $("#sp"+idName).addClass("fas fa-times");
    }

    function comparePassword(pass1, pass2) {
        if (pass1 == pass2) {
            return true;
        } else {
            return false;
        }
    }

    function updatePass(matkhau) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/updatePassword",
            data: { matkhau: matkhau },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function checkEmailFormat(email) {
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if (pattern.test(email)) {
            return true;
        } else {
            return false;
        }
    }
});