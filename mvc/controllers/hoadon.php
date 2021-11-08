<?php 
class hoadon extends controller{
    function __construct(){
        $this->check_user_quyen(0);
    }
    function show(){
        $model = $this->call_model("taikhoanModel");
        $this->call_view("hoadonView",[
            "taikhoanModel"=>$model
        ]);
    }
}
?>