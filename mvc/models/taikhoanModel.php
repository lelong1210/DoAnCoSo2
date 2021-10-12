<?php
class taikhoanModel extends connectDB{
    protected $quyen = 0 ;
    function dangnhap(){
        $conn = $this->GetConn();
        // $query = 
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