$(document).ready(function () {
    // link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    //
    $("#addProduct").click(function (e) {
        var tensp = $("#tensanpham").val();
        var giatien = $("#giatien").val();
        var loaisanpham = $("#loaisanpham").val();
        var motasanpham = $("#motasanpham").val();
        var hangsanxuat = $("#hangsanxuat").val()
        var dunglamslider = $("#dunglamslider").val();
        var soluong = $("#soluong").val();
        if (tensp != "" && giatien != "" && loaisanpham != "" && motasanpham != "" && hangsanxuat != "" && dunglamslider != "" && soluong != "" && $("#linkduongdananh").val() != "") {
            var linkduongdananh = uploadImg();
            if (AddProduct(tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong)) {
                alert("đã thêm sản phẩm");
            } else {
                alert("thêm sant phẩm thất bại")
            }
        } else {
            alert("các ô không được để trống !!! ");
        }
    });
    $('#datatable-buttons').on('click', '.btn-edit', function () {
        var $row = $(this).closest("tr");    // Find the row
        var $tds = $row.find("td");
        const arr = [];
        // ===> 
        $.each($tds, function () {
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
    $('#datatable-buttons').on('click', '.btn-delete', function () {
        var $row = $(this).closest("tr");    // Find the row
        var $tds = $row.find("td");
        const arr = [];
        // ===> 
        $.each($tds, function () {
            arr.push($(this).text());
        });
        // ===> 

        if(deleteProduct(arr[0])){
            alert("đã xóa");
        }
        
        // xoa giao dien
        var $row = $(this).closest("tr");
        $($row).remove();
    });
    $("#btn_back").click(function (e) {
        $(".table_overView").slideDown();
        $(".model_overviewProduct").slideUp();

    });
    $("#linkduongdananh").change(function (e) {
        readURL(this)
    });
    $("#edit_Product").click(function (e) {
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
                if (updateProduct(masp , tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong)) {
                    alert("đã cập nhật sản phẩm");
                } else {
                    alert("cập nhật sản phẩm thất bại")
                }
            } else {
                var linkduongdananh = "";
                if (updateProduct(masp , tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong)) {
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
    // function support 
    // function mượn
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    // kết thúc function mượn 
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
            success: function (response) {
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
            success: function (response) {
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
            success: function (response) {
                result = response;
            }
        });
        return result;
    }
    function updateProduct(masp, tensp, giatien, loaisanpham, motasanpham, linkduongdananh, hangsanxuat, dunglamslider, soluong){
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/updateProduct",
            type: 'post',
            async: false,
            data: {
                masp:masp,
                tensp: tensp,
                giatien: giatien,
                loaisanpham: loaisanpham,
                motasanpham: motasanpham,
                linkduongdananh: linkduongdananh,
                hangsanxuat: hangsanxuat,
                dunglamslider: dunglamslider,
                soluong: soluong
            },
            success: function (response) {
                result = response;
            },
        });
        return result;
    }
    function deleteProduct(masp){
        var result = "";
        $.ajax({
            url: linkTuyetDoi + "ajax/deleteProduct",
            type: 'post',
            async: false,
            data: {masp:masp},
            success: function (response) {
                result = response;
            },
        });
        return result;
    }
});