<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once "block/head.php"; ?>
</head>

<body>
    <!-- Header Area start  -->
    <header>
        <?php require_once "block/header.php"; ?>
        <?php require_once "block/headerMobile.php"; ?>
    </header>
    <!-- Hero/Intro Slider Start -->
    <?php require_once "block/slider.php"; ?>
    <!-- Hero/Intro Slider End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area">
        <div class="container">
            <div class="contentProduct" id="contentProduct">
                <?php
                    $data["homeModel"]->ShowTypeProduct(); 
                ?>
            </div>
        </div>
    </div>
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->


    <!-- Modal -->
    <?php require_once "block/model.php"; ?>
    <!-- Modal end -->

    <?php require_once "block/jslink.php"; ?>
</body>

</html>