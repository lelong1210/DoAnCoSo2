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
        function chatPage($params){
            $model = $this->call_model("chatModel");
            $this->call_view("adminView",[
                "title"=>"chatPage",
                "chatModel"=>$model
            ]);
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
        function suasanpham($params){
            $productModel = $this->call_model("productModel");
            $this->call_view("adminView",[
                "title"=>"suasanpham",
                "productModel"=>$productModel
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