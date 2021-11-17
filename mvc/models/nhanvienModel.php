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
    function getCongViecHoanThanh($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT congviec.macv ,hoadon.mahoadon, nguoidung.tennguoidung ,hoadon.diachigiaohang , hoadon.sodienthoaigh
        FROM ((hoadon INNER JOIN congviec ON hoadon.mahoadon = congviec.mahoadon) 
                      INNER JOIN nguoidung ON hoadon.tendangnhap = nguoidung.tendangnhap)
        WHERE congviec.tendangnhap = :tendangnhap AND congviec.tiendo = 1";
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
    function getCongViecToLuong($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT congviec.macv , congviec.mahoadon , congviec.danhgiacuakhachhang, congviec.thoigiannhancongviec , congviec.thoigianxongcongviec , DATEDIFF(congviec.thoigianxongcongviec,congviec.thoigiannhancongviec) AS thoigianht
        FROM congviec
        WHERE congviec.tendangnhap = :tendangnhap AND congviec.tiendo = 1";
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
    function insertToLuong($soluong,$macv,$ngaynhanluong){
        $conn = $this->GetConn();
        $sql = "INSERT INTO luong(soluong, macv,ngaynhanluong) VALUES (:soluong, :macv, :ngaynhanluong)";
        $query = $conn->prepare($sql);
        $query->bindParam(":soluong", $soluong);
        $query->bindParam(":macv",$macv);
        $query->bindParam(":ngaynhanluong",$ngaynhanluong);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }        
    }
    function selectLuong($macv){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM luong WHERE luong.macv = :macv";
        $query = $conn->prepare($sql);
        $query->bindParam(":macv",$macv);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }  
    }
    function getSpeedAverage($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT AVG(DATEDIFF(congviec.thoigianxongcongviec,congviec.thoigiannhancongviec)) AS tocdotrungbinh
        FROM congviec
        WHERE congviec.tendangnhap = :tendangnhap AND congviec.tiendo = 1";
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
    function getPvHk($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT AVG(congviec.danhgiacuakhachhang) AS pvKH
        FROM congviec
        WHERE congviec.tendangnhap = :tendangnhap AND congviec.tiendo = 1 AND congviec.danhgiacuakhachhang != 0";
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
    function getTongluong($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT SUM(luong.soluong) AS tongluong
        FROM congviec INNER JOIN luong ON congviec.macv = luong.macv
        WHERE congviec.tendangnhap = :tendangnhap";
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
    function getTongCV($tendangnhap){
        $conn = $this->GetConn(); 
        $sql = "SELECT luong.soluong AS tongluong
        FROM congviec INNER JOIN luong ON congviec.macv = luong.macv
        WHERE congviec.tendangnhap = :tendangnhap";
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
    function countCongViecTrongThang($tendangnhap,$thang){
        $conn = $this->GetConn(); 
        $sql = "SELECT COUNT(congviec.thoigianxongcongviec) AS socongviectrongthang
        FROM congviec
        WHERE MONTH(congviec.thoigianxongcongviec) = :thang AND congviec.tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":thang",$thang);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return ($result);
        }else{
            return false;
        } 
    }
    function countCongViec12thang($tendangnhap){
        $arr = [];
        for ($i=1; $i <= 12; $i++) { 
            $arr[] = $this->countCongViecTrongThang($tendangnhap,$i);
        }
        return json_encode($arr);
    }
}
?>