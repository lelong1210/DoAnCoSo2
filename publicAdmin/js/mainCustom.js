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
});