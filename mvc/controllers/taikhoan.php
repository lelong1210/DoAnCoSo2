<?php
class taikhoan extends controller{
    function show(){
        if(isset($_SESSION["username"]) && isset($_SESSION["quyen"])){
            if($_SESSION["quyen"]==0){
                echo "KHACH HANG";
            }
            if($_SESSION["quyen"]==1){
                header("Location:./admin");
            }
        }else{
            header("Location:./dndk");
        }
        
    }
}
?>