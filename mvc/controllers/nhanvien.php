<?php
class nhanvien extends controller{
    function __construct(){
        $this->check_user_quyen(2);
    }
    function show(){
        $model = $this->call_model("nhanvienModel");
        $this->call_view("nhanVienView",[
            "title"=>"indexPage",
            "nhanVienModel"=>$model
        ]);
    }
    function congviecmoi(){
        $model = $this->call_model("nhanvienModel");
        $this->call_view("nhanVienView",[
            "title"=>"congviecmoi",
            "nhanVienModel"=>$model
        ]);
    }
    function congviecdangcho(){
        $model = $this->call_model("nhanvienModel");
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("nhanVienView",[
            "title"=>"congviecdangcho",
            "nhanVienModel"=>$model,
            "taikhoanModel"=>$taikhoanModel,
        ]);        
    }
    function congviecdahoanthanh(){
        $model = $this->call_model("nhanvienModel");
        $this->call_view("nhanVienView",[
            "title"=>"congviecdahoanthanh",
            "nhanVienModel"=>$model,
        ]);        
    }
    // thong tin ca nhan
    function quanlythongtin(){
        $taikhoanModel = $this->call_model("taikhoanModel");
        $this->call_view("nhanVienView",[
            "title"=>"quanlythongtin",
            "taikhoanModel"=>$taikhoanModel,
        ]);
    }
    // luong
    function quanlyluong(){
        $model = $this->call_model("nhanvienModel");
        $this->call_view("nhanVienView",[
            "title"=>"quanlyluong",
            "nhanVienModel"=>$model
        ]);
    }
}
?> 