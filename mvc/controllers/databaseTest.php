<?php
    class databaseTest{
        // function show(){
        //     $servername = "localhost";
        //     $username = "root";
        //     $password = "";
        //     // $this->creatTable($servername,$username,$password,"my_guitar_shop2");
        //     $this->creatTable1($servername,$username,$password,"my_guitar_shop2");
        //     $conn = null;
        // }
        // function createDatabase($servername,$username,$password,$nameDB){
        //     try {
        //         $conn = new PDO("mysql:host=$servername", $username, $password);
        //         // set the PDO error mode to exception
        //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //         $sql = "CREATE DATABASE my_guitar_shop2";
        //         // use exec() because no results are returned
        //         $conn->exec($sql);
        //         echo "Database created successfully<br>";
        //         } catch(PDOException $e) {
        //         echo $sql . "<br>" . $e->getMessage();
        //     }
        // }
        // function creatTable($servername,$username,$password,$dbname){
        //     try {
        //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //         // set the PDO error mode to exception
        //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
        //         // sql to create table
        //         $sql = "CREATE TABLE customers(
        //             customerID INT,
        //             firstName varchar(60),
        //             lastName varchar(60)
        //         )";
              
        //         // use exec() because no results are returned
        //         $conn->exec($sql);
        //         echo "Table customers created successfully";
        //       } catch(PDOException $e) {
        //         echo $sql . "<br>" . $e->getMessage();
        //     }
        // }
        // function creatTable1($servername,$username,$password,$dbname){
        //     try {
        //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //         // set the PDO error mode to exception
        //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
        //         // sql to create table
        //         $sql = "CREATE TABLE orders(
        //             orderID     INT NOT NULL PRIMARY,
        //             custtomerID INT NOT NULL,
        //             orderNumber VARCHAR(50) NOT NULL,
        //             orderDate   DATE NOT NULL ,
        //             orderTotal DECIMAL(9,2),
        //             paymentTotal DECIMAL(9,2) DEFAULT 0 ,
        //             CONSTRAINT odersFKcustomer
        //                 FOREIGN KEY (customerID)


        //         )";
              
        //         // use exec() because no results are returned
        //         $conn->exec($sql);
        //         echo "Table orders created successfully";
        //       } catch(PDOException $e) {
        //         echo $sql . "<br>" . $e->getMessage();
        //     }            
        // }
    }
?>
