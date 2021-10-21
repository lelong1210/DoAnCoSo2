<?php 
class khachhang extends controller{
    function show(){
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("khachhangView",[
            "taikhoanModel"=>$taikhoanModel
        ]);
    }
}
?>