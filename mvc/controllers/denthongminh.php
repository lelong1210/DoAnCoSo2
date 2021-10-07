<?php
class denthongminh extends controller{
    function show($params){
        if($params == "overView" || $params == ""){
            $productModel = $this->call_model("productModel");
            $title = "overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"nameClass"=>"denthongminh"]);
        }else{
            $productModel = $this->call_model("productModel");
            $title = "!overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"params"=>$params]);            
        }
    } 
}
?>