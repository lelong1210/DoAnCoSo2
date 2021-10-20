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
                <?php require_once "pageAdmin/indexPage.php"; ?>
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

</body>

</html>