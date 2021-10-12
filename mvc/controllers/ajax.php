<?php
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

}
?>