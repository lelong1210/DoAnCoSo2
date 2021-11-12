<?php
class home extends controller{
    function show($hello){
        $taikhoanModel = $this->call_model("taikhoanModel");
        $model = $this->call_model("homeModel");
        $this->call_view("homeView",[
            "homeModel"=>$model,
            "taikhoanModel"=>$taikhoanModel
        ]);
        // hehe hehe hee
    }
}
?>