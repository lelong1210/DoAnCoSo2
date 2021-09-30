<?php
class controller{
    function call_model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    function call_view($view,$data=[]){
        require_once "./mvc/views/".$view.".php";
    }
}
?>