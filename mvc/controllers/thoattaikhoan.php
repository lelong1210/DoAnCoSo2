<?php
class thoattaikhoan extends controller{
    function show(){
        unset($_SESSION["username"]);
        unset($_SESSION["quyen"]);
    }
}
?>