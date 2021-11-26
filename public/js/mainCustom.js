/*****************CUSTOM************************/
$(document).ready(function() {
    // link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    var link = "https://api.openweathermap.org/data/2.5/weather?q=";
    var apikeyForecast = "&&appid=ba1c6a2a72bf9a46f3fa108e513d74e0";
    // trang khach hang
    $("#updateAcount").click(function(e) {
        var tennguoidung = $("#tennguoidungupdate").val();
        var diachi = $("#diachiupdate").val();
        var sodienthoai = $("#sodienthoaiupdate").val();
        var email = $("#emailupdate").val();
        if (updateAcount(tennguoidung, diachi, sodienthoai, email)) {
            alert("Đã Cập Nhật Thông Tin");
            location.reload();
        } else {
            alert("Sửa Không Thành Công");
        }
    });
    $("#updatePassword").click(function(e) {
        matkhau = $("#matkhau_UP").val();
        nhaplaimatkhau = $("#rematkhau_UP").val();
        if (checkStrongPass(matkhau)) {
            if (comparePassword(matkhau, nhaplaimatkhau)) {
                changePass(matkhau);
            } else {
                alert("Lỗi Trên Màn Hình");
            }
        } else {
            alert("Lỗi Trên Màn Hình");
        }
    });
    $("input").keyup(function(e) {
        // var id = $(this).attr("id");
        // checkChangePass(id);
        let arrDk = ["matkhau_UP", "rematkhau_UP"];
        if ($(this).attr('id') == arrDk[0]) {
            var matkhau = $(this).val();
            if (checkStrongPass(matkhau) >= 4) {
                spanErr($(this).attr('id'), true, "");
            } else {
                spanErr($(this).attr('id'), false, "Mật Khẩu Phải Bao Gồm Chữ Số ,Viết Hoa ,Viết Thường,Ký Tự Đặc Biệt,Dài Từ 8 Ký Tự...");
            }
        }
        if ($(this).attr('id') == arrDk[1]) {
            var pass1 = $("#" + arrDk[0]).val();
            var pass2 = $(this).val();
            if (comparePassword(pass1, pass2)) {
                spanErr($(this).attr('id'), true, "");
            } else {
                spanErr($(this).attr('id'), false, "Mật Khẩu Không Khớp...");
            }
        }
    });
    $("#saveAddressShipping").click(function(e) {
        var tentinh = $("#tentinh").val();
        var tenhuyen = $("#tenhuyen").val();
        var tenxa = $("#tenxa").val();
        var diachichitiet = $("#diachi").val();
        var sodienthoaigh = $("#stdGh").val();
        if (tentinh == null || tenhuyen == null || tenxa == null || diachichitiet == "" || sodienthoaigh == "") {
            alert("vui lòng chọn đầy đủ thông tin");
        } else {
            if (insertAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet, sodienthoaigh)) {
                alert("Đã Thêm");
                location.reload();
            } else {
                alert("Thất Bại");
            }
        }

    });
    $("button").click(function(e) {
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
            var sodienthoaigh = $("#stdGh").val();
            var madiachigiaohang = idThis.slice(VariaEditAddressShipping.length, idThis.length);
            if (tentinh == "" || tenhuyen == "" || tenxa == "" || diachichitiet == "" || sodienthoaigh == "") {
                alert("vui lòng chọn đầy đủ thông tin");
            } else {
                if (editAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet, madiachigiaohang, sodienthoaigh)) {
                    alert("da sua thanh cong");
                    location.assign(linkTuyetDoi + "taikhoan");
                } else {
                    alert("that bai");
                }
            }
        }
    });
    // trang dk dn
    $("#dangnhap").click(function(e) {
        var tendangnhap = $("#tendangnhap_DN").val();
        var matkhau = $("#matkhau_DN").val();
        dangNhap(tendangnhap, matkhau);
    });
    $("#dangky").click(function() {
        var tendangnhap = $("#tendangnhap_DK").val();
        var matkhau = $("#matkhau_DK").val();
        var nhaplaimatkhau = $("#rematkhau_DK").val();
        var email = $("#email_DK").val();
        var quyen = 0;
        if (tendangnhap != "" && matkhau != "" && nhaplaimatkhau != "" && email != "") {
            if (!checkAcount(tendangnhap)) {
                if (checkStrongPass(matkhau)) {
                    if (comparePassword(matkhau, nhaplaimatkhau)) {
                        if (checkEmailFormat(email)) {
                            if (dangky(tendangnhap, matkhau, email, quyen)) {
                                alert("Đã Đăng Ký Thành Công");
                                location.reload();
                            }
                        } else {
                            alert("Lỗi Trên Màn Hình");
                        }
                    } else {
                        alert("Lỗi Trên Màn Hình");
                    }
                } else {
                    alert("Lỗi Trên Màn Hình");
                }
            } else {
                alert("Lỗi Trên Màn Hình");
            }
        } else {
            alert("Các Ô Không Được Để Trống");
        }

    });
    $("input").keyup(function(e) {
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
    // xu ly mua hang 
    // ==> trang gio hang
    $("body").on("click", "button", function(e) {
        var nameBtnMH = "btnMH";
        var btnPayLive = "btnPayLive";
        var idThis = $(this).attr('id');
        // them vao gio hang
        if (idThis.startsWith(nameBtnMH)) {
            if (checkLogin()) {
                var masp = idThis.slice(5, idThis.length);
                var soluong = 1
                if (addProductInCart(masp, soluong)) {
                    alert("Đã Thêm Vào Giỏ Hàng");
                    updateScreenSoLuongTrongGioHang(getSoLuongTrongGioHang());
                } else {
                    alert("...");
                }
            } else {
                location.replace(linkTuyetDoi + "dndk");
            }

        } else if (idThis.startsWith(btnPayLive)) {
            if (checkLogin()) {
                const arr = [];
                var masp = idThis.slice(btnPayLive.length, idThis.length);
                var text = { "masp": masp, "soluong": 1 };
                arr.push(text);
                if (setProductToPayment(arr)) {
                    location.assign(linkTuyetDoi + "thanhtoan");
                }
            } else {
                location.replace(linkTuyetDoi + "dndk");
            }
        }
    });
    $(".qtybutton").click(function(e) {
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
    $("#toitrangthanhtoan").click(function(e) {
        var chonsp = "chonsp";
        var valueOfInput = "valueOfInput";
        var tdOfprice = "tdOfprice";
        var n = $(':checkbox').length;
        const arr = [];
        // kiem tra cac checkbox da tich
        $(':checkbox').each(function() {
            const arrChild = [];
            var text = "";
            if ($(this).is(":checked")) {
                var idCheked = $(this).attr("id");
                var masp = idCheked.slice(chonsp.length, idCheked.length);
                var soluong = ($("#" + valueOfInput + masp).html());
                text = { "masp": masp, "soluong": soluong };
                arr.push(text);
            }
        });
        // day du lieu len session 
        if (arr.length > 0) {
            if (setProductToPayment(arr)) {
                location.assign(linkTuyetDoi + "thanhtoan");
            }
        } else {
            alert("Bạn Chưa Chọn Sản Phẩm ^_^ !!!");
        }
    });
    // ==> trang thanh toan
    $("#thanhtoan").click(function(e) {
        const arr = getThongTinDonHangInThanhToan();
        if (arr) {
            if (arr[4] == 1) {
                if (tienHanhthanhToan(arr)) {
                    alert("Cảm Ơn Quý Khách Đã Mua Sản Phẩm ^_^ !!!");
                    updateScreenSoLuongTrongGioHang(getSoLuongTrongGioHang());
                    location.assign(linkTuyetDoi + "hoadon");
                }
            } else {
                $(".contentQr").slideDown();
                $(".checkout-area").slideUp();
            }
        } else {
            alert("Chưa Chọn Đầy Thủ Thông Tin");
        }
    });
    $("#thanhtoanOnline").click(function(e) {
        const arr = getThongTinDonHangInThanhToan();
        if (arr) {
            if (arr[4] == 0) {
                if (tienHanhthanhToan(arr)) {
                    alert("Cảm Ơn Quý Khách Đã Mua Sản Phẩm ^_^ !!!");
                    updateScreenSoLuongTrongGioHang(getSoLuongTrongGioHang());
                    location.assign(linkTuyetDoi + "hoadon");
                }
            } else {
                alert("Thanh Toán Thất Bại");
                location.assign(linkTuyetDoi);
            }
        } else {
            alert("Chưa Chọn Đầy Thủ Thông Tin");
        }
    });
    $(":checkbox").click(function(e) {
        var idThis = $(this).attr("id");
        var cboxgh = "cboxgh";
        var checkboxTT = "checkboxTT";
        if (idThis.startsWith(cboxgh)) {
            var madiachigiaohang = idThis.slice(cboxgh.length, idThis.length);
            var giaTienSp = $("#giaTienSp").html();
            var diachi = $("#spanOfAddress" + madiachigiaohang).html();
            $(":checkbox").each(function() {
                var idThisC = $(this).attr("id");
                if ($(this).is(":checked") && idThis != idThisC && idThisC.startsWith(cboxgh)) {
                    $(this).prop("checked", false);
                }
            });
            $("#shippingCost").html((diachi.length) * 2000);
            $("#tongtien").html((parseInt(giaTienSp) + (diachi.length) * 2000) + " đ");
        }
        if (idThis.startsWith(checkboxTT)) {
            $(":checkbox").each(function() {
                var idThisC = $(this).attr("id");
                if ($(this).is(":checked") && idThis != idThisC && idThisC.startsWith(checkboxTT)) {
                    $(this).prop("checked", false);
                }
            });
        }
    });
    $("#huyThanhToanOnline").click(function(e) {
        location.reload();
    });
    /// noi chon tinh huyen xa 
    $("#selectAddress").click(function(e) {
        var tong;
        var clickAddress = 0;
        $("#contentSelectAddress").slideDown();
        $.ajax({
            type: "get",
            url: linkTuyetDoi + "public/js/diaChi.json",
            dataType: "json",
            success: function(response) {
                tong = response;
                $.each(response, function(indexInArray, valueOfElement) {
                    $("#tentinh").append($('<option>', {
                        value: valueOfElement.name,
                        text: valueOfElement.name
                    }));
                });
            }
        });
        $("select").change(function(e) {
            var typeId = $(this).attr("id");
            if (typeId == "tentinh") {
                var tentinh = this.value;
                $("#tenhuyen").html("");
                $.each(tong, function(indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function(indexInArray, valueOfElement1) {
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
                $.each(tong, function(indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function(indexInArray, valueOfElement1) {
                            if (valueOfElement1.name == tenhuyen) {
                                $.each(valueOfElement1.wards, function(indexInArray, valueOfElement2) {
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
    $("select").click(function(e) {
        var tong;
        var clickAddress = 0;
        $("#contentSelectAddress").slideDown();
        $.ajax({
            type: "get",
            url: linkTuyetDoi + "public/js/diaChi.json",
            dataType: "json",
            success: function(response) {
                tong = response;
                $.each(response, function(indexInArray, valueOfElement) {
                    $("#tentinh").append($('<option>', {
                        value: valueOfElement.name,
                        text: valueOfElement.name
                    }));
                });
            }
        });
        $("select").change(function(e) {
            var typeId = $(this).attr("id");
            if (typeId == "tentinh") {
                var tentinh = this.value;
                $("#tenhuyen").html("");
                $.each(tong, function(indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function(indexInArray, valueOfElement1) {
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
                $.each(tong, function(indexInArray, valueOfElement) {
                    if (valueOfElement.name == tentinh) {
                        $.each(valueOfElement.districts, function(indexInArray, valueOfElement1) {
                            if (valueOfElement1.name == tenhuyen) {
                                $.each(valueOfElement1.wards, function(indexInArray, valueOfElement2) {
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
    $("#danhgia").click(function(e) {
        if (checkLogin()) {
            var spanOf = "spanOf";
            var masp = "";
            $("span").each(function() {
                var idThis = $(this).attr("id");
                if (idThis && idThis.startsWith(spanOf)) {
                    masp = idThis.slice(spanOf.length, idThis.length);
                }
            });
            if (checkSell(masp)) {
                var inputDanhgia = $("#inputDanhgia").val();
                if (inputDanhgia != "") {
                    if (danhgia(sosaodanhgia, inputDanhgia, masp)) {
                        alert("cảm ơn bạn đã đánh giá ^_^ ");
                        location.reload();
                    } else {
                        alert("đánh giá thất bại")
                    }
                } else {
                    alert("bạn chưa nhập nội dung...");
                }
            } else {
                alert("Quý Khách Chưa Nhận Được Sản Phẩm Này ^_^ !!!");
            }
        } else {
            location.replace(linkTuyetDoi + "dndk");
        }
    });
    $("button").click(function(e) {
        var saodanhgiaUp = "saodanhgiaUp";
        var saodanhgiaDown = "saodanhgiaDown";
        idThis = $(this).attr("id");
        if (idThis == saodanhgiaUp) {
            if (sosaodanhgia < 5) {
                sosaodanhgia = sosaodanhgia + 1;
                $(".contenRating").append(" <i class='ion-android-star' id='sao" + sosaodanhgia + "'></i>");
            }
        }
        if (idThis == saodanhgiaDown) {
            if (sosaodanhgia > 0) {
                $("#sao" + sosaodanhgia).remove();
                sosaodanhgia = sosaodanhgia - 1;
            }
        }
    });
    // ==> danh gia nhan vien 
    $("body").on("click", "button", function(e) {
        var idThis = $(this).attr("id");
        var saodanhgia_NhanVienDown = "saodanhgia_NhanVienDown";
        var saodanhgia_NhanVienUp = "saodanhgia_NhanVienUp";
        var nodungdanhgiaNV = "nodungdanhgiaNV";
        if (idThis.startsWith(saodanhgia_NhanVienUp)) {
            var mahoadon = idThis.slice(saodanhgia_NhanVienUp.length, idThis.length);
            var sosaodanhgia = $("#" + nodungdanhgiaNV + mahoadon).html();
            sosaodanhgia = parseInt(sosaodanhgia) + 1;
            if (sosaodanhgia <= 5) {
                $("#" + nodungdanhgiaNV + mahoadon).html(sosaodanhgia);
                danhGiaVeNhanVien(mahoadon, sosaodanhgia);
            }
        }
        if (idThis.startsWith(saodanhgia_NhanVienDown)) {
            var mahoadon = idThis.slice(saodanhgia_NhanVienDown.length, idThis.length);
            var sosaodanhgia = $("#" + nodungdanhgiaNV + mahoadon).html();
            sosaodanhgia = parseInt(sosaodanhgia) - 1;
            if (sosaodanhgia >= 1) {
                $("#" + nodungdanhgiaNV + mahoadon).html(sosaodanhgia);
                danhGiaVeNhanVien(mahoadon, sosaodanhgia);
            }
        }
    });
    // ==> upload
    $("#test1").click(function(e) {
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file11', files);
        $.ajax({
            url: linkTuyetDoi + "ajax/uploadfile",
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
                // alert(response);
                if (response != 0) {
                    alert('file uploaded');
                } else {
                    alert('file not uploaded');
                }
            },
        });
    });
    // ==> gui mail 
    $("#sendMail").click(function(e) {
        var diachigui = $("#diachimail").val();
        var tieude = $("#tieude").val();
        var bodyconten = $("#noidung").val();
        var linkanh = uploadImg();
        $.ajax({
            type: "post",
            url: "./ajax/GuiMail",
            data: {
                tieude: tieude,
                diachigui: diachigui,
                bodyconten: bodyconten,
                linkanh: linkanh
            },
            success: function(response) {
                // alert(response);
            }
        });

    });
    // ==> quen mat khau 
    $("#guiMatKhauMoi").click(function(e) {
        var diachigui = $("#email_in_key").val();
        var tendangnhap = $("#ten_dang_nhap_key").val();
        if (checkAcountAndEmail(tendangnhap, diachigui)) {
            alert("Mail Đang Được Gửi Đi");
            if (guiKeyXacNhan(diachigui, tendangnhap)) {
                alert("Đã Gửi Mail Bạn Vui Lòng Kiểm Tra Mail");
                $("#box_quenMatKhau").slideUp();
                $("#box_doipass").slideDown();
            } else {
                alert("Gửi Mail Thất Bại");
            }
        } else {
            alert("Tên Đăng Nhập Hoặc Email Không Đúng !!!");
        }
    });
    $("#doimatkhau_reset").click(function(e) {
        var tendangnhap = $("#ten_dang_nhap_key").val();
        var keyxacnhan = $("#key_reset").val();
        var diachigui = $("#email_in_key").val();
        var matkhau = $("#matkhau_DK").val();
        var nhaplaimatkhau = $("#rematkhau_DK").val();
        if (checkKey(diachigui, keyxacnhan, tendangnhap)) {
            if (checkStrongPass(matkhau)) {
                if (comparePassword(matkhau, nhaplaimatkhau)) {
                    if (updatePasswordReset(tendangnhap, matkhau)) {
                        alert("Đã Cập Nhật Mật Khẩu Mới");
                        location.replace("/www/dndk");
                    } else {
                        alert("Cập Nhật Mật Khẩu Thất Bại");
                    }
                } else {
                    alert("Lỗi Trên Màn Hình");
                }
            } else {
                alert("Lỗi Trên Màn Hình");
            }
        } else {
            alert("Key Không Đúng Hoặc Quá Hạn");
        }
    });
    // tesst
    $("#test").click(function(e) {});
    // ==> XEM chi tiet hoa don
    $("body").on("click", "button", function() {
        var btn_chitetHD = "btn_chitetHD";
        var idThis = $(this).attr("id");
        if (idThis.startsWith(btn_chitetHD)) {
            var mahoadon = idThis.slice(btn_chitetHD.length, idThis.length);
            $("#contentMain").slideUp();
            $("#contentHidden").html(showDetailBill(mahoadon));
            $("#contentHidden").slideDown();
        }

    });
    $("body").on("click", "a", function() {
        var idThis = $(this).attr("id");
        if (idThis.startsWith("back_contentMain")) {
            $("#contentMain").slideDown();
            $("#contentHidden").slideUp();
        }
    });
    // ==> Tim kiem 
    $("#startSearch").click(function(e) {
        var ndtimkiem = $("#whatSearch").val();
        location.assign(linkTuyetDoi + "timkiem/" + ndtimkiem);
    });
    $("#startSearch_dt").click(function(e) {
        var ndtimkiem = $("#whatSearch").val();
        location.assign(linkTuyetDoi + "timkiem/" + ndtimkiem);
    });
    var solanclickXemthemSanPham = 2;
    var gioihanxuathien = 6;
    var option = 5;
    $("body").on("click", "button", function(e) {
        var idThis = $(this).attr("id");
        if (idThis.startsWith("xemThemSanPham")) {
            var ndtimkiem = $("#params").html();
            var batdau = gioihanxuathien * (solanclickXemthemSanPham - 1);
            solanclickXemthemSanPham = solanclickXemthemSanPham + 1;
            var data = getThemProductPT(ndtimkiem, batdau, gioihanxuathien, option);
            $("#addViewProduct").append(data);
        }
    });
    $("select").change(function(e) {
        var idThis = $(this).attr("id");
        var sapxep = "sapxep";
        if (idThis.startsWith("sapxep")) {
            ndtimkiem = idThis.slice(sapxep.length, idThis.length);
            option = $(this).val();
            var result = timkiemSapXep(ndtimkiem, 0, gioihanxuathien, option);
            $("#box_nd_timkiem").html(result);
            solanclickXemthemSanPham = 2;
        }
    });
    // ==> chat
    $("#gui").click(function(e) {
        var noidung = $("#ndTN").val();
        if (noidung != "") {
            var result = insertToTN(noidung);
            if (result) {
                var content = "<li class='clearfix'><div class='message-data text-right'><span class='message-data-time'>" + result + "</span></div><div class='message other-message float-right'>" + noidung + "</div></li>";
                $("#dstn").append(content);
                $("#ndTN").val("");
                $("#lastTime").html(result);
            }
        }
    });
    setInterval(() => {
        if (checkLogin()) {
            var lastTime = $("#lastTime").html();
            var result = check_newMess(lastTime);
            if (result && lastTime) {
                $("#lastTime").remove();
                $("#dstn").append(result);
            }
        }
    }, 1000);
    // functio support
    function timkiemSapXep(ndtimkiem, batdau, gioihanhienthi, option) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/timkiemSapXep",
            data: {
                ndtimkiem: ndtimkiem,
                batdau: batdau,
                gioihanhienthi: gioihanhienthi,
                option: option
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function insertToTN(noidung) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/chat",
            data: {
                noidung: noidung
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function check_newMess(thoigiannhan) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            data: { thoigiannhan: thoigiannhan },
            url: linkTuyetDoi + "ajax/check_newMess",
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function getThemProductPT(ndtimkiem, batdau, gioihanhienthi, option) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/getThemProductPT",
            data: {
                ndtimkiem: ndtimkiem,
                batdau: batdau,
                gioihanhienthi: gioihanhienthi,
                option: option
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function getThongTinDonHangInThanhToan() {
        var idAddress = "";
        var ndhinhthuc = "";
        var cboxgh = "cboxgh";
        var checkboxTT = "checkboxTT";
        var idTT = "";
        $(":checkbox").each(function() {
            var idThis = $(this).attr("id");
            if ($(this).is(":checked") && idThis.startsWith(cboxgh)) {
                idAddress = $(this).attr("id");
                idAddress = idAddress.slice(cboxgh.length, idAddress.length);
            }
            if ($(this).is(":checked") && idThis.startsWith(checkboxTT)) {
                idTT = $(this).attr("id");
                idTT = idTT.slice(checkboxTT.length, idTT.length);
            }
        });
        if (idAddress != "" && idTT != "") {
            var arr = [];
            var diachigiaohang = $("#spanOfAddress" + idAddress).html();
            var phiship = (diachigiaohang.length) * 2000;
            var sdtgh = $("#spanOfNumberPhone" + idAddress).html();
            $("span").each(function() {
                var idSpan = $(this).attr("id");
                var soluongsp = "soluongsp";
                if (idSpan && idSpan.startsWith(soluongsp)) {
                    var masp = idSpan.slice(soluongsp.length, idSpan.length);
                    var soluong = $("#" + idSpan).html();
                    var text = { "masp": masp, "soluong": soluong };
                    arr.push(text);
                }
            });
            const result = [diachigiaohang, arr, sdtgh, phiship, idTT];
            return result;
        } else {
            return false;
        }

    }

    function showDetailBill(mahoadon) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/callBillDetail",
            data: {
                mahoadon: mahoadon
            },
            success: function(response) {
                // alert(response);
                result = response;
            }
        });
        return result;
    }

    function uploadImg() {
        var fd = new FormData();
        var files = $('#linkduongdananh')[0].files[0];
        fd.append('file', files);
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/uploadfile",
            type: 'post',
            async: false,
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
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
            success: function(response) {
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

    function checkEmailFormat(email) {
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if (pattern.test(email)) {
            return true;
        } else {
            return false;
        }
    }

    function dangky(tendangnhap, matkhau, email, quyen) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/dangky",
            data: {
                tendangnhap: tendangnhap,
                matkhau: matkhau,
                email: email,
                quyen: quyen
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function dangNhap(tendangnhap, matkhau) {
        if (tendangnhap == "" || matkhau == "") {
            alert("Quý Khách Vui Lòng Nhập Đầy Đủ Thông Tin");
        } else {
            $.post("./ajax/dangnhap", { tendangnhap: tendangnhap, matkhau: matkhau }, function(data) {
                if (data) {
                    location.assign("./taikhoan");
                } else {
                    alert("Tên Đăng Nhập Hoặc Mật Khẩu Không Đúng");
                }
            });
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
            success: function(response) {
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
            success: function(response) {
                if (response) {
                    alert("Đổi Mật Khẩu Thành Công");
                    location.reload();
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
            success: function(response) {
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
            success: function(response) {
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
                updateScreenSoLuongTrongGioHang(getSoLuongTrongGioHang());
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
            success: function(response) {
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
            success: function(response) {
                // alert(response);
            }
        });
    }

    function getSoLuongTrongGioHang() {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/getSoLuongTrongGioHang",
            data: {

            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function updateScreenSoLuongTrongGioHang(option) {
        $("#soluongtronggiohang").html(option);
        $("#soluongtronggiohang_dt").html(option);
    }

    function getSessionSoLuongTrongGioHang() {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/getSecSionSoLuongTrongGioHang",
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function deleteInDetailCart(masp) {
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/deleteInDetailCart",
            data: {
                masp: masp
            },
            success: function(response) {
                // alert(response);
            }
        });
    }

    function insertAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet, sodienthoaigh) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/insertAddressShipping",
            data: {
                tentinh: tentinh,
                tenhuyen: tenhuyen,
                tenxa: tenxa,
                diachichitiet: diachichitiet,
                sodienthoaigh: sodienthoaigh
            },
            // dataType: "dataType",
            success: function(response) {
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
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function editAddressShipping(tentinh, tenhuyen, tenxa, diachichitiet, madiachigiaohang, sodienthoaigh) {
        alert(tentinh + "-" + tenhuyen + "-" + tenxa + "-" + diachichitiet + "-" + sodienthoaigh);
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
                sodienthoaigh: sodienthoaigh,
                madiachigiaohang: madiachigiaohang
            },
            success: function(response) {
                result = response
            }
        });
        return result;
    }

    function tienHanhthanhToan(arrTT) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/thanhtoan",
            data: {
                diachigiaohang: arrTT[0],
                arr: arrTT[1],
                sodienthoaigh: arrTT[2],
                phiship: arrTT[3],
                hinhthucthanhtoan: arrTT[4]
            },
            success: function(response) {
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
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function danhgia(sosaodanhgiaa, inputDanhgia, masp) {
        var result = 0;
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/danhgia",
            data: {
                sosaodanhgia: sosaodanhgiaa,
                inputDanhgia: inputDanhgia,
                masp: masp
            },
            // dataType: "dataType",
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function setProductToPayment(arr) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/setProductToPayment",
            data: { arr: arr },
            // dataType: "dataType",
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function danhGiaVeNhanVien(mahd, danhgiacuakhachhang) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/danhGiaVeNhanVien",
            data: {
                mahd: mahd,
                danhgiacuakhachhang: danhgiacuakhachhang,
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function guiKeyXacNhan(diachigui, tendangnhap) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/guiKeyXacNhan",
            data: {
                diachigui: diachigui,
                tendangnhap: tendangnhap
            },
            success: function(response) {
                // alert(response);
                result = response;
            }
        });
        return result;
    }

    function checkKey(diachigui, keyxacnhan, tendangnhap) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/checkKey",
            data: {
                diachigui: diachigui,
                keyxacnhan: keyxacnhan,
                tendangnhap: tendangnhap
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function checkAcountAndEmail(tendangnhap, diachigui) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/checkAcountAndEmail",
            data: {
                diachigui: diachigui,
                tendangnhap: tendangnhap
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function updatePasswordReset(tendangnhap, matkhau) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/updatePasswordReset",
            data: {
                tendangnhap: tendangnhap,
                matkhau: matkhau
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }
});