$(document).ready(function () {
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
    $("#uploadfile").click(function (e) { 
        alert("xin chao");
    });
});