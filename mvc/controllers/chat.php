<?php
class chat extends controller{
    function show(){
        $model = $this->call_model("chatModel");
        $this->call_view("chatView",[
            "chatModel"=>$model
        ]);
    }
}
?>