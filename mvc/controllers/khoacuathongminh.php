<?php
class khoacuathongminh extends controller{
    function show($params){
        if($params == "overView" || $params == ""){
            $productModel = $this->call_model("productModel");
            $homeModel = $this->call_model("homeModel");
            $title = "overView";
            $this->call_view("productView",["productModel"=>$productModel,"homeModel"=>$homeModel,"title"=>$title,"nameClass"=>"khoacuathongminh"]);
        }else{
            $productModel = $this->call_model("productModel");
            $title = "!overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"params"=>$params]);            
        }
    } 
}
?>