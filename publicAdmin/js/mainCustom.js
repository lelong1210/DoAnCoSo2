$(document).ready(function () {
    $("#calendarCustom").click(function (e) { 
        $.ajax({
            type: "post",
            url: "./pageAdmin/calendarpage",
            data: {},
            // dataType: "json",
            success: function (response) {
               $("#content-page").html(response);
            }
        });
    });
});