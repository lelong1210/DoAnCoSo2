<?php 
class adminModel extends connectDB{
    function getReview(){
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
}
?>