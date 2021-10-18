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
            <?php require_once "blockAdmin/topbar.php"?>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php require_once "blockAdmin/leftSlidebarStart.php"?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page" id="content-page">
            <?php require_once "pageAdmin/indexpage.php"?>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
        <?php require_once "blockAdmin/jslink.php";?>
</body>

</html>