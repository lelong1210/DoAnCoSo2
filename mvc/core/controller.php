<?php
class controller{
    function call_model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    function call_view($view,$data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    function call_view_page_admin($viewPage){
        require_once "./mvc/views/pageAdmin/".$viewPage.".php";
    }
    function call_block_view_admin($viewBlock){
        require_once "./mvc/views/blockAdmin/".$viewBlock.".php";
    }
    function check_user_quyen($type){
        if(isset($_SESSION["username"]) && isset($_SESSION["quyen"])){
            if($type == 0){
                if($_SESSION["quyen"] != 0){
                    header("Location:./home");
                }
            }
            if($type == 1){
                if($_SESSION["quyen"] != 1){
                    header("Location:./home");
                }
            }
            if($type == 2){
                if($_SESSION["quyen"] != 2){
                    header("Location:./home");
                }
            }
        }else{
            header("Location:./dndk");
        }
    }
}
?>