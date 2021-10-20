$(document).ready(function () {
    $("#calendarCustom").on("click", function () {
        $.ajax({
            type: "post",
            url: "pageAdmin/calenderPage",
            data: {},
            // dataType: "dataType",
            success: function (response) {
                $("#content-page").html(response);
                // alert("hello");
            }
        });
    });
});