<?php
    class admin extends controller{
        function __construct(){
            $this->check_user_quyen(1);
        }
        function show($params){
            $this->call_view("adminView",[
                "title"=>"overView"
            ]);
        }
        function calendar($params){
            echo "celendar";
        }
        // sản phẩm
        function xemsanpham($params){
            $productModel = $this->call_model("productModel");
            $this->call_view("adminView",[
                "title"=>"xemsanpham",
                "productModel"=>$productModel
            ]);
        }
        function themsanpham($params){
            $this->call_view("adminView",[
                "title"=>"themsanpham",
            ]);
        }
        // người dùng
        function xemnguoidung(){
            $taikhoanModel = $this->call_model("taikhoanModel");
            $this->call_view("adminView",[
                "title"=>"xemnguoidung",
                "taikhoanModel"=>$taikhoanModel
            ]);
        }
        function themnguoidung(){
            $this->call_view("adminView",[
                "title"=>"themnguoidung",
            ]);
        }
        /*https://projectdacs2.000webhostapp.com/*/
    }
?>