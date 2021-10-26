<?php 
class khachhang extends controller{
    function __construct(){
        $this->check_user_quyen(0);
    }
    function show(){
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("khachhangView",[
            "taikhoanModel"=>$taikhoanModel,
            "option"=>0
        ]);
    }
    function suadiachigiaohang($params){
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("khachhangView",[
            "taikhoanModel"=>$taikhoanModel,
            "madiachigiaohang"=>$params,
            "option"=>1
        ]);
    }
}
?>