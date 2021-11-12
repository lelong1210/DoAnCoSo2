<?php
class thoattaikhoan extends controller{
    function show(){
        unset($_SESSION["username"]);
        unset($_SESSION["quyen"]);
        unset($_SESSION["soluongtronggiohang"]);
        unset($_SESSION['code']);
        header("Location:./home");
    }
}
?>