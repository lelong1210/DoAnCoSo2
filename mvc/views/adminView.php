<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "blockAdmin/head.php";?>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <?php require_once "blockAdmin/topbar.php"; ?>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <?php require_once "blockAdmin/leftSlidebarStart.php" ?>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page" id="content-page">
            <div id="contetMain">
                <!-- Start content -->
                <?php
                    if($data["title"] == "xemsanpham"){
                        require_once "pageAdmin/overViewProduct.php";
                    }else if($data["title"] == "themsanpham"){
                        require_once "pageAdmin/addProductPage.php";
                    }else if($data["title"] == "xemnguoidung"){
                        require_once "pageAdmin/overViewUser.php";
                    }else if($data["title"] == "themnguoidung"){
                        require_once "pageAdmin/addUserPage.php";
                    }else if($data["title"] == "chatPage"){
                    ?>
                        <link href="/www/publicAdmin/css/styleCustomChat.css" rel="stylesheet">
                    <?php
                        require_once "pageAdmin/chatPage.php";
                    }else if($data["title"] == "suasanpham"){
                        require_once "pageAdmin/updateProductPage.php";
                    }else if($data["title"] == "quanlythongtin"){
                        require_once "pageAdmin/manageInFo.php";
                    }else if($data["title"] == "danhgiacuakhachhang"){
                        require_once "pageAdmin/replyReviewPage.php";
                    }else if($data["title"] == "nhanvienViewPage"){
                        require_once "pageAdmin/nhanvienViewPage.php";
                    }else{
                        require_once "pageAdmin/indexPage.php"; 
                    }
                    
                
                ?>
                <!-- content -->
            </div>

            <footer class="footer">
                <?php require_once "blockAdmin/footer.php"; ?>
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <?php require_once "blockAdmin/jslink.php"; ?>
    <script>
        
    </script>
</body>

</html>