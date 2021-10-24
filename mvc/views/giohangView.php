<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once "block/head.php"; ?>
    <title>Giỏ Hàng</title>
</head>

<body>
    <!-- Header Area start  -->
    <header>
        <?php require_once "block/header.php"; ?>
        <?php require_once "block/headerMobile.php"; ?>
    </header>
    <!-- Header Area End  -->
    <div class="contentGH" id="contentGH">
        <?php require_once "page/giohangPage.php"; ?>
    </div>
    

    <!-- Footer Area Start -->
    <div class="ds" id="conn"></div>
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
</body>

</html>