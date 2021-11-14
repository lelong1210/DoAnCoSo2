<?php
class chatModel extends connectDB{
    protected $countMes = 0 ;
    function chat($tendangnhap,$matinnhan,$noidung,$thoigiannhan){
        if($this->checkMaTN($matinnhan)){
            if($this->insertToCtTN($matinnhan,$noidung,$thoigiannhan,$tendangnhap)){
                return true;
            }return false;
        }else{
            if($this->insertToTN($tendangnhap,$matinnhan)){
                if($this->insertToCtTN($matinnhan,$noidung,$thoigiannhan,$tendangnhap)){
                    return true;
                }return false;
            }return false;
        }
    }
    function getTN($matinnhan){
        $conn = $this->GetConn();
        $sql = "SELECT machitiettinnhan,tinnhan.matinnhan,noidung,thoigiannhan, nguoinhan , nguoidung.tennguoidung
                FROM ((tinnhan INNER JOIN chitiettinnhan ON tinnhan.matinnhan = chitiettinnhan.matinnhan) 
                          INNER JOIN nguoidung ON chitiettinnhan.nguoinhan = nguoidung.tendangnhap)
                WHERE tinnhan.matinnhan = :matinnhan";
        $query = $conn->prepare($sql);
        $query->bindParam(":matinnhan",$matinnhan);
        $query->execute();
        if($query->rowCount() > 0){
            $this->countMes = $query->rowCount();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }        
    }
    function checkMaTN($matinnhan){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM tinnhan WHERE matinnhan = :matinnhan";
        $query = $conn->prepare($sql);
        $query->bindParam(":matinnhan",$matinnhan);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }
    }
    function insertToTN($tendangnhap,$matinnhan){
        $conn = $this->GetConn();
        $sql = "INSERT INTO tinnhan(matinnhan, tendangnhap) VALUES (:matinnhan,:tendangnhap)";
        $query = $conn->prepare($sql);
        $query->bindParam(":tendangnhap",$tendangnhap);
        $query->bindParam(":matinnhan",$matinnhan);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    function insertToCtTN($matinnhan,$noidung,$thoigiannhan,$nguoinhan){
        $conn = $this->GetConn();
        $sql = "INSERT INTO chitiettinnhan(matinnhan, noidung, thoigiannhan, nguoinhan) VALUES (:matinnhan, :noidung, :thoigiannhan, :nguoinhan)";
        $query = $conn->prepare($sql);
        $query->bindParam(":matinnhan",$matinnhan);
        $query->bindParam(":noidung",$noidung);
        $query->bindParam(":thoigiannhan",$thoigiannhan);
        $query->bindParam(":nguoinhan",$nguoinhan);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        } 
    }
    function check_newMess($matinnhan,$tendangnhap){
        $arr = json_decode($this->getMessLast($matinnhan));
        $arr = array_values((array)$arr[0]);
        $countMessNew = $arr[0];
        // echo $countMessNew;
        echo $arr[0]."<--";
        if($this->countMes < $countMessNew){
            // $this->countMes = $countMessNew;
            return true;
        }return false;
    }
    function getMessLast($matinnhan){
        $conn = $this->GetConn();
        $sql = "SELECT COUNT(chitiettinnhan.noidung) 
                FROM chitiettinnhan 
                WHERE chitiettinnhan.matinnhan = :matinnhan ";
        $query = $conn->prepare($sql);
        $query->bindParam(":matinnhan",$matinnhan);
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
<!-- SELECT thoigiannhan FROM `chitiettinnhan` WHERE thoigiannhan > '2021-11-14 11:1:49' -->