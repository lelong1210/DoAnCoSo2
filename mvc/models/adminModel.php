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
}
?>