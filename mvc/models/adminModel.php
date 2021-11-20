<?php 
class adminModel extends connectDB{
    function getReview($masp){
        $conn = $this->GetConn();
        $sql = "SELECT thongtinnhanxetsanpham.manhanxet , thongtinnhanxetsanpham.masp , nguoidung.tennguoidung , thongtinnhanxetsanpham.noidung , thongtinnhanxetsanpham.ngaydanggia
        FROM thongtinnhanxetsanpham INNER JOIN nguoidung ON thongtinnhanxetsanpham.tendangnhap = nguoidung.tendangnhap
        WHERE thongtinnhanxetsanpham.masp = :masp";
        $query = $conn->prepare($sql);
        $query->bindParam(":masp",$masp);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }
    }
    function getphReview($manhanxet){
        $conn = $this->GetConn();
        $sql = "SELECT phanhoidanhgia.manhanxet , nguoidung.tennguoidung , phanhoidanhgia.noidungphanhoi , phanhoidanhgia.ngayphanhoi 
        FROM phanhoidanhgia INNER JOIN nguoidung ON phanhoidanhgia.tendangnhap = nguoidung.tendangnhap
        WHERE phanhoidanhgia.manhanxet = :manhanxet";
        $query = $conn->prepare($sql);
        $query->bindParam(":manhanxet",$manhanxet);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }        
    }
    function insertPhanHoi($manhanxet,$tendangnhap,$noidungphanhoi,$ngayphanhoi){
        $conn = $this->GetConn();
        $sql = "INSERT INTO phanhoidanhgia(manhanxet, tendangnhap, noidungphanhoi, ngayphanhoi) VALUES (:manhanxet,:tendangnhap,:noidungphanhoi,:ngayphanhoi)";
        $query = $conn->prepare($sql);
        $query->bindParam(":manhanxet",$manhanxet);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":noidungphanhoi",$noidungphanhoi);
        $query->bindParam(":ngayphanhoi",$ngayphanhoi);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function updatePhaHoi($manhanxet,$tendangnhap,$noidungphanhoi,$ngayphanhoi){
        $conn = $this->GetConn();
        $sql = "UPDATE phanhoidanhgia SET noidungphanhoi = :noidungphanhoi , ngayphanhoi = :ngayphanhoi WHERE phanhoidanhgia.manhanxet = :manhanxet AND phanhoidanhgia.tendangnhap = :tendangnhap";
        $query = $conn->prepare($sql);
        $query->bindParam(":manhanxet",$manhanxet);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":noidungphanhoi",$noidungphanhoi);
        $query->bindParam(":ngayphanhoi",$ngayphanhoi);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function checkPhanHoi($manhanxet,$tendangnhap){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM phanhoidanhgia WHERE phanhoidanhgia.tendangnhap = :tendangnhap AND phanhoidanhgia.manhanxet = :manhanxet";
        $query = $conn->prepare($sql);
        $query->bindParam(":manhanxet",$manhanxet);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    // thong ke 
    function getTongTienThu(){
        $conn = $this->GetConn();
        $sql = "SELECT SUM(chitiethoadon.soluong*sanpham.giatien) AS tongtienThu
        FROM sanpham INNER JOIN chitiethoadon ON sanpham.masp = chitiethoadon.masp";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }        
    }
    function getTongTienChi(){
        $conn = $this->GetConn();
        $sql = "SELECT SUM(luong.soluong) FROM luong ";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }  
    }
    function getKhachHang(){
        $conn = $this->GetConn();
        $sql = "SELECT COUNT(nguoidung.tendangnhap) FROM nguoidung WHERE nguoidung.quyen = 0";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }  
    }
    function getSanPhamDaBan(){
        $conn = $this->GetConn();
        $sql = "SELECT SUM(chitiethoadon.soluong) AS sosanphamdaban FROM chitiethoadon";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }  
    }
    function xulyArr($arr){
        $arr = array_values((array)$arr[0]);
        $arr = $arr[0];
        return $arr ;
    }
    function getDoanhThu1Thang($thang){
        $conn = $this->GetConn();
        $sql = "SELECT SUM(chitiethoadon.soluong * sanpham.giatien) AS tongdoanhthuthang
                FROM ((congviec INNER JOIN chitiethoadon ON congviec.mahoadon = chitiethoadon.mahoadon) 
                                INNER JOIN sanpham ON chitiethoadon.masp = sanpham.masp)
                WHERE MONTH(congviec.thoigianxongcongviec) = :thang";
        $query = $conn->prepare($sql);
        $query->bindParam(":thang",$thang);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }  
    }
    function getDoanhThu12Thang(){
        $arr = [];
        for ($i=1; $i <= 12; $i++) { 
            $arr[] = json_decode($this->getDoanhThu1Thang($i));
        }
        return json_encode($arr);
    }
    // list nhan vien 
    function getNhanVien(){
        $conn = $this->GetConn();
        $sql = "SELECT nguoidung.tendangnhap , nguoidung.tennguoidung FROM nguoidung WHERE nguoidung.quyen = 2";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }  
    }
    // list nhan vien chi tiet 
    function getNhanVienDetail($tendangnhap){
        $conn = $this->GetConn();
        $sql = "SELECT nguoidung.tendangnhap , nguoidung.tennguoidung , nguoidung.sodienthoai , nguoidung.diachi , nguoidung.email 
        FROM nguoidung
        WHERE nguoidung.tendangnhap = :tendangnhap";
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
}
?>