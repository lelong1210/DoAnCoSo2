<?php
    class pageAdmin extends controller{
        function show(){
            
        }
        function calenderPage(){
            $this->call_view_page_admin("calenderPage");
            $this->call_block_view_admin("jslink");
        }
        function addProductPage(){
            $this->call_view_page_admin("addProductPage");
            $this->call_block_view_admin("jslink");
        }
        function seeOverviewProduct(){
            $productModel = $this->call_model("productModel");
            $this->call_view_page_admin("overViewProduct",[
                "productModel"=>$productModel
            ]);
            $this->call_block_view_admin("jslink");
        }
    }
?>