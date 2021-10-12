<?php
class taikhoan extends controller{
    function show(){
        if(isset($_SESSION["username"])){
            echo "TAI KHOAN EYYYY";
        }else{
            header("Location:./dndk");
        }
        
    }
}
?>