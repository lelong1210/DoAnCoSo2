<?php 
class timkiem extends controller{
    function show($params){
        $model = $this->call_model("homeModel");
        $productModel = $this->call_model("productModel");
        $this->call_view("timkiemView",[
            "homeModel"=>$model,
            "params"=>$params,
            "productModel"=>$productModel
        ]);
    }
}
?>