<?php
class chatModel extends connectDB{
    protected $countMes = 0 ;
    function chat($tendangnhap,$matinnhan,$noidung,$thoigiannhan){
        if($this->checkMaTN($matinnhan)){
            if($this->insertToCtTN($matinnhan,$noidung,$thoigiannhan,$tendangnhap)){
                $this->updateTimeLastInTN($matinnhan,$thoigiannhan);
                return true;
            }return false;
        }else{
            if($this->insertToTN($tendangnhap,$matinnhan)){
                if($this->insertToCtTN($matinnhan,$noidung,$thoigiannhan,$tendangnhap)){
                    $this->updateTimeLastInTN($matinnhan,$thoigiannhan);
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
    function check_newMess($matinnhan,$tendangnhap,$thoigiannhan){
        $result = $this->getMessLast($matinnhan,$tendangnhap,$thoigiannhan);
        if($result){
            return $result;
        }return false;
    }
    function getMessLast($matinnhan,$nguoinhan,$thoigiannhan){
        $conn = $this->GetConn();
        $sql = "SELECT machitiettinnhan,tinnhan.matinnhan,noidung,thoigiannhan, nguoinhan , nguoidung.tennguoidung
                FROM ((tinnhan INNER JOIN chitiettinnhan ON tinnhan.matinnhan = chitiettinnhan.matinnhan) 
                            INNER JOIN nguoidung ON chitiettinnhan.nguoinhan = nguoidung.tendangnhap)
                WHERE thoigiannhan > :thoigiannhan AND nguoinhan != :nguoinhan AND tinnhan.matinnhan = :matinnhan
                ORDER BY thoigiannhan ASC";
        $query = $conn->prepare($sql);
        $query->bindParam(":matinnhan",$matinnhan);
        $query->bindParam(":thoigiannhan",$thoigiannhan);
        $query->bindParam(":nguoinhan",$nguoinhan);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }            
    }
    function updateTimeLastInTN($matinnhan,$thoigiannhancuoicung){
        $conn = $this->GetConn();
        $sql = "UPDATE tinnhan SET thoigiannhancuoicung = :thoigiannhancuoicung WHERE tinnhan.matinnhan = :matinnhan";
        $query = $conn->prepare($sql);
        $query->bindParam(":thoigiannhancuoicung",$thoigiannhancuoicung);
        $query->bindParam(":matinnhan",$matinnhan);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    // admin
    function getListTN(){
        $conn = $this->GetConn();
        $sql = "SELECT tinnhan.matinnhan , nguoidung.tennguoidung ,tinnhan.thoigiannhancuoicung
                FROM tinnhan 
                INNER JOIN nguoidung ON tinnhan.tendangnhap = nguoidung.tendangnhap
                ORDER BY tinnhan.thoigiannhancuoicung DESC ";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }else{
            return false;
        }   
    }
    function getNameUserMess($matinnhan){
        $conn = $this->GetConn();
        $sql = "SELECT nguoidung.tennguoidung 
                FROM tinnhan INNER JOIN nguoidung ON tinnhan.tendangnhap = nguoidung.tendangnhap
                WHERE tinnhan.matinnhan = :matinnhan";
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
