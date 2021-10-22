<?php
class giohang extends controller{
    function show(){
        $model = $this->call_model("productModel");
        $this->call_view("giohangView",[
            "model"=>$model
        ]);
    }
}
?>