<?php
class homeModel extends connectDB{
    // Function Support Database
    function GetProcduct(){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    function SelectTypeProduct($loaisanpham){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE loaisanpham=:loaisanpham";
        $query = $conn->prepare($sql);
        $query->bindParam(":loaisanpham",$loaisanpham);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }        
    }
    function SelectThuMucSanPham(){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM thumucsanpham";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }              
    }
    function SelectSlider(){
        $slider = 1 ;
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE dunglamslider=:dunglamslider";
        $query = $conn->prepare($sql);
        $query->bindParam(":dunglamslider",$slider);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    // Function Support View 
}
