<?php
class nhanvienModel extends connectDB{
    function getCongViecMoi(){
        $conn = $this->GetConn(); 
        $sql = "SELECT macv, makhachhang, masp, soluongld, diadiemcongviec FROM congviec WHERE danhancv = 0";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }
    }
    function getCongViec($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT macv, masp, masp,soluongld,sdtKh, diadiemcongviec FROM congviec WHERE danhancv = 1 AND tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }
    }
    function setCongViec($macv,$tendangnhap,$thoigiannhancongviec,$danhancv){
        $conn = $this->GetConn(); 
        $sql = "UPDATE congviec SET tendangnhap=:tendangnhap,thoigiannhancongviec=:thoigiannhancongviec,danhancv=:danhancv WHERE macv=:macv";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":thoigiannhancongviec",$thoigiannhancongviec);
        $query->bindParam(":danhancv",$danhancv);
        $query->bindParam(":macv",$macv);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    } 
    function getTitleTable($arr){
        $arr = array_keys((array)$arr[0]);
        return $arr ;
    }
}
?>