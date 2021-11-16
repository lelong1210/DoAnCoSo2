<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "blockNhanVien/head.php";?>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <?php require_once "blockNhanVien/topbar.php"; ?>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <?php require_once "blockNhanVien/leftSlidebarStart.php" ?>
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
                    if($data["title"] == "congviecmoi"){
                        require_once "pageNhanVien/congviecmoiPage.php";
                    }
                    else if($data["title"] == "congviecdangcho"){
                        require_once "pageNhanVien/congviecdangchoPage.php";
                    }else if($data["title"] == "quanlythongtin"){
                        require_once "pageNhanVien/manageInFo.php";
                    }
                    // else if($data["title"] == "xemnguoidung"){
                    //     require_once "pageAdmin/overViewUser.php";
                    // }else if($data["title"] == "themnguoidung"){
                    //     require_once "pageAdmin/addUserPage.php";
                    // }else{
                    //     require_once "pageAdmin/indexPage.php"; 
                    // } 
                    
                
                ?>
                <!-- content -->
            </div>

            <footer class="footer">
                <?php require_once "blockNhanVien/footer.php"; ?>
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <?php require_once "blockNhanVien/jslink.php"; ?>

</body>

</html>