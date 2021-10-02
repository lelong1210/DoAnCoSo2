<?php
class home extends controller{
    function show($hello){
        $model = $this->call_model("homeModel");
        $this->call_view("homeView",["homeModel"=>$model]);
        // 
    }
}
?>