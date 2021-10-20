<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="http://localhost/www/publicAdmin/images/favicon.ico">

    <link href="http://localhost/www/publicAdmin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="http://localhost/www/publicAdmin/plugins/morris/morris.css">

    <!--calendar css-->
    <link href="http://localhost/www/publicAdmin/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

    <link href="http://localhost/www/publicAdmin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/www/publicAdmin/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/www/publicAdmin/css/icons.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/www/publicAdmin/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <?php require_once "blockAdmin/topbar.php";?>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <?php require_once "blockAdmin/leftSlidebarStart.php"?>
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
            <!-- Start content -->
            <?php require_once "pageAdmin/indexPage.php";?>
            <!-- content -->

            <footer class="footer">
                <?php require_once "blockAdmin/footer.php";?>
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
    <?php require_once "blockAdmin/jslink.php";?>

</body>

</html>