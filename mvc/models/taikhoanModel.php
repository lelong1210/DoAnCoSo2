<?php
class taikhoanModel extends connectDB{
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
    function dangky($tendangnhap,$matkhau,$email,$quyen,$ngaythamgia){
        try {
            $quyen = intval($quyen);

            $conn = $this->GetConn();
            $sql = "INSERT INTO nguoidung(tendangnhap,email, matkhau, quyen, ngaythamgia) VALUES (:tendangnhap,:email,:matkhau,:quyen,:ngaythamgia)";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->bindParam(":matkhau",$matkhau);
            $query->bindParam(":email",$email);
            $query->bindParam(":quyen",$quyen);
            $query->bindParam(":ngaythamgia",$ngaythamgia);
            $query->execute();
            if($query->rowCount() > 0){
                return true ;
            }else{
                return false ;
            }
        } catch (Exception $e) {
           echo $e->getMessage();
        }
    }
    function checkAcount($tendangnhap){
        try{
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
        }catch(PDOException $e){
            // echo $e->getMessage();
        }
    }
    function getQuyenAndUser($arr){
        $arr = json_decode($arr);
        $arr = array_values((array)$arr[0]);
        $_SESSION["quyen"] = $arr[7];
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
            $conn = $this->GetConn();
            $sql = "UPDATE nguoidung SET matkhau = :matkhau WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":matkhau",$matkhau);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->execute();
            if($query->rowCount() > 0){
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
    // dia chi giao hang
    function insertAddressShipping($tendangnhap,$tentinh,$tenhuyen,$tenxa,$diachichitiet){
        $conn = $this->GetConn();
        $sql = "INSERT INTO diachigiaohang(tendangnhap,tentinh,tenhuyen,tenxa,diachichitiet) values(:tendangnhap,:tentinh,:tenhuyen,:tenxa,:diachichitiet)";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":tentinh",$tentinh);
        $query->bindParam(":tenhuyen",$tenhuyen);
        $query->bindParam(":tenxa",$tenxa);
        $query->bindParam(":diachichitiet",$diachichitiet);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }
    }
    function selectAddressShipping($tendangnhap){
        try{
            $conn = $this->GetConn();
            $sql = "SELECT * FROM diachigiaohang WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->execute();
            if($query->rowCount() > 0){
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function deleteAddressShipping($madiachigiaohang){
        $conn = $this->GetConn();
        $sql = "DELETE FROM diachigiaohang WHERE madiachigiaohang = :madiachigiaohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":madiachigiaohang",$madiachigiaohang);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }
    }
    function selectAddressShippingWhereMadiachigiaohang($tendangnhap,$madiachigiaohang){
        try{
            $conn = $this->GetConn();
            $sql = "SELECT * FROM diachigiaohang WHERE tendangnhap = :tendangnhap AND madiachigiaohang = :madiachigiaohang";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap",$tendangnhap);
            $query->bindParam(":madiachigiaohang",$madiachigiaohang);
            $query->execute();
            if($query->rowCount() > 0){
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }        
    }
    function editAddressShipping($tentinh,$tenhuyen,$tenxa,$diachichitiet,$madiachigiaohang){
        $madiachigiaohang = intval($madiachigiaohang);
        $conn = $this->GetConn();
        $sql = "UPDATE diachigiaohang SET tentinh=:tentinh,tenhuyen=:tenhuyen,tenxa=:tenxa,diachichitiet=:diachichitiet WHERE madiachigiaohang=:madiachigiaohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":tentinh",$tentinh);
        $query->bindParam(":tenhuyen",$tenhuyen);
        $query->bindParam(":tenxa",$tenxa);
        $query->bindParam(":diachichitiet",$diachichitiet);
        $query->bindParam(":madiachigiaohang",$madiachigiaohang);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }
    }
    // kiem tra xem mua chua
    function checkSell($tendangnhap,$masp){
        $conn = $this->GetConn();
        $sql = "SELECT nguoidung.tendangnhap , hoadon.mahoadon,chitiethoadon.masp,chitiethoadon.soluong
        FROM ((hoadon 
        INNER JOIN nguoidung ON hoadon.tendangnhap = nguoidung.tendangnhap)
        INNER JOIN 	chitiethoadon ON hoadon.mahoadon = chitiethoadon.mahoadon)
        WHERE chitiethoadon.masp = :masp AND nguoidung.tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":masp",$masp);
        $query->execute();
        if($query->rowCount() > 0){
            return true ;
        }else{
            return false ;
        }
    }
    // thanh toan
    function insertHoaDon($tendangnhap,$ngaymua,$diachigiaohang){
        $conn = $this->GetConn();
        $sql = "INSERT INTO hoadon(tendangnhap,ngaymua,diachigiaohang) VALUES(:tendangnhap,:ngaymua,:diachigiaohang)";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":ngaymua",$ngaymua);
        $query->bindParam(":diachigiaohang",$diachigiaohang);
        $query->execute();
        if($query->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
    function getLastMaHoaDon($tendangnhap){
        $conn = $this->GetConn();
        $sql = "SELECT mahoadon FROM hoadon 
        WHERE tendangnhap = :tendangnhap
        ORDER BY hoadon.mahoadon DESC 
        LIMIT 1";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false ;
        }
    }
    function insertChitietHoaDon($soluong,$masp,$mahoadon){
        $conn = $this->GetConn();
        $sql = "INSERT INTO chitiethoadon(soluong,masp,mahoadon) VALUES(:soluong,:masp,:mahoadon)";
        $query = $conn->prepare($sql);
        $query->bindParam(":soluong",$soluong);
        $query->bindParam(":masp",$masp);
        $query->bindParam(":mahoadon",$mahoadon);
        $query->execute();
        if($query->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }        
    }
    function thanhtoan($tendangnhap,$ngaymua,$diachigiaohang,$arr,$productModel){
        $result = false;
        if($this->insertHoaDon($tendangnhap,$ngaymua,$diachigiaohang)){
            $mahoadon = json_decode($this->getLastMaHoaDon($tendangnhap));
            print_r($mahoadon);
            $mahoadon = array_values((array)$mahoadon[0]);
            for ($i=0; $i < count($arr); $i++) { 
                $arrChild = array_values((array)$arr[$i]);
                $result = $this->insertChitietHoaDon($arrChild[1],$arrChild[0],$mahoadon[0]);
                if($result){
                    $magiohang = $_SESSION["username"] . "-gh";
                    echo $productModel->deleteInDetailCart($arrChild[0], $magiohang);  
                }
            }
            return $result;
        }else{
            return false;
        }

    }
    // danh gia
    function danhgia($masp,$tendangnhap,$noidung,$sosao,$ngaydanggia){
        $conn = $this->GetConn();
        $sql = "INSERT INTO thongtinnhanxetsanpham(masp,tendangnhap,noidung,sosao,ngaydanggia) VALUES (:masp,:tendangnhap,:noidung,:sosao,:ngaydanggia)";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":noidung",$noidung);
        $query->bindParam(":sosao",$sosao);
        $query->bindParam(":ngaydanggia",$ngaydanggia);
        $query->execute();
        if($query->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }   
    }
    // select User 
    function selectAllUser(){
        $conn =  $this->GetConn();
        $sql = "SELECT tendangnhap,tennguoidung,diachi,sodienthoai,email,quyen FROM nguoidung ORDER BY tendangnhap ASC";
        $query = $conn->prepare($sql); 
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }           
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
    function showAddressShipping(){
        $tendangnhap = $_SESSION["username"];
        $arrAddress = json_decode($this->selectAddressShipping($tendangnhap));
        if($arrAddress){
            for ($i=0; $i < count($arrAddress); $i++) { 
                $arrChild = array_values((array)$arrAddress[$i]);
                echo "<h6> $arrChild[2] - $arrChild[3] - $arrChild[4] - $arrChild[5]";
                    echo "<a class='fas fa-edit' id='editAddressShipping$arrChild[0]' href='./khachhang/suadiachigiaohang/$arrChild[0]'></a>";
                    echo "<button class='fas fa-trash-alt' id='deleteAddressShipping$arrChild[0]'></button>";
                echo "</h6>";
            }            
        }else{
            echo "";
        }
    }
    function showAddressShippingForEdit($madiachigiaohang){
        $tendangnhap = $_SESSION["username"];
        $arrAddress = json_decode($this->selectAddressShippingWhereMadiachigiaohang($tendangnhap,$madiachigiaohang));
        $arrChild = array_values((array)$arrAddress[0]);
        echo "<div class='' id=''>";
            echo "<select id='tentinh'><option value=''>$arrChild[2]</option></select>";
            echo "<select id='tenhuyen'><option value=''>$arrChild[3]</option></select>";
            echo "<select id='tenxa'><option value=''>$arrChild[4]</option></select>";
            echo "<input type='text' placeholder='nhập địa chỉ...' id='diachi' value='$arrChild[5]'>";
            echo "<button class='btn btn-lg btn-success' id='editAddressShipping$arrChild[0]'>Cập Nhật</button>";
        echo "</div>";
    }
    function getTitleTable($arr){
        $arr = array_keys((array)$arr[0]);
        return $arr ;
    }
}
?>