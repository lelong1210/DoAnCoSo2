<?php
class dndk extends controller{
    function __construct(){
        if(isset($_SESSION["username"])){
            header("Location:/www/taikhoan");
        }
    }
    function show(){
        $model = $this->call_model("taikhoanModel");
        $this->call_view("dangKyDangNhapView",[
            "taikhoanModel"=>$model
        ]);
    }
}
?>