<?php
class productModel extends connectDB
{
    function SelectProductWhereMasp($masp)
    {
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
    function GetTitleOverView($nameClass)
    {
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
    function xulyArr($arr)
    {
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
}
?>
