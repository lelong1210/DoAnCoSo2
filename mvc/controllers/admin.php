<?php
    class admin extends controller{
        function show(){
            $this->call_view("adminView",[
                "pageAdmin"=>"indexPage"
            ]);//==>
        }
        function addProduct(){
            $this->call_view("adminView",[
                "pageAdmin"=>"addProduct"
            ]);
        }
    }
?>