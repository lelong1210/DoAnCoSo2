<?php
class taikhoan extends controller{
    function show(){
        if(isset($_SESSION["username"]) && isset($_SESSION["quyen"])){
            if($_SESSION["quyen"]==0){
                header("Location:./khachhang");
            }
            if($_SESSION["quyen"]==1){
                header("Location:./admin");
            }
            if($_SESSION["quyen"]==2){
                header("Location:./nhanvien");
            }
        }else{
            header("Location:./dndk");
        }
        
    }
}
?>