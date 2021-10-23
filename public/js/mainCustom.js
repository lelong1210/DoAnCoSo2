/*****************CUSTOM************************/
$(document).ready(function () {
    // link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    // trang khach hang
    $("#updateAcount").click(function (e) {
        var tennguoidung = $("#tennguoidungupdate").val();
        var diachi = $("#diachiupdate").val();
        var sodienthoai = $("#sodienthoaiupdate").val();
        var email = $("#emailupdate").val();
        if (updateAcount(tennguoidung, diachi, sodienthoai, email)) {
            alert("Đã Cập Nhật Thông Tin");
        } else {
            alert("Sửa Không Thành Công");
        }
    });
    $("#updatePassword").click(function (e) {
        if (checkChangePass()) {
            let arr = ["matkhau_UP", "rematkhau_UP"];
            var pass2 = $("#" + arr[1]).val();
            changePass(pass2);
        } else {
            alert("Không Thể Thực Hiện");
        }
    });
    $("input").keyup(function (e) {
        var id = $(this).attr("id");
        checkChangePass(id);
    });
    // trang dk dn
    $("#dangnhap").click(function (e) {
        var tendangnhap = $("#tendangnhap_DN").val();
        var matkhau = $("#matkhau_DN").val();
        dangNhap(tendangnhap, matkhau);
    });
    $("#dangky").click(function () {
        let arrDk = ["tendangnhap_DK", "matkhau_DK", "rematkhau_DK", "email_DK"];

    });
    $("input").keyup(function (e) {
        let arrDk = ["tendangnhap_DK", "matkhau_DK", "rematkhau_DK", "email_DK"];
        if ($(this).attr('id') == arrDk[0]) {
            if (checkAcount($(this).val())) {
                spanErr($(this).attr('id'), false, "Tồn Tại...");
            } else {
                spanErr($(this).attr('id'), true, "");
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
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var email = $(this).val();
            if (pattern.test(email)) {
                spanErr($(this).attr('id'), true, "");
            } else {
                spanErr($(this).attr('id'), false, "Không Phải Định Dạng Email...");
            }
        }
    });
    // xu ly mua hang 
    $("button").click(function (e) {
        var nameBtnMH = "btnMH";
        var idThis = $(this).attr('id');
        if (idThis.startsWith(nameBtnMH)) {
            if (checkLogin()) {
                var masp = idThis.slice(5, idThis.length);
                var soluong = 1
                if (addProductInCart(masp, soluong)) {
                    alert("Đã Thêm Vào Giỏ Hàng");
                } else {
                    alert("...");
                }
            }
            else {
                location.replace(linkTuyetDoi + "dndk");
            }

        }
    });

    $(".qtybutton").click(function (e) {
        var btnMhUp = "btnMhUp";
        var btnMhDown = "btnMhDown";
        var valueOfInput = "valueOfInput";
        var idThis = $(this).attr("id");
        var tdOfprice = "tdOfprice";
        var tdOfprieLast = "tdOfprieLast";
        if (idThis.startsWith(btnMhUp)) {
            EditDetailOfCartFrontEnd(idThis, btnMhUp, valueOfInput, tdOfprice, tdOfprieLast, "up");
        }
        if (idThis.startsWith(btnMhDown)) {
            EditDetailOfCartFrontEnd(idThis, btnMhDown, valueOfInput, tdOfprice, tdOfprieLast, "down")
        }
    });
    // $("tr").click(function (e) {
    //     alert($(this).attr("id"));
    // });

    // function support 
    function checkAcount(tendangnhap) {
        var php_data;
        $.ajax({
            type: "post",
            url: "./ajax/CheckAcount",
            async: false,
            data: { tendangnhap: tendangnhap },
            // dataType: "dataType",
            success: function (response) {
                php_data = response;
            }
        });
        return php_data;
    }
    function comparePassword(pass1, pass2) {
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
    function updateAcount(tennguoidung, diachi, sodienthoai, email) {
        var result = 0;

        tennguoidung = tennguoidung.toUpperCase();
        diachi = diachi.toUpperCase();

        $.ajax({
            type: "post",
            url: "./ajax/updateAcount",
            data: {
                tennguoidung: tennguoidung,
                diachi: diachi,
                sodienthoai: sodienthoai,
                email: email
            },
            async: false,
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function checkChangePass(id) {
        var result = true;
        let arr = ["matkhau_UP", "rematkhau_UP"];
        var pass1 = $("#" + arr[0]).val();
        var pass2 = $("#" + arr[1]).val();
        if (id) {
            if (id == arr[1]) {
                if (comparePassword(pass1, pass2)) {
                    spanErr(arr[1], true, "");
                    result = true;
                } else {
                    spanErr(arr[1], false, "Mật Khẩu Không Khớp");
                    result = false;
                }
            }
            return result;
        } else {
            if (comparePassword(pass1, pass2)) {
                return true;
            } else {
                return false;
            }
        }
    }
    function changePass(matkhau) {
        $.ajax({
            type: "post",
            url: "./ajax/updatePassword",
            data: { matkhau: matkhau },
            // dataType: "dataType",
            success: function (response) {
                alert(response);
            }
        });
    }
    function addProductInCart(masp, soluong) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/addProductInCart",
            data: {
                masp: masp,
                soluong: soluong
            },
            // dataType: "dataType",
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function checkLogin() {
        var result;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/checklogin",
            data: {},
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function EditDetailOfCartFrontEnd(idThis, btnMh, valueOfInput, tdOfprice, tdOfprieLast, option) {
        var idLast = idThis.slice(btnMh.length, idThis.length);
        var valueOfInputLast = $("#" + valueOfInput + idLast).val();
        var idPrice = $("#" + tdOfprice + idLast).html();
        var soluong = parseInt(valueOfInputLast);
        if (option == "up") {
            soluong = parseInt(valueOfInputLast) + 1;
            $("#" + valueOfInput + idLast).val(parseInt(valueOfInputLast) + 1);
            $("#" + tdOfprieLast + idLast).html(parseInt(idPrice) * soluong);
            updateDetailOfCart(idLast,soluong);
            // alert(soluong);
        }
        if (option == "down") {
            // alert("vao down");
            soluong = parseInt(valueOfInputLast) - 1;
            if(soluong == 0){
                $("#"+"tr"+idLast).remove();
            }else{
                $("#" + valueOfInput + idLast).val(parseInt(valueOfInputLast) - 1);
                $("#" + tdOfprieLast + idLast).html(parseInt(idPrice) * soluong);
                updateDetailOfCart(idLast,soluong);
            }
        }
    }
   function updateDetailOfCart(masp,soluong){
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/updateDetailOfCart",
            data: {
                masp:masp,
                soluong:soluong
            },
            success: function (response) {
                // alert(response);
            }
        });
    }
});





