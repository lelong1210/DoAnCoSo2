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
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["information"] = json_encode($result);
            $this->getQuyenAndUser(json_encode($result));
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
    function getQuyenAndUser($arr){
        $arr = json_decode($arr);
        $arr = array_values((array)$arr[0]);
        $_SESSION["quyen"] = $arr[6];
        $_SESSION["username"] = $arr[0];
        $_SESSION["password"] = $arr[5];
    }
    function unloadingDATA(){
        $arr = json_decode($_SESSION["information"]);
        $arr = array_values((array)$arr[0]);
        return $arr ;
    }
    function updateAcount($tennguoidung,$diachi,$sodienthoai,$email,$tendangnhap){
        try{
            $conn = $this->GetConn();
            $sql = "UPDATE nguoidung SET tennguoidung = :tennguoidung,diachi = :diachi,sodienthoai = :sodienthoai,email = :email WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":tennguoidung",$tennguoidung);
            $query->bindParam(":diachi",$diachi);
            $query->bindParam(":sodienthoai",$sodienthoai);
            $query->bindParam(":email",$email);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->execute();
            if($query->rowCount() > 0){
                $this->dangnhap($_SESSION["username"],$_SESSION["password"]);
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "FAULT".$e->getMessage();
        }
    }
    function updatePassword($tendangnhap,$matkhau){
        try{
            echo $tendangnhap."==?".$matkhau;
            $conn = $this->GetConn();
            $sql = "UPDATE nguoidung SET matkhau = :matkhau WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":matkhau",$matkhau);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->execute();
            if($query->rowCount() > 0){
                // $this->dangnhap($_SESSION["username"],$_SESSION["password"]);
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "FAULT".$e->getMessage();
        }
    }
    function getTitle(){
        $arr = $_SESSION["information"] ;
        $arr = json_decode($arr);
        $arr = array_keys((array)$arr[0]);
        return $arr ;
    }

    // function support View
    function editInformation(){
        $arrKey = $this->getTitle();
        $arr = $this->unloadingDATA();
        $arrTiTile = ["Tên Người Dùng","Địa Chỉ","Số Điện Thoại","Email"];
        echo "<div class='row'>";
            for($i = 0 ; $i < count($arrTiTile) ; $i++){
                echo "<div class='col-lg-12 col-md-12'>";
                    echo "<div class='billing-info'>";
                        echo "<label>$arrTiTile[$i]</label>";
                        echo "<input type='text' value='".$arr[$i+1]."' id='".$arrKey[$i+1]."update'/>";
                    echo "</div>";
                echo "</div>";
            }
        echo "</div>";
    }
}
?>