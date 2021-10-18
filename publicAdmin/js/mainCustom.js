$(document).ready(function () {
    $("#calendarCustom").click(function (e) { 
       var pageCalendar  =  "./pageAdmin/calendarpage"; 
       $("#content-page").load(pageCalendar);
    });
});