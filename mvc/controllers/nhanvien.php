<?php
class nhanvien extends controller{
    function __construct(){
        $this->check_user_quyen(2);
    }
    function show(){
        $this->call_view("nhanVienView");
    }
    function congviecmoi(){
        $model = $this->call_model("nhanvienModel");
        $this->call_view("nhanVienView",[
            "title"=>"congviecmoi",
            "nhanVienModel"=>$model
        ]);
    }
}
?> 