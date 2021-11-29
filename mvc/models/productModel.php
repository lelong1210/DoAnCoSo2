<?php
class productModel extends connectDB
{   
    // san phẩm
    function SelectProductWhereMasp($masp){
        $conn =  $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE masp=:masp";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    function GetTitleOverView($nameClass){
        $conn = $this->GetConn();
        $sql = "SELECT tenthumuccodau FROM thumucsanpham WHERE tenthumuc=:tenthumuc";
        $query = $conn->prepare($sql);
        $query->bindParam(":tenthumuc", $nameClass);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    function addProduct($tensp,$giatien,$loaisanpham,$motasanpham,$linkduongdananh,$hangsx,$dunglamslider,$soluongsp,$ngaynhap){
        $conn =  $this->GetConn();
        $sql = "INSERT INTO sanpham(tensp,giatien,loaisanpham,motasanpham,linkduongdananh,hangsx,dunglamslider,soluongsp,ngaynhap) VALUES (:tensp,:giatien,:loaisanpham,:motasanpham,:linkduongdananh,:hangsx,:dunglamslider,:soluongsp,:ngaynhap)";
        $query = $conn->prepare($sql);
        $query->bindParam(":tensp", $tensp);
        $query->bindParam(":giatien", $giatien);
        $query->bindParam(":loaisanpham", $loaisanpham);
        $query->bindParam(":motasanpham", $motasanpham);
        $query->bindParam(":linkduongdananh", $linkduongdananh);
        $query->bindParam(":hangsx", $hangsx);
        $query->bindParam(":dunglamslider", $dunglamslider);
        $query->bindParam(":soluongsp", $soluongsp);
        $query->bindParam(":ngaynhap", $ngaynhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return true;
        }else{
            return false;
        }
    }
    function selecAllProduct(){
        $conn =  $this->GetConn();
        $sql = "SELECT masp,tensp,giatien,loaisanpham,hangsx FROM sanpham ORDER BY masp ASC";
        $query = $conn->prepare($sql); 
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }        
    }
    function getTitleTable($arr){
        $arr = array_keys((array)$arr[0]);
        return $arr ;
    }
    function updateProduct($masp,$tensp,$giatien,$loaisanpham,$motasanpham,$linkduongdananh,$hangsx,$dunglamslider,$soluongsp,$ngaynhap){
        $soluongsp = intval($soluongsp);
        $giatien = intval($giatien);

        try{
            if($linkduongdananh != ""){
                $conn =  $this->GetConn();
                $sql = "UPDATE sanpham SET tensp=:tensp,giatien=:giatien,loaisanpham=:loaisanpham,motasanpham=:motasanpham,linkduongdananh=:linkduongdananh,hangsx=:hangsx,dunglamslider=:dunglamslider,soluongsp=:soluongsp,ngaynhap=:ngaynhap WHERE masp=:masp";
                $query = $conn->prepare($sql);
                $query->bindParam(":tensp", $tensp);
                $query->bindParam(":giatien", $giatien);
                $query->bindParam(":loaisanpham", $loaisanpham);
                $query->bindParam(":motasanpham", $motasanpham);
                $query->bindParam(":linkduongdananh", $linkduongdananh);
                $query->bindParam(":hangsx", $hangsx);
                $query->bindParam(":dunglamslider", $dunglamslider);
                $query->bindParam(":soluongsp", $soluongsp);
                $query->bindParam(":ngaynhap", $ngaynhap);
                $query->bindParam(":masp",$masp);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return true;
                }else{
                    return false;
                }   
            }else{
                $conn =  $this->GetConn();
                $sql = "UPDATE sanpham SET tensp=:tensp,giatien=:giatien,loaisanpham=:loaisanpham,motasanpham=:motasanpham,hangsx=:hangsx,dunglamslider=:dunglamslider,soluongsp=:soluongsp,ngaynhap=:ngaynhap WHERE masp=:masp";
                $query = $conn->prepare($sql);
                $query->bindParam(":tensp", $tensp);
                $query->bindParam(":giatien", $giatien);
                $query->bindParam(":loaisanpham", $loaisanpham);
                $query->bindParam(":motasanpham", $motasanpham);
                $query->bindParam(":hangsx", $hangsx);
                $query->bindParam(":dunglamslider", $dunglamslider);
                $query->bindParam(":soluongsp", $soluongsp);
                $query->bindParam(":ngaynhap", $ngaynhap);
                $query->bindParam(":masp",$masp);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return true;
                }else{
                    return false;
                } 
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function deleteProduct($masp){
        $conn =  $this->GetConn();
        $sql = "DELETE FROM sanpham WHERE masp = :masp";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        }else{
            return false;
        }         
    }
    function timkiemAll($ndtimkiem){
        $ndtimkiem = "%".$ndtimkiem."%";

        $conn =  $this->GetConn();
        $sql = "SELECT masp,tensp,giatien,loaisanpham,hangsx FROM sanpham 
        WHERE tensp LIKE :ndtimkiem 
            OR masp LIKE :ndtimkiem 
            OR hangsx LIKE :ndtimkiem 
            OR loaisanpham LIKE :ndtimkiem 
            OR giatien LIKE :ndtimkiem 
            ";
        $query = $conn->prepare($sql);
        $query->bindParam(":ndtimkiem",$ndtimkiem);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    // xu ly tim kiem 
    function timkiem($ndtimkiem,$batdau,$gioihanhienthi){
        $ndtimkiem = "%".$ndtimkiem."%";

        $conn =  $this->GetConn();
        $sql = "SELECT masp,tensp,giatien,loaisanpham,hangsx,linkduongdananh FROM sanpham 
        WHERE tensp LIKE :ndtimkiem 
            OR masp LIKE :ndtimkiem 
            OR hangsx LIKE :ndtimkiem 
            OR loaisanpham LIKE :ndtimkiem 
            OR giatien LIKE :ndtimkiem
            LIMIT :batdau,:gioihanhienthi   
            ";
        $query = $conn->prepare($sql);
        $query->bindParam(":ndtimkiem",$ndtimkiem);
        $query->bindParam(":batdau",$batdau,PDO::PARAM_INT);
        $query->bindParam(":gioihanhienthi",$gioihanhienthi,PDO::PARAM_INT);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    function timkiemSapXep($ndtimkiem,$batdau,$gioihanhienthi,$option){
        $ndtimkiem = "%".$ndtimkiem."%";
        $where = "";
        //
        $tiengiam = "ORDER BY sanpham.giatien DESC";
        $tientang = "ORDER BY sanpham.giatien ASC";
        $tentang = "ORDER BY sanpham.tensp ASC";
        $tengiam = "ORDER BY sanpham.tensp DESC";

        //
        if($option == 1){
            $where = $tiengiam;
        }else if($option == 2){
            $where = $tientang;
        }else if($option == 3){
            $where = $tentang;
        }else if($option == 4){
            $where = $tengiam;
        }else{
            $where = "";
        }
        //
        $conn =  $this->GetConn();
        $sql = "SELECT masp,tensp,giatien,loaisanpham,hangsx,linkduongdananh FROM sanpham 
        WHERE tensp LIKE :ndtimkiem 
            OR masp LIKE :ndtimkiem 
            OR hangsx LIKE :ndtimkiem 
            OR loaisanpham LIKE :ndtimkiem 
            OR giatien LIKE :ndtimkiem
            ".$where."
            LIMIT :batdau,:gioihanhienthi   
            ";
        $query = $conn->prepare($sql);
        $query->bindParam(":ndtimkiem",$ndtimkiem);
        $query->bindParam(":batdau",$batdau,PDO::PARAM_INT);
        $query->bindParam(":gioihanhienthi",$gioihanhienthi,PDO::PARAM_INT);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }        
    }
    // chuoi hanh dong xu ly cua gio hang 
    function addProductInCart($masp, $soluong)
    {
        $tendangnhap = $_SESSION["username"];
        $magiohang = $_SESSION["username"] . "-gh";
        if ($this->checkCart($magiohang)) {
            if ($this->checkMaspAndMagioHangInDetailCart($masp, $magiohang)) {
                $arr = json_decode($this->checkMaspAndMagioHangInDetailCart($masp, $magiohang));
                $arr = $this->xulyArr($arr);
                $soluong = intval($arr[2]);
                $soluong = $soluong + 1;
                if ($this->updateInDetailCart($masp, $magiohang, $soluong)) {
                    return true;

                } else {
                    return false;
                }
            } else {
                if ($this->insertToDetailCart($masp, $magiohang, $soluong)) {
                    $this->updateSecSionSoLuongTrongGioHang(1);
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            if ($this->insertToCart($magiohang, $tendangnhap)) {
                if ($this->insertToDetailCart($masp, $magiohang, $soluong)) {
                    return true;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }
    function checkCart($magiohang)
    {
        $conn = $this->GetConn();
        $sql = "SELECT * FROM giohang WHERE magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":magiohang", $magiohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function insertToCart($magiohang, $tendangnhap)
    {
        $conn = $this->GetConn();
        $sql = "INSERT INTO giohang(magiohang, tendangnhap) VALUES (:magiohang,:tendangnhap)";
        $query = $conn->prepare($sql);
        $query->bindParam(":magiohang", $magiohang);
        $query->bindParam(":tendangnhap", $tendangnhap);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function insertToDetailCart($masp, $magiohang, $soluong)
    {
        $conn = $this->GetConn();
        $sql = "INSERT INTO chitietgiohang(masp, magiohang, soluong) VALUES (:masp, :magiohang, :soluong)";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":magiohang", $magiohang);
        $query->bindParam(":soluong", $soluong);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function checkMaspAndMagioHangInDetailCart($masp, $magiohang)
    {
        $conn = $this->GetConn();
        $sql = "SELECT * FROM chitietgiohang WHERE masp=:masp AND magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":magiohang", $magiohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        } else {
            return false;
        }
    }
    function updateInDetailCart($masp, $magiohang, $soluong){
        $conn = $this->GetConn();
        $sql = "UPDATE chitietgiohang SET soluong=:soluong WHERE masp=:masp AND magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":magiohang", $magiohang);
        $query->bindParam(":soluong", $soluong);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function xulyArr($arr){
        $arr = array_values((array)$arr[0]);
        return $arr;
    }
    function deleteInDetailCart($masp,$magiohang){
        $conn = $this->GetConn();
        $sql = "DELETE FROM chitietgiohang WHERE masp=:masp AND magiohang=:magiohang";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":magiohang", $magiohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }        
    }
    function updateSanPham($masp,$soluongsp){
        $conn = $this->GetConn();
        $sql = "UPDATE sanpham SET soluongsp = :soluongsp WHERE sanpham.masp = :masp";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp", $masp);
        $query->bindParam(":soluongsp", $soluongsp);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }          
    }
    function getProductIncart($magiohang){
        $sql = "SELECT sanpham.linkduongdananh,sanpham.tensp,giatien,chitietgiohang.soluong,sanpham.masp,sanpham.soluongsp
                FROM chitietgiohang 
                INNER JOIN sanpham 
                ON chitietgiohang.masp = sanpham.masp 
                WHERE chitietgiohang.magiohang=:magiohang";
        $conn =  $this->GetConn();
        $query = $conn->prepare($sql);
        $query->bindParam(":magiohang",$magiohang);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    // chuoi hanh dong in gio hang ra ngoai VIEW 
    function showProductInCart(){
        $magiohang = $_SESSION["username"]."-gh";
        $arr = json_decode($this->getProductIncart($magiohang));
        if($arr){
            $count = count($arr);
            for ($i=0; $i < $count ; $i++) { 
                $arrChild = array_values((array)$arr[$i]);
                echo "<tr id='tr$arrChild[4]'>";
                    echo "<td class='product-thumbnail'>";
                        echo "<a href='#'><img class='img-responsive ml-3' src='$arrChild[0]' alt='' /></a>";
                    echo "</td>";
                    echo "<td class='product-name'><a href='#'>$arrChild[1]</a></td>";
                    echo "<td class='product-price-cart'><span class='amount' id='tdOfprice$arrChild[4]'>".($arrChild[2])." </span>đ</td>";
                    echo "<td class='product-quantity'>";
                        echo "<div class='cart-plus-minus'>";
                            echo "<div class='dec qtybutton' id='btnMhDown$arrChild[4]'>-</div>";
                            // echo "<input class='cart-plus-minus-box' type='text' name='qtybutton' value='$arrChild[3]' id='valueOfInput$arrChild[4]'/>";
                            echo "<span class='cart-plus-minus-box' id='valueOfInput$arrChild[4]'>$arrChild[3]</span>";
                            echo "<div class='inc qtybutton' id='btnMhUp$arrChild[4]'>+</div>";
                        echo "</div>";
                    echo "</td>";
                    echo "<td class='product-price-cart' ><span class='amount' id='tdOfprieLast$arrChild[4]'>".($arrChild[2]*$arrChild[3])." </span> đ</td>";
                    echo "<td><span id='soluongconlai$arrChild[4]'>$arrChild[5]</span></td>";
                    echo "<td>";
                        echo "<input type='checkbox' value='' style='height: 20px' id='chonsp$arrChild[4]'>";
                    echo "</td>";
                echo "</tr>";
            }
        }
    }
    // ket thuc chuoi in ra
    // ===========================
    // chuoi hanh dong in ra san pham thanh toan
    function showProductInPayment(){
        $arr = $_SESSION["thanhtoan"];
        $tongtien = 0 ;
        for ($i=0; $i < count($arr); $i++) { 
            $arrChild = array_values((array)$arr[$i]);
            $arrProductNumber = $this->xulyArrArrOfPayment($arrChild[0]);
            echo "<ul>";
                echo "<li>";
                    echo "<span> <img src='$arrProductNumber[5]' alt='' style='max-width: 100px;'></span>";
                    echo "<span class='order-price' id='giaTienSp'>".($arrProductNumber[2]*$arrChild[1])." đ</span>";
                echo "</li>";
                echo "<li><span class='order-middle-left'>$arrProductNumber[1]  <span style='color:red'>X</span> <span style='color:red' id='soluongsp$arrProductNumber[0]'>$arrChild[1]</span></span></li>";
            echo "</ul>";
            $tongtien = $tongtien + $arrProductNumber[2]*$arrChild[1];
        }
        return $tongtien;
    }
    function xulyArrArrOfPayment($arr){
        $arrChild = array_values((array)$arr);
        $arrProduct = $this->SelectProductWhereMasp($arrChild[0]);
        $arrProduct = json_decode($arrProduct);
        $arrProductNumber = array_values((array)$arrProduct[0]);
        return $arrProductNumber;
    }
    function showAddressShippingInPayment($arr){
        for ($i=0; $i < count($arr); $i++) { 
            $arrChild = array_values((array)$arr[$i]);
            echo "<table>";
                echo "<tr>";
                    echo "<td>";
                        echo "<input type='checkbox' style='height: 20px;' class='btn' id='cboxgh$arrChild[0]'>";
                    echo "</td>";
                    echo "<td>";
                        echo "<span id='spanOfAddress$arrChild[0]'> $arrChild[3] - $arrChild[4] - $arrChild[5] </span> - ";
                        echo "<span id='spanOfNumberPhone$arrChild[0]'>$arrChild[2]</span>";
                    echo "</td>";
                echo "</tr>";
            echo "</table>";
        }
    }
    // get review
    function selecDanhgia($masp){
        try{
            $conn = $this->GetConn();
            $sql = "SELECT nguoidung.tennguoidung ,thongtinnhanxetsanpham.sosao,thongtinnhanxetsanpham.noidung,thongtinnhanxetsanpham.ngaydanggia,thongtinnhanxetsanpham.manhanxet
            FROM nguoidung 
            INNER JOIN thongtinnhanxetsanpham
            ON nguoidung.tendangnhap = thongtinnhanxetsanpham.tendangnhap
            WHERE thongtinnhanxetsanpham.masp=:masp";
            $query = $conn->prepare($sql);
            $query->bindParam(":masp",$masp);
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
    function selectPhDGia($manhanxet){
        try{
            $conn = $this->GetConn();
            $sql = "SELECT nguoidung.tennguoidung, phanhoidanhgia.noidungphanhoi, phanhoidanhgia.ngayphanhoi 
            FROM phanhoidanhgia INNER JOIN nguoidung ON phanhoidanhgia.tendangnhap = nguoidung.tendangnhap 
            WHERE manhanxet = :manhanxet";
            $query = $conn->prepare($sql);
            $query->bindParam(":manhanxet",$manhanxet);
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
    //
    function updateSecSionSoLuongTrongGioHang($option){
        $result = $_SESSION["soluongtronggiohang"];
        $result = intval($result);
        if($option == 0){
            $result = $result - 1;
        }else{
            $result = $result + 1;
        }
        $_SESSION["soluongtronggiohang"] = $result;
    }
    function getsoluongSp($masp){
        try{
            $conn = $this->GetConn();
            $sql = "SELECT sanpham.soluongsp FROM sanpham WHERE sanpham.masp = :masp";
            $query = $conn->prepare($sql);
            $query->bindParam(":masp",$masp);
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
}
?>
