<?php
class taikhoanModel extends connectDB{
    protected $quyen = 0 ;
    function dangnhap($tendangnhap,$matkhau){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM nguoidung WHERE tendangnhap=:tendangnhap AND matkhau=:matkhau";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":matkhau",$matkhau);
        $query->execute();
        if($query->rowCount() > 0){
            $_SESSION["username"] = "okela";
            return true ;
        }else{
            return false ;
        }
    }
    function dangky($tendangnhap,$matkhau,$email){
        try {

            $conn = $this->GetConn();
            $sql = "INSERT INTO nguoidung(tendangnhap,email, matkhau, quyen) VALUES (:tendangnhap,:email,:matkhau,:quyen)";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->bindParam(":matkhau",$matkhau);
            $query->bindParam(":email",$email);
            $query->bindParam(":quyen",$this->quyen);
            $query->execute();
            if($query->rowCount() > 0){
                return true ;
            }else{
                return false ;
            }
        } catch (Exception $e) {
           return false;
        }
    }
}
?>