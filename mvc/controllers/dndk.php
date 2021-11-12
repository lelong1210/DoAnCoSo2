<?php
class dndk extends controller
{
    function __construct()
    { }
    function show()
    {
        if (isset($_SESSION["username"])) {
            header("Location:/www/taikhoan");
        } else {
            $model = $this->call_model("taikhoanModel");
            $this->call_view("dangKyDangNhapView", [
                "taikhoanModel" => $model
            ]);
        }
    }
}
?>