<?php
class home extends controller{
    function show($hello){
        echo "param = ".$hello."<br>";
        $model = $this->call_model("homeModel");
        echo $model->GetAB();
        $view = $this->call_view("homeView");
    }
}
?>