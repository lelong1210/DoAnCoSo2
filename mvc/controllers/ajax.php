<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class ajax extends controller{
    function show(){

    }
    function dangky(){ 
        $tendangnhap = $_POST["tendangnhap"];
        $matkhau = $_POST["matkhau"];      
        $email = $_POST["email"];   
        
        $matkhau = md5($matkhau);

        $model = $this->call_model("taikhoanModel");
        echo $model->dangky($tendangnhap,$matkhau,$email);
    }
    function dangnhap(){
        // echo "VAO DANG NHAP AJAX";
        $tendangnhap = $_POST["tendangnhap"];
        $matkhau = $_POST["matkhau"];      

        $matkhau = md5($matkhau);

        $model = $this->call_model("taikhoanModel");
        echo $model->dangnhap($tendangnhap,$matkhau);
    }
    function checkAcount(){
        $tendangnhap = $_POST["tendangnhap"];

        $model = $this->call_model("taikhoanModel");
        echo $model->checkAcount($tendangnhap);
    }
    function updateAcount(){
        $tendangnhap = $_SESSION["username"];
        $tennguoidung = $_POST["tennguoidung"];
        $diachi = $_POST["diachi"];
        $sodienthoai = $_POST["sodienthoai"];
        $email = $_POST["email"];

        $model = $this->call_model("taikhoanModel");
        echo $model->updateAcount($tennguoidung,$diachi,$sodienthoai,$email,$tendangnhap);
    }
    function updatePassword(){
        $tendangnhap = $_SESSION["username"];
        $matkhau = $_POST["matkhau"];
        
        $matkhau = md5($matkhau);
        
        $model = $this->call_model("taikhoanModel");
        if($model->updatePassword($tendangnhap,$matkhau)){
            $_SESSION["password"] = $matkhau;
            echo true;
        }else{
            echo false;
        }
    }
    function addProductInCart(){
        $masp = $_POST["masp"];
        $soluong = $_POST["soluong"];
        $soluong = intval($soluong);
        $model = $this->call_model("productModel");
        echo $model->addProductInCart($masp,$soluong);
    }
    function checklogin(){
        if(isset($_SESSION["username"]) && isset($_SESSION["quyen"])){
            if($_SESSION["quyen"] == 0){
                echo true ;
            }else{
                echo false;
            }
        }else{
            echo false;
        }
    }
    function updateDetailOfCart(){
        $masp = $_POST["masp"];
        $soluong = intval($_POST["soluong"]);
        $magiohang = $_SESSION["username"] . "-gh";
        $model = $this->call_model("productModel");
        echo $model->updateInDetailCart($masp, $magiohang, $soluong);
    }
    function deleteInDetailCart(){
        $masp = $_POST["masp"];
        $magiohang = $_SESSION["username"] . "-gh";
        $model = $this->call_model("productModel");
        echo $model->deleteInDetailCart($masp, $magiohang);        
    }
    function updateSanPham(){
        $masp = $_POST["masp"];
        $soluongsp = $_POST["soluongsp"];
        $model = $this->call_model("productModel");
        echo $model->updateSanPham($masp,$soluongsp);
    }
    function getProductToPayment(){
        // $masp = 
        $arr = $_POST["arr"];
        $_SESSION["thanhtoan"] = $arr; 
    }
}
?>