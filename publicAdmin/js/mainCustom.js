$(document).ready(function() {
    // link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    //san pham
    $("#addProduct").click(function(e) {
        var tensp = $("#tensanpham_add").val();
        var giatien = $("#giatien_add").val();
        var loaisanpham = $("#loaisanpham_add").val();
        var motasanpham = $("#motasanpham_add").val();
        var hangsanxuat = $("#hangsanxuat_add").val()
        var dunglamslider = $("#dunglamslider_add").val();
        var soluong = $("#soluong_add").val();
        if (tensp != "" && giatien != "" && loaisanpham != "" && motasanpham != "" && hangsanxuat != "" && dunglamslider != "" && soluong != "" && $("#linkduongdananh_add").val() != "") {
            var linkduongdananh = uploadImgAdd();
            if (AddProduct(tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong)) {
                alert("đã thêm sản phẩm");
                location.reload();
            } else {
                alert("thêm sant phẩm thất bại")
            }
        } else {
            alert("các ô không được để trống !!! ");
        }
    });
    $('#datatable-buttons').on('click', '.btn-edit', function() {
        var $row = $(this).closest("tr"); // Find the row
        var $tds = $row.find("td");
        const arr = [];
        // ===> 
        $.each($tds, function() {
            arr.push($(this).text());
        });
        // ==> 

        var txt = getProduct(arr[0]);
        const obj = JSON.parse(txt);

        $("#masp_edit").html(obj[0].masp);
        $("#tensanpham").val(obj[0].tensp);
        $("#giatien").val(obj[0].giatien);
        $("#loaisanpham").val(obj[0].loaisanpham);
        $("#motasanpham").val(obj[0].motasanpham);
        $("#hangsanxuat").val(obj[0].hangsx);
        $('#blah').attr('src', obj[0].linkduongdananh);
        $("#dunglamslider").val(obj[0].dunglamslider);
        $("#soluong").val(obj[0].soluongsp);
        $(".table_overView").slideUp();
        $(".model_overviewProduct").slideDown();
    });
    $('#datatable-buttons').on('click', '.btn-delete', function() {
        var $row = $(this).closest("tr"); // Find the row
        var $tds = $row.find("td");
        const arr = [];
        // ===> 
        $.each($tds, function() {
            arr.push($(this).text());
        });
        // ===> 

        if (deleteProduct(arr[0])) {
            alert("đã xóa");
        }

        // xoa giao dien
        var $row = $(this).closest("tr");
        $($row).remove();
    });
    $("#btn_back").click(function(e) {
        $(".table_overView").slideDown();
        $(".model_overviewProduct").slideUp();

    });
    $("#linkduongdananh").change(function(e) {
        readURL(this)
    });
    $("#linkduongdananh_add").change(function(e) {
        readURL_add(this)
    });
    $("#edit_Product").click(function(e) {
        var masp = $("#masp_edit").html();
        var tensp = $("#tensanpham").val();
        var giatien = $("#giatien").val();
        var loaisanpham = $("#loaisanpham").val();
        var motasanpham = $("#motasanpham").val();
        var hangsanxuat = $("#hangsanxuat").val()
        var dunglamslider = $("#dunglamslider").val();
        var soluong = $("#soluong").val();
        if (tensp != "" && giatien != "" && loaisanpham != "" && motasanpham != "" && hangsanxuat != "" && dunglamslider != "" && soluong != "") {
            if ($("#linkduongdananh").val() != "") {
                var linkduongdananh = uploadImg();
                if (updateProduct(masp, tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong)) {
                    alert("đã cập nhật sản phẩm");
                } else {
                    alert("cập nhật sản phẩm thất bại")
                }
            } else {
                var linkduongdananh = "";
                if (updateProduct(masp, tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong)) {
                    alert("đã cập nhật sản phẩm");
                } else {
                    alert("cập nhật sản phẩm thất bại")
                }
            }
            location.reload();
        } else {
            alert("các ô không được để trống !!! ");
        }
    });
    $("#btn_delete").click(function(e) {
        $("#content_page").html(appendTableProduct());
    });
    //
    function appendTableProduct() {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/appendTableProduct",
            // data: "data",
            // dataType: "dataType",
            success: function(response) {
                result = response;
            }
        });
        return result;
    }
    // user 
    $("#addUser").click(function(e) {
        var tendangnhap = $("#tendangnhap").val();
        var matkhau = $("#matkhau").val();
        var nhaplaimatkhau = $("#nhaplaimatkhau").val();
        var email = $("#email").val();
        var quyen = $("#quyen").val();
        if (tendangnhap != "" && matkhau != "" && nhaplaimatkhau != "" && email != "") {
            if (!checkAcount(tendangnhap)) {
                if (checkStrongPass(matkhau)) {
                    if (comparePassword(matkhau, nhaplaimatkhau)) {
                        if (checkEmailFormat(email)) {
                            if (dangky(tendangnhap, matkhau, email, quyen)) {
                                alert("Đã Thêm Người Dùng");
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
    // user admin 
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
    // chat 
    $("body").on("click", "li", function(e) {
        var list_chat = "list_chat";
        var idThis = $(this).attr("id");
        if (idThis.startsWith(list_chat)) {
            var matinnhan = idThis.slice(list_chat.length, idThis.length);
            var result = getContentMess(matinnhan);
            $("#content_chat_box").html(result);
        }
    });
    $("body").on("click", "button", function(e) {
        var btnSend = "btnSend";
        var idThis = $(this).attr("id");
        if (idThis.startsWith(btnSend)) {
            var matinnhan = idThis.slice(btnSend.length, idThis.length);
            var noidung = $("#ndSend").val();
            var result = insertToTN(noidung, matinnhan);
            if (result) {
                $("#ndSend").val("");
                $("#lastTime").remove();
                $("#ul_chat_box").append(result);
            }
        }
    });
    setInterval(() => {
        var lastTime = $("#lastTime").html();
        var matinnhan = $("#matinnhan").html();
        if (lastTime) {
            var result = check_newMess_admin(matinnhan, lastTime);
            if (result) {
                $("#lastTime").remove();
                $("#ul_chat_box").append(result);
            }
        }
    }, 1000);
    $("body").on("click", "button", function(e) {
        // var idThis = $(this).attr("id");
        var timkiemUser = "timkiemUser";
        var ids = "list_chat0";
        $("li").each(function(param) {
            idThis = $(this).attr("id");
            if (idThis == ids) {
                alert($(this).attr("id"));
                $(this).remove();
            }
        });

    });
    setInterval(() => {
        var lidaudanhsach = $("#firtLi").html();
        var result = getMessLastAdmin(lidaudanhsach);
        if (result && lidaudanhsach) {
            $("#dsChat").html(result);
        }
    }, 1000);
    // function support 
    // function mượn
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL_add(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah_add').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    // kết thúc function mượn 
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

    function getMessLastAdmin(lidaudanhsach) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/getMessLastAdmin",
            data: {
                lidaudanhsach: lidaudanhsach
            },
            success: function(response) {
                result = response;
            }
        });
        return result;

    }

    function check_newMess_admin(matinnhan, thoigiannhan) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/check_newMess_admin",
            data: {
                matinnhan: matinnhan,
                thoigiannhan: thoigiannhan
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function insertToTN(noidung, matinnhan) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/chatAdmin",
            data: {
                noidung: noidung,
                matinnhan: matinnhan
            },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function getContentMess(matinnhan) {
        var result = "";
        $.ajax({
            type: "post",
            async: false,
            url: linkTuyetDoi + "ajax/getContentMess",
            data: { matinnhan: matinnhan },
            success: function(response) {
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
            }
        });
        return result;
    }

    function uploadImgAdd() {
        var fd = new FormData();
        var files = $('#linkduongdananh_add')[0].files[0];
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
            }
        });
        return result;
    }

    function AddProduct(tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong) {
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/addProduct",
            type: 'post',
            async: false,
            data: {
                tensp: tensp,
                giatien: giatien,
                loaisanpham: loaisanpham,
                motasanpham: motasanpham,
                linkduongdananh: linkduongdananh,
                hangsanxuat: hangsanxuat,
                dunglamslider: dunglamslider,
                soluong: soluong
            },
            success: function(response) {
                result = response;
            },
        });
        return result;
    }

    function getProduct(masp) {
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/selectProductWhereMasp",
            type: 'post',
            async: false,
            data: { masp: masp },
            success: function(response) {
                result = response;
            }
        });
        return result;
    }

    function updateProduct(masp, tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong) {
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/updateProduct",
            type: 'post',
            async: false,
            data: {
                masp: masp,
                tensp: tensp,
                giatien: giatien,
                loaisanpham: loaisanpham,
                motasanpham: motasanpham,
                linkduongdananh: linkduongdananh,
                hangsanxuat: hangsanxuat,
                dunglamslider: dunglamslider,
                soluong: soluong
            },
            success: function(response) {
                result = response;
            },
        });
        return result;
    }

    function deleteProduct(masp) {
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/deleteProduct",
            type: 'post',
            async: false,
            data: { masp: masp },
            success: function(response) {
                result = response;
            },
        });
        return result;
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
});