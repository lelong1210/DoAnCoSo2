<?php
class app{
    protected $controller = "home";
    protected $action = "show";
    protected $params = [];
    protected $typeCall = [];
    function __construct(){
        if(isset($_GET["url"])){
            $arr = $this->UrlProcess();
            // controller
            if(isset($arr[0]) && file_exists("./mvc/controllers/$arr[0].php")){
                $this->controller = $arr[0];
            }unset($arr[0]);
            require_once "./mvc/controllers/$this->controller.php";
            $this->controller = new $this->controller;
            
            
            // action 
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    $this->action = $arr[1];

                }else{
                    $this->params[] = $arr[1];

                }
            }
            unset($arr[1]);
            
            
            // params
            if(isset($arr[2])){
                $arr =  array_values((array)$arr);
                if(isset($this->params[0])){                    
                    $this->params = array_merge($this->params,$arr);
                }else{
                    $this->params = array_values($arr);
                }
                call_user_func_array(array($this->controller,$this->action),$this->params);
            }else{
                if(isset($this->params[0])){                    
                    $this->params = array_merge($this->params,$arr);
                    call_user_func_array(array($this->controller,$this->action),$this->params);
                }else{
                    call_user_func_array(array($this->controller,$this->action),["overView"]);
                }
                
            }
            

       }else{
            require_once "./mvc/controllers/$this->controller.php";
            $this->controller = new $this->controller;
            call_user_func_array(array($this->controller,$this->action),["overView"]);
       }
    }
    function UrlProcess(){
        return explode("/",htmlspecialchars($_GET["url"]));
    }
}
?>