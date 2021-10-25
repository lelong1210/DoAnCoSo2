<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once "block/head.php"; ?>
    <title>Trang Chủ</title>
</head>

<body>
    <!-- Header Area start  -->
    <header>
        <?php require_once "block/header.php"; ?>
        <?php require_once "block/headerMobile.php"; ?>
    </header>
    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                    <?php $data["homeModel"]->ShowSlider();?>
                <!-- Single slider item -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area gbcus">
        <div class="container">
            <!-- <div class="contentProduct" id="contentProduct"> -->
            <?php
            $data["homeModel"]->ShowTypeProduct();
            ?>
            <!-- </div> -->
        </div>
    </div>
    <button id="test">CLICK</button>
    <div class="conn" id="conn"></div>
    <select id="tentinh"></select>
    <select id="tenhuyen"></select>
    <select id="tenxa"></select>
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>

</body>

</html>