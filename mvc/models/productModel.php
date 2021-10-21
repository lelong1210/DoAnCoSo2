<?php
class productModel extends connectDB{
    function SelectProductWhereMasp($masp){
        $conn =  $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE masp=:masp";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    function GetTitleOverView($nameClass){
        $conn = $this->GetConn();
        $sql = "SELECT tenthumuccodau FROM thumucsanpham WHERE tenthumuc=:tenthumuc";
        $query = $conn->prepare($sql);
        $query->bindParam(":tenthumuc",$nameClass);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }        
    }
    function addProductInCart($masp,$soluong){
        $tendangnhap = $_SESSION["username"];
        $magiohang = $_SESSION["username"]."-gh";
        if($this->checkCart($magiohang)){
            if($this->checkMaspAndMagioHangInDetailCart($masp,$magiohang)){
                $arr = json_decode($this->checkMaspAndMagioHangInDetailCart($masp,$magiohang));
                $arr = $this->xulyArr($arr);
                $soluong = intval($arr[2]);
                $soluong = $soluong + 1;
                if($this->updateInDetailCart($masp,$magiohang,$soluong)){
                    return true ;
                }else{
                    return false ;
                }
            }else{
                if($this->insertToDetailCart($masp,$magiohang,$soluong)){
                    return true ;
                }else{
                    return false ;
                }
            }
        }else{
            if($this->insertToCart($magiohang,$tendangnhap)){
                if($this->insertToDetailCart($masp,$magiohang,$soluong)){
                    return true;
                }else{
                    return true;
                }
            }else{
                return false ;
            }
        }
    }
    function checkCart($magiohang){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM giohang WHERE magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":magiohang",$magiohang);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }
    }
    function insertToCart($magiohang,$tendangnhap){
        $conn = $this->GetConn();
        $sql = "INSERT INTO giohang(magiohang, tendangnhap) VALUES (:magiohang,:tendangnhap)";
        $query = $conn->prepare($sql);
        $query->bindParam(":magiohang",$magiohang);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        } 
    }
    function insertToDetailCart($masp,$magiohang,$soluong){
        $conn = $this->GetConn();
        $sql = "INSERT INTO chitietgiohang(masp, magiohang, soluong) VALUES (:masp, :magiohang, :soluong)";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->bindParam(":magiohang",$magiohang);
        $query->bindParam(":soluong",$soluong);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        } 
    }
    function checkMaspAndMagioHangInDetailCart($masp,$magiohang){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM chitietgiohang WHERE masp=:masp AND magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->bindParam(":magiohang",$magiohang);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false ;
        } 
    }
    function updateInDetailCart($masp,$magiohang,$soluong){
        $conn = $this->GetConn();
        $sql = "UPDATE chitietgiohang SET soluong=:soluong WHERE masp=:masp AND magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->bindParam(":magiohang",$magiohang);
        $query->bindParam(":soluong",$soluong);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }        
    }
    function xulyArr($arr){
        $arr = array_values((array)$arr[0]);
        return $arr;
    }
}
?>