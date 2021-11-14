<?php
class hoidap extends controller{
    function __construct(){
        $this->check_user_quyen(0);    
    }
    function show(){
        $model = $this->call_model("chatModel");
        $this->call_view("chatView",[
            "chatModel"=>$model
        ]);
    }
}
?>