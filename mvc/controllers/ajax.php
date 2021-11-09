<?php
class ajax extends controller{
    function show(){
        $ngaynhap = date("Y-m-d H:i:s");
        echo $ngaynhap; 
    }
    // tai khoan
    function dangky(){ 
        $tendangnhap = $_POST["tendangnhap"];
        $matkhau = $_POST["matkhau"];      
        $email = $_POST["email"];   
        $quyen = $_POST["quyen"];
        $ngaythamgia = date("Y-m-d");
        $matkhau = md5($matkhau);

        $model = $this->call_model("taikhoanModel");
        echo $model->dangky($tendangnhap,$matkhau,$email,$quyen,$ngaythamgia);
    }
    function dangnhap(){
        // echo "VAO DANG NHAP AJAX";
        $tendangnhap = $_POST["tendangnhap"];
        $matkhau = $_POST["matkhau"];      

        $matkhau = md5($matkhau);

        $productModel = $this->call_model("productModel");
        $model = $this->call_model("taikhoanModel");
        echo $model->dangnhap($tendangnhap,$matkhau,$productModel);
    }
    function checkAcount(){
        $tendangnhap = $_POST["tendangnhap"];

        $model = $this->call_model("taikhoanModel");
        echo $model->checkAcount($tendangnhap);
    }
    function updateAcount(){
        $tendangnhap = $_SESSION["username"];
        $tennguoidung = $_POST["tennguoidung"];
        $diachi = $_POST["diachi"];
        $sodienthoai = $_POST["sodienthoai"];
        $email = $_POST["email"];

        $model = $this->call_model("taikhoanModel");
        echo $model->updateAcount($tennguoidung,$diachi,$sodienthoai,$email,$tendangnhap);
    }
    function updatePassword(){
        $tendangnhap = $_SESSION["username"];
        $matkhau = $_POST["matkhau"];
        
        $matkhau = md5($matkhau);
        
        $model = $this->call_model("taikhoanModel");
        if($model->updatePassword($tendangnhap,$matkhau)){
            $_SESSION["password"] = $matkhau;
            echo true;
        }else{
            echo false;
        }
    }
    function insertAddressShipping(){
        $tendangnhap = $_SESSION["username"];
        $tentinh = $_POST["tentinh"];
        $tenhuyen = $_POST["tenhuyen"];
        $tenxa = $_POST["tenxa"];
        $sodienthoaigh = $_POST["sodienthoaigh"];
        $diachichitiet = $_POST["diachichitiet"];
        $model = $this->call_model("taikhoanModel");
        echo $model->insertAddressShipping($tendangnhap,$tentinh,$tenhuyen,$tenxa,$diachichitiet,$sodienthoaigh);
    }
    function deleteAddressShipping(){
        $madiachigiaohang = $_POST["madiachigiaohang"];
        $model = $this->call_model("taikhoanModel");
        echo $model->deleteAddressShipping($madiachigiaohang);
    }
    function editAddressShipping(){
        $tentinh = $_POST["tentinh"];
        $tenhuyen = $_POST["tenhuyen"];
        $tenxa = $_POST["tenxa"];
        $diachichitiet = $_POST["diachichitiet"];
        $sodienthoaigh = $_POST["sodienthoaigh"];
        $madiachigiaohang = $_POST["madiachigiaohang"];
        $madiachigiaohang = intval($madiachigiaohang);
        $model = $this->call_model("taikhoanModel");
        echo $model->editAddressShipping($tentinh,$tenhuyen,$tenxa,$diachichitiet,$madiachigiaohang,$sodienthoaigh);
    }
    function getSoLuongTrongGioHang(){
        $model = $this->call_model("taikhoanModel");
        $_SESSION["soluongtronggiohang"] = $model->getSoLuongTrongGioHang($_SESSION["username"]."-gh");
        echo $_SESSION["soluongtronggiohang"];
    }
    function getSecSionSoLuongTrongGioHang(){
        if(isset($_SESSION["soluongtronggiohang"])){
            echo $_SESSION["soluongtronggiohang"];
        }else{
            echo false ;
        }
    }
        // cart
    function addProductInCart(){
        $masp = $_POST["masp"];
        $soluong = $_POST["soluong"];
        $soluong = intval($soluong);
        $model = $this->call_model("productModel");
        echo $model->addProductInCart($masp,$soluong);
    }
    function checklogin(){
        if(isset($_SESSION["username"]) && isset($_SESSION["quyen"])){
            if($_SESSION["quyen"] == 0){
                echo true ;
            }else{
                echo false;
            }
        }else{
            echo false;
        }
    }
    function updateDetailOfCart(){
        $masp = $_POST["masp"];
        $soluong = intval($_POST["soluong"]);
        $magiohang = $_SESSION["username"] . "-gh";
        $model = $this->call_model("productModel");
        echo $model->updateInDetailCart($masp, $magiohang, $soluong);
    }
    function deleteInDetailCart(){
        $masp = $_POST["masp"];
        $magiohang = $_SESSION["username"] . "-gh";
        $model = $this->call_model("productModel");
        echo $model->deleteInDetailCart($masp, $magiohang);        
    }
    function updateSanPham(){
        $masp = $_POST["masp"];
        $soluongsp = $_POST["soluongsp"];
        $model = $this->call_model("productModel");
        echo $model->updateSanPham($masp,$soluongsp);
    }
    function setProductToPayment(){
        if(isset($_POST["arr"])){
            $arr = $_POST["arr"];
            $_SESSION["thanhtoan"] = $arr; 
            echo true;
        }else{
            echo false;
        }
    }
        // thanh toan
    function thanhtoan(){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $tendangnhap = $_SESSION["username"];
        $ngaymua = date("Y-m-d");
        $diachigiaohang = $_POST["diachigiaohang"];
        $arr = $_POST["arr"];
        $sodienthoaigh = $_POST["sodienthoaigh"];
        $model = $this->call_model("taikhoanModel");
        $productModel = $this->call_model("productModel");
        echo $model->thanhtoan($tendangnhap,$ngaymua,$diachigiaohang,$arr,$productModel,$sodienthoaigh);
    }
        // kiem tra da mua chua
    function checkSell(){
        $tendangnhap = $_SESSION["username"]; 
        $masp = $_POST["masp"];
        $model = $this->call_model("taikhoanModel");
        echo $model->checkSell($tendangnhap,$masp);
    }
        // danh gia san pham
    function danhgia(){
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        $masp = $_POST["masp"];
        $tendangnhap = $_SESSION["username"];
        $ngaydanggia = date("Y-m-d");
        $sosao = $_POST["sosaodanhgia"];
        $noidung = $_POST["inputDanhgia"];
        $model = $this->call_model("taikhoanModel");
        echo $model->danhgia($masp,$tendangnhap,$noidung,$sosao,$ngaydanggia);
    }
        // danh gia nhan vie 
    function danhGiaVeNhanVien(){
        $mahd = $_POST["mahd"];
        $danhgiacuakhachhang = $_POST["danhgiacuakhachhang"];
        $model = $this->call_model("taikhoanModel");
        echo $model->danhGiaVeNhanVien($mahd,$danhgiacuakhachhang);
    }
        // upload file 
    function uploadfile(){
       $model = $this->call_model("uploadModel");
       $model->uploadImg();
    }
        // gui mail
    function GuiMail(){
        $model = $this->call_model("guiMailModel");
        $tieude = $_POST["tieude"];
        $diachigui = $_POST["diachigui"];
        $bodyconten = $_POST["bodyconten"]; 
        $url = $_POST["linkanh"];
        if($model->sendMail($tieude,$diachigui,$bodyconten,$url)){
            if(unlink($url)){
                echo true ;
            }else{
                echo false;
            }
        }

    }
    function selectProductWhereMasp(){
        $masp = $_POST["masp"];
        $model = $this->call_model("productModel");
        echo $model->SelectProductWhereMasp($masp);
    }
    // san pham
    function addProduct(){
        $tensp = $_POST["tensp"];
        $giatien = $_POST["giatien"];
        $loaisanpham = $_POST["loaisanpham"];
        $motasanpham = $_POST["motasanpham"];
        $linkduongdananh = $_POST["linkduongdananh"];
        $hangsx = $_POST["hangsanxuat"];
        $dunglamslider = $_POST["dunglamslider"];
        $soluongsp = $_POST["soluong"];
        $ngaynhap = date("Y-m-d");
        $model = $this->call_model("productModel");
        echo $model->AddProduct($tensp,$giatien,$loaisanpham,$motasanpham,$linkduongdananh,$hangsx,$dunglamslider,$soluongsp,$ngaynhap);
    }
    function updateProduct(){
        $masp = $_POST["masp"];
        $tensp = $_POST["tensp"];
        $giatien = $_POST["giatien"];
        $loaisanpham = $_POST["loaisanpham"];
        $motasanpham = $_POST["motasanpham"];
        $linkduongdananh = $_POST["linkduongdananh"];
        $hangsx = $_POST["hangsanxuat"];
        $dunglamslider = $_POST["dunglamslider"];
        $soluongsp = $_POST["soluong"];
        $ngaynhap = date("Y-m-d");
        $model = $this->call_model("productModel");
        echo $model->updateProduct($masp,$tensp,$giatien,$loaisanpham,$motasanpham,$linkduongdananh,$hangsx,$dunglamslider,$soluongsp,$ngaynhap);
    }
    function deleteProduct(){
        $masp = $_POST["masp"];
        $model = $this->call_model("productModel");
        echo $model->deleteProduct($masp);
    }
    // nhan vien
    function setCongViec(){
        $macv = $_POST["macv"];
        $tendangnhap = $_SESSION["username"];
        $thoigiannhancongviec = date("Y-m-d H:i:s");
        $danhancv = 1;
        $tiendo = 0 ;
        $model = $this->call_model("nhanvienModel");
        echo $model->setCongViec($macv,$tendangnhap,$thoigiannhancongviec,$danhancv,$tiendo);
    }
    function xacNhanXongCongViec(){
        $macv = $_POST["macv"];
        $thoigianxongcongviec = date("Y-m-d H:i:s");
        $model = $this->call_model("nhanvienModel");
        $tiendo = 1 ;
        $danhgiacuakhachhang = 0 ;
        echo $model->xacNhanXongCongViec($macv,$thoigianxongcongviec,$tiendo,$danhgiacuakhachhang);
    }
}
?>