<?php
    class admin extends controller{
        function __construct(){
            $this->check_user_quyen(1);
        }
        function show($params){
            $model = $this->call_model("adminModel");
            $this->call_view("adminView",[
                "title"=>"overView",
                "adminModel"=>$model
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
        // admin 
        function quanlythongtin(){
            $taikhoanModel = $this->call_model("taikhoanModel");
            $this->call_view("adminView",[
                "title"=>"quanlythongtin",
                "taikhoanModel"=>$taikhoanModel,
            ]);
        }
        // danh gia khach hang 
        function danhgiacuakhachhang(){
            $productModel = $this->call_model("productModel");
            $this->call_view("adminView",[
                "title"=>"danhgiacuakhachhang",
                "productModel"=>$productModel
            ]);
        }
        // nhan vien
        function xemnhanvien(){ 
            $taikhoanModel = $this->call_model("taikhoanModel");
            $model = $this->call_model("adminModel");
            $nhanvienmodel = $this->call_model("nhanvienModel");
            $this->call_view("adminView",[
                "title"=>"nhanvienViewPage",
                "taikhoanModel"=>$taikhoanModel,
                "adminModel"=>$model,
                "nhanVienModel"=>$nhanvienmodel
            ]); 
        }
        // hoa don
        function xemhoadon(){ 
            $taikhoanModel = $this->call_model("taikhoanModel");
            $model = $this->call_model("adminModel");
            $nhanvienmodel = $this->call_model("nhanvienModel");
            $this->call_view("adminView",[
                "title"=>"xemhoadon",
                "taikhoanModel"=>$taikhoanModel,
                "adminModel"=>$model,
                "nhanVienModel"=>$nhanvienmodel
            ]); 
        }
        /*https://projectdacs2.000webhostapp.com/*/
    }
?>