<?php
class thoattaikhoan extends controller{
    function show(){
        unset($_SESSION["username"]);
        unset($_SESSION["quyen"]);
        unset($_SESSION["soluongtronggiohang"]);
        header("Location:./home");
    }
}
?>