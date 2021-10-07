<?php
class khoacuathongminh extends controller{
    function show($params){
        if($params == "overView" || $params == ""){
            $khoacuathongminhmodel = $this->call_model("khoacuathongminhModel");
            $title = "overView";
            $this->call_view("productView",["khoacuaModel"=>$khoacuathongminhmodel,"title"=>$title]);
        }else{
            $khoacuathongminhmodel = $this->call_model("khoacuathongminhModel");
            $title = "!overView";
            $this->call_view("productView",["khoacuaModel"=>$khoacuathongminhmodel,"title"=>$title]);            
        }
    }   
}
?>