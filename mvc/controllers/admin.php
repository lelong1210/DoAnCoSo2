<?php
    class admin extends controller{
        function __construct(){
            $this->check_user_quyen(1);
        }
        function show(){
            $this->call_view("adminView");
        }
        /*https://projectdacs2.000webhostapp.com/*/
    }
?>