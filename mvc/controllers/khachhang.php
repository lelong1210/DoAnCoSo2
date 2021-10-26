<?php 
class khachhang extends controller{
    function __construct(){
        $this->check_user_quyen(0);
    }
    function show(){
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("khachhangView",[
            "taikhoanModel"=>$taikhoanModel
        ]);
    }
    function suadiachigiaohang(){
        echo "heloo";
    }
}
?>