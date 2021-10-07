/*****************CUSTOM************************/
$(document).ready(function () {
    var click = 0 ;
    $("#drakMode").click(function (e) { 
        if(click == 0){
            $(".gbcus").css({"background-color": "rgba(48, 164, 211, 0.87)"});
            click = 1 ;
        }else{
            $(".gbcus").css({"background-color": "rgba(255,255,255,0.87)"});
            click = 0 ;            
        }
    });
});