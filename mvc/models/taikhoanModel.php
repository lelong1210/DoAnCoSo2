<?php
class taikhoanModel extends connectDB
{
    function dangnhap($tendangnhap, $matkhau)
    {
        $conn = $this->GetConn();
        $sql = "SELECT * FROM nguoidung WHERE tendangnhap=:tendangnhap AND matkhau=:matkhau";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":matkhau", $matkhau);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["information"] = json_encode($result);
            $this->getQuyenAndUser(json_encode($result));
            return true;
        } else {
            return false;
        }
    }
    function dangky($tendangnhap, $matkhau, $email, $quyen, $ngaythamgia)
    {
        try {
            $quyen = intval($quyen);

            $conn = $this->GetConn();
            $sql = "INSERT INTO nguoidung(tendangnhap,email, matkhau, quyen, ngaythamgia) VALUES (:tendangnhap,:email,:matkhau,:quyen,:ngaythamgia)";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap", $tendangnhap);
            $query->bindParam(":matkhau", $matkhau);
            $query->bindParam(":email", $email);
            $query->bindParam(":quyen", $quyen);
            $query->bindParam(":ngaythamgia", $ngaythamgia);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function checkAcount($tendangnhap)
    {
        try { 
            $conn = $this->GetConn();
            $sql = "SELECT * FROM nguoidung WHERE tendangnhap=:tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap", $tendangnhap);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // echo $e->getMessage();
        }
    }
    function getSoLuongTrongGioHang($magiohang)
    {
        $conn = $this->GetConn();
        $sql = "SELECT * FROM chitietgiohang WHERE magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":magiohang", $magiohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->rowCount();
            return $result;
        } else {
            return false;
        }
    }
    function getQuyenAndUser($arr)
    {
        $arr = json_decode($arr);
        $arr = array_values((array) $arr[0]);
        $_SESSION["quyen"] = $arr[7];
        $_SESSION["password"] = $arr[5];
        $_SESSION["username"] = $arr[0];
        $_SESSION["soluongtronggiohang"] = $this->getSoLuongTrongGioHang($arr[0] . "-gh");
    }
    function unloadingDATA()
    {
        $arr = json_decode($_SESSION["information"]);
        $arr = array_values((array) $arr[0]);
        return $arr;
    }
    function updateAcount($tennguoidung, $diachi, $sodienthoai, $email, $tendangnhap)
    {
        try {
            $conn = $this->GetConn();
            $sql = "UPDATE nguoidung SET tennguoidung = :tennguoidung,diachi = :diachi,sodienthoai = :sodienthoai,email = :email WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":tennguoidung", $tennguoidung);
            $query->bindParam(":diachi", $diachi);
            $query->bindParam(":sodienthoai", $sodienthoai);
            $query->bindParam(":email", $email);
            $query->bindParam(":tendangnhap", $tendangnhap);
            $query->execute();
            if ($query->rowCount() > 0) {
                $this->dangnhap($_SESSION["username"], $_SESSION["password"]);
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "FAULT" . $e->getMessage();
        }
    }
    function updatePassword($tendangnhap, $matkhau)
    {
        try {
            $conn = $this->GetConn();
            $sql = "UPDATE nguoidung SET matkhau = :matkhau WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":matkhau", $matkhau);
            $query->bindParam(":tendangnhap", $tendangnhap);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "FAULT" . $e->getMessage();
        }
    }
    function getTitle()
    {
        $arr = $_SESSION["information"];
        $arr = json_decode($arr);
        $arr = array_keys((array) $arr[0]);
        return $arr;
    }
    function getTenNguoiDung($tendangnhap){
        $conn = $this->GetConn();
        $sql = "SELECT tennguoidung FROM nguoidung WHERE tendangnhap=:tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }
    }
    // dia chi giao hang
    function insertAddressShipping($tendangnhap, $tentinh, $tenhuyen, $tenxa, $diachichitiet,$sdtGh)
    {
        $conn = $this->GetConn();
        $sql = "INSERT INTO diachigiaohang(tendangnhap,tentinh,tenhuyen,tenxa,diachichitiet,sdtGh) values(:tendangnhap,:tentinh,:tenhuyen,:tenxa,:diachichitiet,:sdtGh)";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":tentinh", $tentinh);
        $query->bindParam(":tenhuyen", $tenhuyen);
        $query->bindParam(":tenxa", $tenxa);
        $query->bindParam(":diachichitiet", $diachichitiet);
        $query->bindParam(":sdtGh",$sdtGh);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function selectAddressShipping($tendangnhap)
    {
        try {
            $conn = $this->GetConn();
            $sql = "SELECT * FROM diachigiaohang WHERE tendangnhap = :tendangnhap";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap", $tendangnhap);
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function deleteAddressShipping($madiachigiaohang)
    {
        $conn = $this->GetConn();
        $sql = "DELETE FROM diachigiaohang WHERE madiachigiaohang = :madiachigiaohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":madiachigiaohang", $madiachigiaohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function selectAddressShippingWhereMadiachigiaohang($tendangnhap, $madiachigiaohang)
    {
        try {
            $conn = $this->GetConn();
            $sql = "SELECT * FROM diachigiaohang WHERE tendangnhap = :tendangnhap AND madiachigiaohang = :madiachigiaohang";
            $query = $conn->prepare($sql);
            $query->bindParam(":tendangnhap", $tendangnhap);
            $query->bindParam(":madiachigiaohang", $madiachigiaohang);
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return json_encode($result);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function editAddressShipping($tentinh, $tenhuyen, $tenxa, $diachichitiet, $madiachigiaohang,$sdtGh)
    {
        $madiachigiaohang = intval($madiachigiaohang);
        $conn = $this->GetConn();
        $sql = "UPDATE diachigiaohang SET tentinh=:tentinh,tenhuyen=:tenhuyen,tenxa=:tenxa,diachichitiet=:diachichitiet,sdtGh=:sdtGh WHERE madiachigiaohang=:madiachigiaohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":tentinh", $tentinh);
        $query->bindParam(":tenhuyen", $tenhuyen);
        $query->bindParam(":tenxa", $tenxa);
        $query->bindParam(":diachichitiet", $diachichitiet);
        $query->bindParam(":sdtGh",$sdtGh);
        $query->bindParam(":madiachigiaohang", $madiachigiaohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // kiem tra xem mua chua
    function checkSell($tendangnhap, $masp)
    {
        $conn = $this->GetConn();
        $sql = "SELECT nguoidung.tendangnhap , hoadon.mahoadon,chitiethoadon.masp,chitiethoadon.soluong
        FROM (((hoadon 
        INNER JOIN nguoidung ON hoadon.tendangnhap = nguoidung.tendangnhap)
        INNER JOIN 	chitiethoadon ON hoadon.mahoadon = chitiethoadon.mahoadon)
        INNER JOIN congviec ON hoadon.mahoadon = congviec.mahoadon)
        WHERE chitiethoadon.masp = :masp AND nguoidung.tendangnhap = :tendangnhap AND congviec.tiendo = 1";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":masp", $masp);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // get bill
    function getBill($tendangnhap)
    {
        $conn = $this->GetConn();
        $sql = "SELECT hoadon.mahoadon,hoadon.ngaymua,hoadon.diachigiaohang,hoadon.sodienthoaigh,congviec.tiendo
        FROM hoadon INNER JOIN congviec ON hoadon.mahoadon = congviec.mahoadon 
        WHERE congviec.tiendo = 0 AND hoadon.tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }
    }
    function getBill_ed($tendangnhap)
    {
        $conn = $this->GetConn();
        $sql = "SELECT hoadon.mahoadon,hoadon.ngaymua,hoadon.diachigiaohang,hoadon.sodienthoaigh,congviec.danhgiacuakhachhang
        FROM hoadon INNER JOIN congviec ON hoadon.mahoadon = congviec.mahoadon 
        WHERE congviec.tiendo = 1 AND hoadon.tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }
    }
    function getDetailBill($tendangnhap,$mahoadon){
        $conn = $this->GetConn();
        $sql = "SELECT sanpham.tensp,sanpham.giatien,sanpham.linkduongdananh,chitiethoadon.soluong,hoadon.diachigiaohang,hoadon.sodienthoaigh,congviec.tiendo,hoadon.phiship,hoadon.hinhthucthanhtoan
        FROM (((congviec INNER JOIN hoadon ON congviec.mahoadon = hoadon.mahoadon ) 
                        INNER JOIN chitiethoadon ON hoadon.mahoadon = chitiethoadon.mahoadon) 
                        INNER JOIN sanpham ON chitiethoadon.masp = sanpham.masp)
        WHERE hoadon.mahoadon = :mahoadon";
        $query = $conn->prepare($sql);
        // $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":mahoadon",$mahoadon);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }        
    }
    // insert Into congviec
    function insertCongViec($makhachhang,$mahoadon,$diadiemcongviec,$sdtKh,$danhancv,$tiendo){
        $conn = $this->GetConn();
        $sql = "INSERT INTO congviec(makhachhang,mahoadon,diadiemcongviec,sdtKh,danhancv,tiendo) VALUES (:makhachhang,:mahoadon,:diadiemcongviec,:sdtKh,:danhancv,:tiendo)";
        $query = $conn->prepare($sql);
        $query->bindParam(":makhachhang", $makhachhang);
        $query->bindParam(":mahoadon",$mahoadon);
        $query->bindParam(":diadiemcongviec", $diadiemcongviec);
        $query->bindParam(":sdtKh",$sdtKh);
        $query->bindParam(":danhancv",$danhancv);
        $query->bindParam(":tiendo",$tiendo);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }        
    }
    // thanh toan
    function insertHoaDon($tendangnhap, $ngaymua, $diachigiaohang,$sodienthoaigh,$phiship,$hinhthucthanhtoan)
    {
        $conn = $this->GetConn();
        $sql = "INSERT INTO hoadon(tendangnhap,ngaymua,diachigiaohang,sodienthoaigh,phiship,hinhthucthanhtoan) VALUES(:tendangnhap,:ngaymua,:diachigiaohang,:sodienthoaigh,:phiship,:hinhthucthanhtoan)";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":ngaymua", $ngaymua);
        $query->bindParam(":diachigiaohang", $diachigiaohang);
        $query->bindParam(":sodienthoaigh",$sodienthoaigh);
        $query->bindParam(":phiship",$phiship);
        $query->bindParam(":hinhthucthanhtoan",$hinhthucthanhtoan);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function getLastMaHoaDon($tendangnhap)
    {
        $conn = $this->GetConn();
        $sql = "SELECT mahoadon,diachigiaohang FROM hoadon 
        WHERE tendangnhap = :tendangnhap
        ORDER BY hoadon.mahoadon DESC 
        LIMIT 1";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }
    }
    function insertChitietHoaDon($soluong, $masp, $mahoadon)
    {
        $conn = $this->GetConn();
        $sql = "INSERT INTO chitiethoadon(soluong,masp,mahoadon) VALUES(:soluong,:masp,:mahoadon)";
        $query = $conn->prepare($sql);
        $query->bindParam(":soluong", $soluong);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":mahoadon", $mahoadon);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function thanhtoan($tendangnhap, $ngaymua, $diachigiaohang, $arr, $productModel,$sodienthoaigh,$phiship,$hinhthucthanhtoan)
    {
        $result = false;
        if ($this->insertHoaDon($tendangnhap, $ngaymua, $diachigiaohang,$sodienthoaigh,$phiship,$hinhthucthanhtoan)) {
            $arrTT = json_decode($this->getLastMaHoaDon($tendangnhap));
            $arrTT = array_values((array)$arrTT[0]);
            $mahoadon = $arrTT[0];
            $diachigiaohang = $arrTT[1];
            for ($i = 0; $i < count($arr); $i++) {
                $arrChild = array_values((array) $arr[$i]);
                $result = $this->insertChitietHoaDon($arrChild[1], $arrChild[0], $mahoadon);
                if ($result) {
                    $magiohang = $_SESSION["username"] . "-gh";
                    echo $productModel->deleteInDetailCart($arrChild[0], $magiohang);
                }
            }
            $this->insertCongViec($_SESSION["username"],$mahoadon,$diachigiaohang,$sodienthoaigh,0,0);
            return $result;
        } else {
            return false;
        }
    }
    function getSdtGh($tendangnhap){
        $conn = $this->GetConn();
        $sql = "SELECT sodienthoai FROM nguoidung WHERE tendangnhap=:tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }        
    }
    // danh gia san pham 
    function danhgia($masp, $tendangnhap, $noidung, $sosao, $ngaydanggia)
    {   
        if($this->kiemTraDaDanhGia($tendangnhap,$masp)){
            if($this->updateDanhGia($masp, $tendangnhap, $noidung, $sosao, $ngaydanggia)){
                return true;
            }return false;
        }else{
            if($this->insertDanhGia($masp, $tendangnhap, $noidung, $sosao, $ngaydanggia)){
                return true;
            }return false;
        }
    }
    function kiemTraDaDanhGia($tendangnhap,$masp){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM thongtinnhanxetsanpham WHERE masp = :masp AND tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":masp", $masp);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }
    function updateDanhGia($masp, $tendangnhap, $noidung, $sosao, $ngaydanggia){
        $conn = $this->GetConn();
        $sql = "UPDATE thongtinnhanxetsanpham SET sosao = :sosao , noidung = :noidung , ngaydanggia = :ngaydanggia WHERE tendangnhap = :tendangnhap AND masp = :masp";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":noidung", $noidung);
        $query->bindParam(":sosao", $sosao);
        $query->bindParam(":ngaydanggia", $ngaydanggia);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }        
    }
    function insertDanhGia($masp, $tendangnhap, $noidung, $sosao, $ngaydanggia){
        $conn = $this->GetConn();
        $sql = "INSERT INTO thongtinnhanxetsanpham(masp,tendangnhap,noidung,sosao,ngaydanggia) VALUES (:masp,:tendangnhap,:noidung,:sosao,:ngaydanggia)";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->bindParam(":noidung", $noidung);
        $query->bindParam(":sosao", $sosao);
        $query->bindParam(":ngaydanggia", $ngaydanggia);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // danh gia nhan vien 
    function danhGiaVeNhanVien($mahd,$danhgiacuakhachhang){
        try {
            $conn = $this->GetConn();
            $sql = "UPDATE congviec SET danhgiacuakhachhang = :danhgiacuakhachhang WHERE congviec.mahoadon = :mahd";
            $query = $conn->prepare($sql);
            $query->bindParam(":danhgiacuakhachhang", $danhgiacuakhachhang);
            $query->bindParam(":mahd", $mahd);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "FAULT" . $e->getMessage();
        }
    }
    // select User 
    function selectAllUser()
    {
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
    function editInformation()
    {
        $arrKey = $this->getTitle();
        $arr = $this->unloadingDATA();
        $arrTiTile = ["Tên Người Dùng", "Địa Chỉ", "Số Điện Thoại", "Email"];
        echo "<div class='row'>";
        for ($i = 0; $i < count($arrTiTile); $i++) {
            echo "<div class='col-lg-12 col-md-12'>";
            echo "<div class='billing-info'>";
            echo "<label>$arrTiTile[$i]</label>";
            echo "<input type='text' value='" . $arr[$i + 1] . "' id='" . $arrKey[$i + 1] . "update'/>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    function showAddressShipping()
    {
        $tendangnhap = $_SESSION["username"];
        $arrAddress = json_decode($this->selectAddressShipping($tendangnhap));
        if ($arrAddress) {
            for ($i = 0; $i < count($arrAddress); $i++) {
                $arrChild = array_values((array) $arrAddress[$i]);
                echo "<h6> $arrChild[3] - $arrChild[4] - $arrChild[5] - $arrChild[6] - $arrChild[2] ";
                    echo "<a class='fas fa-edit' id='editAddressShipping$arrChild[0]' href='./khachhang/suadiachigiaohang/$arrChild[0]'></a>";
                    echo "<button class='fas fa-trash-alt' id='deleteAddressShipping$arrChild[0]'></button>";
                echo "</h6>";
            }
        } else {
            echo "";
        }
    }
    function showAddressShippingForEdit($madiachigiaohang)
    {
        $tendangnhap = $_SESSION["username"];
        $arrAddress = json_decode($this->selectAddressShippingWhereMadiachigiaohang($tendangnhap, $madiachigiaohang));
        $arrChild = array_values((array) $arrAddress[0]);
        echo "<div class='' id=''>";
            echo "<select id='tentinh'><option value=''>$arrChild[3]</option></select>";
            echo "<select id='tenhuyen'><option value=''>$arrChild[4]</option></select>";
            echo "<select id='tenxa'><option value=''>$arrChild[5]</option></select>";
            echo "<input type='text' placeholder='nhập địa chỉ...' id='diachi' value='$arrChild[6]'>";
            echo "<input type='text' placeholder='nhập địa chỉ...' id='stdGh' value='$arrChild[2]'>";
            echo "<button class='btn btn-lg btn-success' id='editAddressShipping$arrChild[0]'>Cập Nhật</button>";
        echo "</div>";
    }
    function getTitleTable($arr)
    {
        $arr = array_keys((array) $arr[0]);
        return $arr;
    }
    function insertKey($email,$keyxacnhan,$thoigiantao){
        $conn = $this->GetConn();
        $sql = "INSERT INTO resetpass(email, keyxacnhan, thoigiantao) VALUES (:email, :keyxacnhan, :thoigiantao)";
        $query = $conn->prepare($sql);
        $query->bindParam(":email", $email);
        $query->bindParam(":keyxacnhan",$keyxacnhan);
        $query->bindParam(":thoigiantao", $thoigiantao);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }  
    }   
    function getkKey($email,$keyxacnhan){
        $conn = $this->GetConn();
        $sql = "SELECT resetpass.thoigiantao FROM resetpass WHERE resetpass.email = :email AND resetpass.keyxacnhan = :keyxacnhan";
        $query = $conn->prepare($sql);
        $query->bindParam(":email", $email);
        $query->bindParam(":keyxacnhan",$keyxacnhan);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }

    }
    function checkTimeOfkey($timeOfKey){
        $timeNow = date("Y-m-d H:i:s");
        $phut = strtotime($timeNow) - strtotime($timeOfKey);
        $phut = ($phut/60);
        if($phut > 5){
            return false;
        }else{
            return true;
        }
    }
    function checkKey($email,$keyxacnhan){
        $timeOfKey = $this->getkKey($email,$keyxacnhan);
        if($timeOfKey){
            $timeOfKey = json_decode($timeOfKey);
            $timeOfKey = array_values((array)$timeOfKey[0]);
            $timeOfKey = $timeOfKey[0];
            return $this->checkTimeOfkey($timeOfKey);
        }else{
            return false;
        }
    }
}
?>