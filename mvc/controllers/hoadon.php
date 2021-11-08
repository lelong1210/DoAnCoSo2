<?php 
class hoadon extends controller{
    function show(){
        $model = $this->call_model("taikhoanModel");
        $this->call_view("hoadonView",[
            "taikhoanModel"=>$model
        ]);
    }
}
?>