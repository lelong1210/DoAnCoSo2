<?php 
class mayhutbui extends controller{
    function show($params){
        if($params == "overView" || $params == ""){
            $productModel = $this->call_model("productModel");
            $title = "overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"nameClass"=>"mayhutbui"]);
        }else{
            $productModel = $this->call_model("productModel");
            $title = "!overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"params"=>$params]);            
        }
    } 
}
?>