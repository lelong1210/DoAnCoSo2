<?php
class nhanvienModel extends connectDB{
    function getCongViecMoi(){
        $conn = $this->GetConn(); 
        $sql = "SELECT congviec.macv ,hoadon.mahoadon, nguoidung.tennguoidung ,hoadon.diachigiaohang , hoadon.sodienthoaigh
        FROM ((hoadon INNER JOIN congviec ON hoadon.mahoadon = congviec.mahoadon) 
                      INNER JOIN nguoidung ON hoadon.tendangnhap = nguoidung.tendangnhap)
        WHERE congviec.danhancv = 0";
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
        $sql = "SELECT congviec.macv ,hoadon.mahoadon, nguoidung.tennguoidung ,hoadon.diachigiaohang , hoadon.sodienthoaigh
        FROM ((hoadon INNER JOIN congviec ON hoadon.mahoadon = congviec.mahoadon) 
                      INNER JOIN nguoidung ON hoadon.tendangnhap = nguoidung.tendangnhap)
        WHERE congviec.tendangnhap = :tendangnhap AND congviec.tiendo = 0";
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
    function setCongViec($macv,$tendangnhap,$thoigiannhancongviec,$danhancv,$tiendo){
        $conn = $this->GetConn(); 
        $sql = "UPDATE congviec SET tendangnhap=:tendangnhap,thoigiannhancongviec=:thoigiannhancongviec,danhancv=:danhancv,tiendo=:tiendo WHERE macv=:macv";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":thoigiannhancongviec",$thoigiannhancongviec);
        $query->bindParam(":danhancv",$danhancv);
        $query->bindParam(":tiendo",$tiendo);
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
    function xacNhanXongCongViec($macv,$thoigianxongcongviec,$tiendo,$danhgiacuakhachhang){
        $conn = $this->GetConn(); 
        $sql = "UPDATE congviec SET thoigianxongcongviec=:thoigianxongcongviec,tiendo=:tiendo,danhgiacuakhachhang=:danhgiacuakhachhang WHERE macv=:macv";
        $query = $conn->prepare($sql);
        $query->bindParam(":thoigianxongcongviec",$thoigianxongcongviec);
        $query->bindParam(":tiendo",$tiendo);
        $query->bindParam(":macv",$macv);
        $query->bindParam(":danhgiacuakhachhang",$danhgiacuakhachhang);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }        
    }
}
?>