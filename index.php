<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    session_start();
    require_once "./mvc/bridge.php";
    new app();//
    // call xampp ==> docker run --name myXampp -p 41061:22 -p 80:80 -d -v /media/lql/E/Code/Code_Php/DoAnCoSo2/:/www tomsik68/xampp
    // start ==> docker start be70629c0331 

?>