<?php 
class thanhtoan extends controller{
    function show(){
        echo "thanh toan xin chao ";
        print_r($_SESSION["thanhtoan"]);
    }
}
?>