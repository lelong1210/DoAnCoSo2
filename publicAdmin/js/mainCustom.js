$(document).ready(function () {
    // link tuyet doi 
    var linkTuyetDoi = "http://localhost/www/";
    //
    $("#calendarCustom").click(function (e) { 
        $.ajax({
            type: "post",
            url: "pageAdmin/calenderPage",
            data: {},
            // dataType: "dataType",
            success: function (response) {
                $("#contetMain").html(response);
                // alert("hello");
            }
        });
    });
    $("#themsanphamLeftSlideBar").click(function (e) { 
        $.ajax({
            type: "post",
            url: "pageAdmin/addProductPage",
            data: {},
            // dataType: "dataType",
            success: function (response) {
                $("#contetMain").html(response);
                // alert("hello");
            }
        });
    });
    $("#addProduct").click(function (e) { 
        var tensp = $("#tensanpham").val();
        var giatien = $("#giatien").val();
        var loaisanpham  = $("#loaisanpham").val();
        var motasanpham = $("#motasanpham").val();
        var hangsanxuat = $("#hangsanxuat").val()
        var dunglamslider = $("#dunglamslider").val();
        var soluong = $("#soluong").val();
        if(tensp != "" && giatien != "" && loaisanpham != "" && motasanpham != "" && hangsanxuat != "" && dunglamslider !="" && soluong != "" && $("#linkduongdananh").val() != ""){
            var linkduongdananh = uploadImg();
            if(AddProduct(tensp,giatien,loaisanpham,motasanpham,linkduongdananh,hangsanxuat,dunglamslider,soluong)){
                alert("đã thêm sản phẩm");
            }else{
                alert("thêm sant phẩm thất bại")
            }
        }else{
            alert("các ô không được để trống !!! ");
        }
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
    function AddProduct(tensp,giatien,loaisanpham,motasanpham,linkduongdananh,hangsanxuat,dunglamslider,soluong){
        var result = "";
        $.ajax({
            url: linkTuyetDoi+"ajax/addProduct",
            type: 'post',
            async:false,
            data: {tensp:tensp,
                giatien:giatien,
                loaisanpham:loaisanpham,
                motasanpham:motasanpham,
                linkduongdananh:linkduongdananh,
                hangsanxuat:hangsanxuat,
                dunglamslider:dunglamslider,
                soluong:soluong},
            success: function(response){
                result = response;
            },
        });
        return result;
    }
});