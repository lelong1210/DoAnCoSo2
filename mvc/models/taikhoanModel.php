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
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $this->getQuyen(json_encode($result));
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
    function checkAcount($tendangnhap){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM nguoidung WHERE tendangnhap=:tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }        
    }
    function getQuyen($arr){
        $arr = json_decode($arr);
        $arr = array_values((array)$arr[0]);
        $_SESSION["quyen"] = $arr[6];
    }
}
?>