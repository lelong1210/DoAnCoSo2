<?php 
class thanhtoan extends controller{
    function show(){
        $arrThanhToan = $_SESSION["thanhtoan"];
        $productModel = $this->call_model("productModel");
        $this->call_view("thanhtoanView",[
            "productModel"=>$productModel
        ]);
    }
}
?>