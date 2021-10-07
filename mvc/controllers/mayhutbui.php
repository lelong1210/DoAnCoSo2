<?php 
class mayhutbui extends controller{
    function show($params){
        if($params == "overView" || $params == ""){
            $productModel = $this->call_model("productModel");
            $homeModel = $this->call_model("homeModel");
            $title = "overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"homeModel"=>$homeModel,"nameClass"=>"mayhutbui"]);
        }else{
            $productModel = $this->call_model("productModel");
            $title = "!overView";
            $this->call_view("productView",["productModel"=>$productModel,"title"=>$title,"params"=>$params]);            
        }
    } 
}
?>