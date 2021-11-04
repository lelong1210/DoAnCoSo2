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
    $("#saveAddressShipping").click(function (e) {
        var tentinh = $("#tentinh").val();
        var tenhuyen = $("#tenhuyen").val();
        var tenxa = $("#tenxa").val();
        var diachichitiet = $("#diachi").val();
        if (tentinh == null || tenhuyen == null || tenxa == null || diachichitiet == "") {
            alert("vui lòng chọn đầy đủ thông tin");
        } else {
            if (insertAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet)) {
                alert("da them");
                location.reload();
            } else {
                alert("that bai");
            }
        }

    });
    $("button").click(function (e) {
        var VariAbledeleteAddressShipping = "deleteAddressShipping";
        var VariaEditAddressShipping = "editAddressShipping";
        var idThis = $(this).attr("id");
        if (idThis.startsWith(VariAbledeleteAddressShipping)) {
            var madiachigiaohang = idThis.slice(VariAbledeleteAddressShipping.length, idThis.length);
            if (deleteAddressShipping(madiachigiaohang)) {
                alert("Đã Xóa");
                location.reload();
            } else {
                alert("Thất Bại")
            }
        }
        if (idThis.startsWith(VariaEditAddressShipping)) {
            var tentinh = $("#tentinh").val();
            var tenhuyen = $("#tenhuyen").val();
            var tenxa = $("#tenxa").val();
            var diachichitiet = $("#diachi").val();
            var madiachigiaohang = idThis.slice(VariaEditAddressShipping.length, idThis.length);
            if (tentinh == "" || tenhuyen == "" || tenxa == "" || diachichitiet == "") {
                alert("vui lòng chọn đầy đủ thông tin");
            } else {
                if (editAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet, madiachigiaohang)) {
                    alert("da sua thanh cong");
                    location.assign(linkTuyetDoi + "taikhoan");
                } else {
                    alert("that bai");
                }
            }
        }
    });
    // trang dk dn
    $("#dangnhap").click(function (e) {
        var tendangnhap = $("#tendangnhap_DN").val();
        var matkhau = $("#matkhau_DN").val();
        dangNhap(tendangnhap, matkhau);
    });
    $("#dangky").click(function () {
        var tendangnhap = $("#tendangnhap_DK").val();
        var matkhau = $("#matkhau_DK").val();
        var nhaplaimatkhau = $("#rematkhau_DK").val();
        var email = $("#email_DK").val();
        var quyen = 0;
        if(tendangnhap != "" && matkhau != "" && nhaplaimatkhau != "" && email != ""){
            if(!checkAcount(tendangnhap)){
                if(checkStrongPass(matkhau)){
                    if(comparePassword(matkhau,nhaplaimatkhau)){
                        if(checkEmailFormat(email)){
                            if(dangky(tendangnhap,matkhau,email,quyen)){
                                alert("Đã Đăng Ký Thành Công");
                                location.reload();
                            }
                        }else{
                            alert("Lỗi Trên Màn Hình");
                        }
                    }else{
                        alert("Lỗi Trên Màn Hình");
                    }
                }else{
                    alert("Lỗi Trên Màn Hình");
                }
            }else{
                alert("Lỗi Trên Màn Hình");
            }
        }else{
            alert("Các Ô Không Được Để Trống");
        }

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
        if ($(this).attr('id') == arrDk[1]) {
            var matkhau = $(this).val();
            if (checkStrongPass(matkhau) >= 4) {
                spanErr($(this).attr('id'), true, "");
            }
            else {
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
    // xu ly mua hang 
    // ==> trang gio hang
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
        var soluongconlai = "soluongconlai";
        if (idThis.startsWith(btnMhUp)) {
            EditDetailOfCartFrontEnd(idThis, btnMhUp, valueOfInput, tdOfprice, tdOfprieLast, soluongconlai, "up");
        }
        if (idThis.startsWith(btnMhDown)) {
            EditDetailOfCartFrontEnd(idThis, btnMhDown, valueOfInput, tdOfprice, tdOfprieLast, soluongconlai, "down")
        }
    });
    $("#toitrangthanhtoan").click(function (e) {
        var chonsp = "chonsp";
        var valueOfInput = "valueOfInput";
        var tdOfprice = "tdOfprice";
        var n = $(':checkbox').length;
        const arr = [];
        // kiem tra cac checkbox da tich
        $(':checkbox').each(function () {
            const arrChild = [];
            var text = "";
            if ($(this).is(":checked")) {
                var idCheked = $(this).attr("id");
                var masp = idCheked.slice(chonsp.length, idCheked.length);
                var soluong = ($("#" + valueOfInput + masp).html());
                text = { "masp": masp, "soluong": soluong };
            }
            if (text.length != 0) {
                arr.push(text);
            }
        });
        // day du lieu len session 
        if (arr.length > 0) {
            $.ajax({
                type: "post",
                url: linkTuyetDoi + "ajax/getProductToPayment",
                data: { arr: arr },
                // dataType: "dataType",
                success: function (response) {
                    if (response) {
                        // chuyen sang trang thanh toan
                        location.assign(linkTuyetDoi + "thanhtoan");
                    }
                }
            });
        } else {
            alert("Bạn Chưa Chọn Sản Phẩm ^_^ !!!");
        }
    });
    // ==> trang thanh toan
    $("#thanhtoan").click(function (e) {
        var idAddress = "";
        $(":checkbox").each(function () {
            if ($(this).is(":checked")) {
                idAddress = $(this).attr("id");
            }
        })
        if (idAddress != "") {
            var arr = [];
            var diachigiaohang = $("#spanOfAddress" + idAddress).html();
            $("span").each(function () {
                var idSpan = $(this).attr("id");
                var soluongsp = "soluongsp";
                if (idSpan && idSpan.startsWith(soluongsp)) {
                    var masp = idSpan.slice(soluongsp.length, idSpan.length);
                    var soluong = $("#" + idSpan).html();
                    var text = { "masp": masp, "soluong": soluong };
                    arr.push(text);
                }
            });
            if (tienHanhthanhToan(diachigiaohang, arr)) {
                alert("Cảm Ơn Quý Khách Đã Mua Sản Phẩm");
                location.assign(linkTuyetDoi);
            } else {
                alert("Thanh Toán Thất Bại");
            }
        } else {
            alert("Chua chon dia chi thanh toan");
        }
    });
    $(":checkbox").click(function (e) {
        var idThis = $(this).attr("id");
        var chonsp = "chonsp";
        if (idThis.startsWith(chonsp) == false) {
            var giaTienSp = $("#giaTienSp").html();
            var diachi = $("#spanOfAddress" + idThis).html();
            $(":checkbox").each(function () {
                if ($(this).is(":checked") && idThis != $(this).attr("id")) {
                    $(this).prop("checked", false);
                }
            })
            $("#shippingCost").html((diachi.length) * 2000);
            $("#tongtien").html((parseInt(giaTienSp) + (diachi.length) * 2000) + " đ");
        }
    });
    /// noi chon tinh huyen xa 
    $("#selectAddress").click(function (e) {
        var tong;
        var clickAddress = 0;
        $("#contentSelectAddress").slideDown();
        $.ajax({
            type: "get",
            url: linkTuyetDoi + "public/js/diaChi.json",
            dataType: "json",
            success: function (response) {
                tong = response;
                $.each(response, function (indexInArray, valueOfElement) {
                    $("#tentinh").append($('<option>', {
                        value: valueOfElement.name,
                        text: valueOfElement.name
                    }));
                });
            }
        });
        $("select").change(function (e) {
            var typeId = $(this).attr("id");
            if (typeId == "tentinh") {
                var tentinh = this.value;
                $("#tenhuyen").html("");
                $.each(tong, function (indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function (indexInArray, valueOfElement1) {
                            $("#tenhuyen").append($('<option>', {
                                value: valueOfElement1.name,
                                text: valueOfElement1.name
                            }));
                        });
                    }
                });
            }
            if (typeId == "tenhuyen") {
                var tentinh = $("#tentinh").val();
                var tenhuyen = $("#tenhuyen").val();
                $("#tenxa").html("");
                $.each(tong, function (indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function (indexInArray, valueOfElement1) {
                            if (valueOfElement1.name == tenhuyen) {
                                $.each(valueOfElement1.wards, function (indexInArray, valueOfElement2) {
                                    $("#tenxa").append($('<option>', {
                                        value: valueOfElement2.name,
                                        text: valueOfElement2.name
                                    }));
                                });
                            }
                        });
                    }
                });

            }
            $("#shippingCost").html("3000");
        });
    });
    $("select").click(function (e) {
        var tong;
        var clickAddress = 0;
        $("#contentSelectAddress").slideDown();
        $.ajax({
            type: "get",
            url: linkTuyetDoi + "public/js/diaChi.json",
            dataType: "json",
            success: function (response) {
                tong = response;
                $.each(response, function (indexInArray, valueOfElement) {
                    $("#tentinh").append($('<option>', {
                        value: valueOfElement.name,
                        text: valueOfElement.name
                    }));
                });
            }
        });
        $("select").change(function (e) {
            var typeId = $(this).attr("id");
            if (typeId == "tentinh") {
                var tentinh = this.value;
                $("#tenhuyen").html("");
                $.each(tong, function (indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function (indexInArray, valueOfElement1) {
                            $("#tenhuyen").append($('<option>', {
                                value: valueOfElement1.name,
                                text: valueOfElement1.name
                            }));
                        });
                    }
                });
            }
            if (typeId == "tenhuyen") {
                var tentinh = $("#tentinh").val();
                var tenhuyen = $("#tenhuyen").val();
                $("#tenxa").html("");
                $.each(tong, function (indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function (indexInArray, valueOfElement1) {
                            if (valueOfElement1.name == tenhuyen) {
                                $.each(valueOfElement1.wards, function (indexInArray, valueOfElement2) {
                                    $("#tenxa").append($('<option>', {
                                        value: valueOfElement2.name,
                                        text: valueOfElement2.name
                                    }));
                                });
                            }
                        });
                    }
                });

            }
            $("#shippingCost").html("3000");
        });
    });
    // ==> danh gia san pham  
    var sosaodanhgia = 1; 
    $("#danhgia").click(function (e) {
        if (checkLogin()) {
            var spanOf = "spanOf";
            var masp = "";
            $("span").each(function () {
                var idThis = $(this).attr("id");
                if (idThis && idThis.startsWith(spanOf)) {
                    masp = idThis.slice(spanOf.length, idThis.length);
                }
            });
            if (checkSell(masp)) {
                var inputDanhgia = $("#inputDanhgia").val();
                if(inputDanhgia != ""){
                    if(danhgia(sosaodanhgia,inputDanhgia,masp)){
                        alert("cảm ơn bạn đã đánh giá ^_^ ");
                        location.reload();
                    }else{
                        alert("đánh giá thất bại")
                    }
                }else{
                    alert("bạn chưa nhập nội dung...");
                }
            }else{
                alert("bạn chưa mua sản phẩm này ^_^ !!! ")
            }
        }
        else {
            location.replace(linkTuyetDoi + "dndk");
        }
    });
    $("button").click(function (e) { 
        var saodanhgiaUp = "saodanhgiaUp";
        var saodanhgiaDown = "saodanhgiaDown";
        idThis = $(this).attr("id");
        if(idThis == saodanhgiaUp){
            if(sosaodanhgia < 5){
                sosaodanhgia = sosaodanhgia + 1; 
                $(".contenRating").append(" <i class='ion-android-star' id='sao"+sosaodanhgia+"'></i>");
            }
        }
        if(idThis == saodanhgiaDown){
            if(sosaodanhgia > 0){
                $("#sao"+sosaodanhgia).remove();
                sosaodanhgia = sosaodanhgia - 1; 
            }
        }
    });
    // ==> upload
    $("#test1").click(function (e) { 
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file11', files);
        $.ajax({
            url: linkTuyetDoi+"ajax/uploadfile",
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                alert(response);
                if(response != 0){
                   alert('file uploaded');
                }
                else{
                    alert('file not uploaded');
                }
            },
        });
    });
    // ==> gui mail 
    $("#sendMail").click(function (e) { 
        var diachigui = $("#diachimail").val();
        var tieude = $("#tieude").val();
        var bodyconten = $("#noidung").val();
        var linkanh = uploadImg();
        $.ajax({
            type: "post",
            url: "./ajax/GuiMail",
            data: {tieude:tieude, 
                diachigui:diachigui,
                bodyconten:bodyconten,
                linkanh:linkanh
            },
            success: function (response) {
                alert(response);
            }
        });
        
    });
    // function support 
    function uploadImg(){
        var fd = new FormData();
        var files = $('#linkduongdananh')[0].files[0];
        fd.append('file', files);
        var result = "";
        $.ajax({
            url: linkTuyetDoi+"ajax/uploadfile",
            type: 'post',
            async:false,
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                result = response;
            },
        });
        return result;
    }
    function checkAcount(tendangnhap) {
        var php_data;
        $.ajax({
            type: "post",
            url: linkTuyetDoi + "ajax/CheckAcount",
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
    function checkStrongPass(pass) {
        var domanh = 0;
        const arr = [/[A-Z]/, /[a-z]/, /[0-9]/, /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/];
        if (pass.length >= 8) {
            $.each(arr, function (indexInArray, valueOfElement) {
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
    function checkEmailFormat(email) { 
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if(pattern.test(email)){
            return true;
        }else{
            return false;
        }
    }
    function dangky(tendangnhap,matkhau,email,quyen){
        var result = "";
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/dangky",
            data: {
                tendangnhap:tendangnhap,
                matkhau:matkhau,
                email:email,
                quyen:quyen
            },
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function dangNhap(tendangnhap, matkhau) {
        $.post("./ajax/dangnhap", { tendangnhap: tendangnhap, matkhau: matkhau }, function (data) {
            if (data) {
                location.assign("./taikhoan");
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
                if (response) {
                    alert("Đổi Mật Khẩu Thành Công");
                } else {
                    alert("Đổi Mật Khẩu Thất Bại");
                }
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
    function EditDetailOfCartFrontEnd(idThis, btnMh, valueOfInput, tdOfprice, tdOfprieLast, soluongconlai, option) {
        var masp = idThis.slice(btnMh.length, idThis.length);
        var valueOfInputLast = $("#" + valueOfInput + masp).html();
        var idPrice = $("#" + tdOfprice + masp).html();
        var soluong = parseInt(valueOfInputLast);
        var soluongkhadung = $("#" + soluongconlai + masp).html();
        if (option == "up") {
            soluong = soluong + 1;
            soluongkhadung = parseInt(soluongkhadung) - 1;
            if (soluongkhadung < 0) {
                alert("Không Còn Đủ Sản Phẩm")
            } else {
                $("#" + valueOfInput + masp).html(soluong);
                $("#" + tdOfprieLast + masp).html(parseInt(idPrice) * soluong);
                $("#" + soluongconlai + masp).html(soluongkhadung)
                updateDetailOfCart(masp, soluong);
                updateSanPham(masp, soluongkhadung);
            }
            // alert(soluong);
        }
        if (option == "down") {
            soluong = soluong - 1;
            soluongkhadung = parseInt(soluongkhadung) + 1;
            if (soluong == 0) {
                $("#" + "tr" + masp).remove();
                deleteInDetailCart(masp);
            } else {
                $("#" + valueOfInput + masp).html(soluong);
                $("#" + tdOfprieLast + masp).html(parseInt(idPrice) * soluong);
                $("#" + soluongconlai + masp).html(soluongkhadung)
                updateDetailOfCart(masp, soluong);
                updateSanPham(masp, soluongkhadung);
            }
        }
    }
    function updateDetailOfCart(masp, soluong) {
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/updateDetailOfCart",
            data: {
                masp: masp,
                soluong: soluong
            },
            success: function (response) {
                // alert(response);
            }
        });
    }
    function updateSanPham(masp, soluongsp) {
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/updateSanPham",
            data: {
                masp: masp,
                soluongsp: soluongsp
            },
            success: function (response) {
                // alert(response);
            }
        });
    }
    function deleteInDetailCart(masp) {
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/deleteInDetailCart",
            data: {
                masp: masp
            },
            success: function (response) {
                // alert(response);
            }
        });
    }
    function insertAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/insertAddressShipping",
            data: {
                tentinh: tentinh,
                tenhuyen: tenhuyen,
                tenxa: tenxa,
                diachichitiet: diachichitiet
            },
            // dataType: "dataType",
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function deleteAddressShipping(madiachigiaohang) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/deleteAddressShipping",
            data: { madiachigiaohang: madiachigiaohang },
            // dataType: "dataType",
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function editAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet, madiachigiaohang) {
        alert(tentinh + "-" + tenhuyen + "-" + tenxa + "-" + diachichitiet + "-" + madiachigiaohang);
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/editAddressShipping",
            data: {
                tentinh: tentinh,
                tenhuyen: tenhuyen,
                tenxa: tenxa,
                diachichitiet: diachichitiet,
                madiachigiaohang: madiachigiaohang
            },
            success: function (response) {
                result = response
            }
        });
        return result;
    }
    function tienHanhthanhToan(diachigiaohang, arr) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/thanhtoan",
            data: { diachigiaohang: diachigiaohang, arr: arr },
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function checkSell(masp) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/checkSell",
            data: { masp: masp },
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function danhgia(sosaodanhgiaa,inputDanhgia,masp){
        var result = 0 ;
        $.ajax({
            type: "post",
            async:false,
            url: linkTuyetDoi+"ajax/danhgia",
            data: {sosaodanhgia:sosaodanhgiaa,
                inputDanhgia:inputDanhgia,
                masp:masp    
            },
            // dataType: "dataType",
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
});




/*        $.each(arr, function (indexInArray, valueOfElement) {
             alert(JSON.stringify(valueOfElement));
        });*/
