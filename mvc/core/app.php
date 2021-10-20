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
            $this->controller = new $this->controller;// gọi ra object controller 
            
            
            // action 
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){ // kiểm tra xem method có tồn tại hay không 
                    $this->action = $arr[1]; // ==> gán action 
                }else{
                    $this->params[] = $arr[1]; // ==> gán arr[] thành params
                }
            }
            unset($arr[1]);
            
            
            // params
            if(isset($arr[2])){
                $arr =  array_values((array)$arr); // ép cho dễ nhìn 
                if(isset($this->params[0])){ // xem thử đã gán $arr[0] thành param chưa                     
                    $this->params = array_merge($this->params,$arr); // ==> trộn 2 mảng lại
                }else{
                    $this->params = array_values($arr); // ==> làm mới 
                }
                call_user_func_array(array($this->controller,$this->action),$this->params);// ==> gọi object or class và method 
            }else{
                if(isset($this->params[0])){ // xem thử đã gán $arr[0] thành param chưa               
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