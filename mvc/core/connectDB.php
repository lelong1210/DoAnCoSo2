<?php
class connectDB{
    /*DB : id17847625_dacs2
USER : id17847625_root
PASS : 7R*New4uW2Kxb5|^*/
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "DaCoSo2";
    protected $conn ; 
    protected $linktuyetdoi = "http://localhost/www/";
    function __construct(){
        try{
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           //echo "connect success";   
        }catch(Exception $e){
           // echo "fault => ".$e->getMessage();
        }
    }
    // function connecDB(){
    //     try{
    //         $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
    //         $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //        //echo "connect success";   
    //     }catch(Exception $e){
    //        // echo "fault => ".$e->getMessage();
    //     }        
    // }
    function GetConn(){
        return $this->conn;
    }
}
?>
