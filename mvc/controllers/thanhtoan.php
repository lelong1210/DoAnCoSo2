<?php 
class thanhtoan extends controller{
    function show(){
        $arrThanhToan = $_SESSION["thanhtoan"];
        $productModel = $this->call_model("productModel");
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("thanhtoanView",[
            "productModel"=>$productModel,
            "taikhoanModel"=>$taikhoanModel
        ]);
    }
}
?>