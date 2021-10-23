<?php
class giohang extends controller{
    function __construct(){
        $this->check_user_quyen(0);
    }
    function show(){
        $model = $this->call_model("productModel");
        $this->call_view("giohangView",[
            "model"=>$model
        ]);
    }
}
?>