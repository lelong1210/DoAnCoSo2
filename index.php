<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    session_start();
    require_once "./mvc/bridge.php";
    new app();//
    /*
        # DoAnCoSo2
        khi tải về nhớ đổi tên thư mục gốc từ "DoAnCoSo2*" thành "www" để code có thể nhận js , css 
        nhập thông tin gmail và mật khẩu tại : /mvc/models/guiMailModel.php tại các dòng 15,16,50,51
    */
?>