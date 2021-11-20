<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once "block/head.php";
    if (isset($_GET['code'])) {
        require_once "./mvc/google/vendor/autoload.php";
        // init configuration
        $clientID = '892983593171-fue6cco6othcpsp4jdrrde3ctijtur1i.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://localhost/www/';

        // create Client Request to access Google API
        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        $_SESSION['code'] = $_GET['code'];
        if (isset($_SESSION['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_SESSION['code']);
            $client->setAccessToken($token['access_token']);

            // get profile info
            $google_oauth = new Google_Service_Oauth2($client);
            $google_account_info = $google_oauth->userinfo->get();
            $email =  $google_account_info->email;
            $name =  $google_account_info->name;
            //
            $tendangnhap = $email;
            $ngaythamgia = date("Y-m-d");
            $matkhau = "";
            if ($data["taikhoanModel"]->checkAcount($tendangnhap)) {
                $data["taikhoanModel"]->dangnhap($tendangnhap, $matkhau);
            } else {
                if ($data["taikhoanModel"]->dangky($tendangnhap, "", $email, 0, $ngaythamgia)) {
                    $data["taikhoanModel"]->dangnhap($tendangnhap, $matkhau);
                }
            }
            unset($_SESSION['code']);
            header('Location: /www/dndk');
        }
    }
    ?>
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
                <?php $arr = json_decode($data["homeModel"]->SelectSlider());
                $arr = array_values((array) $arr);
                $count = count($arr);
                for ($i = 0; $i < $count; $i++) {
                    $arrChild = array_values((array) $arr[$i]); ?>
                    <div class='hero-slide-item slider-height swiper-slide d-flex'>
                        <div class='container align-self-center'>
                            <div class='row'>
                                <div class='col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center'>
                                    <div class='hero-slide-content slider-animated-1'>
                                        <span class='category'></span>
                                        <p><?php echo $arrChild[1] ?></p>
                                        <p></p>
                                        <a href="<?php echo $arrChild[3] . "/" . $arrChild[0] ?>" class='btn btn-lg btn-primary btn-hover-dark mt-5'>Mua Ngay</a>
                                    </div>
                                </div>
                                <div class='col-xl-6 col-lg-5 col-md-5 col-sm-5'>
                                    <div class='hero-slide-image'>
                                        <a href="<?php echo $arrChild[3] . "/" . $arrChild[0] ?>"><img src='<?php echo $arrChild[5] ?>' alt='' /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
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
            // $data["homeModel"]->ShowTypeProduct();
            $numberRepeact = 8;
            $arr = json_decode($data["homeModel"]->SelectThuMucSanPham());
            $arr = array_values((array) $arr);
            for ($i = 0; $i < count($arr); $i++) {
                $arrChild = array_values((array) $arr[$i]); ?>
                <!-- // $data["homeModel"]->ShowTiTle($arrChild); -->
                <div class='row'>
                    <div class='col-md-12 text-center' data-aos='fade-up'>
                        <div class='section-title mb-0'>
                            <a href='./$arrChild[1]'>
                                <h2 class='title'><?php echo mb_strtoupper($arrChild[2], 'UTF-8') ?></h2>
                            </a>
                            <p class='sub-title mb-6'></p>
                        </div>
                    </div>
                </div>
                <!-- // -->
                <!-- // $data["homeModel"]->ShowProduct(json_decode($data["homeModel"]->SelectTypeProduct($arrChild[1])),$numberRepeact); -->
                <div class='row'>
                    <div class="col">
                        <div class='tab-content'>
                            <div class='tab-pane fade show active' id='tab-product-new-arrivals'>
                                <div class='row'>
                                    <!-- // $data["homeModel"]->RepeatProduct($arr,$numberRepeact); -->
                                    <?php $arrTypeProduct = json_decode($data["homeModel"]->SelectTypeProduct($arrChild[1]));
                                        $arrTypeProduct = array_values((array) $arrTypeProduct);
                                        for ($j = 0; $j < $numberRepeact; $j++) {
                                            $arrChildTypeProduct = array_values((array) $arrTypeProduct[$j]); ?>
                                        <div class='col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6' data-aos='fade-up' data-aos-delay='200'>
                                            <!-- Single Prodect -->
                                            <div class='product'>
                                                <div class='thumb'>
                                                    <a href="<?php echo './' . $arrChildTypeProduct[3] . '/' . $arrChildTypeProduct[0] ?>" class='image'>
                                                        <img src='<?php echo $arrChildTypeProduct[5] ?>' />
                                                        <img class='hover-image' src='<?php echo $arrChildTypeProduct[5] ?>' />
                                                    </a>
                                                    <span class='badges'>
                                                        <span class='new'>New</span>
                                                    </span>
                                                    <button title='Add To Cart' class=' add-to-cart' id='btnMH<?php echo $arrChildTypeProduct[0] ?>'>Thêm Vào Giỏ Hàng</button>
                                                </div>
                                                <div class='content'>
                                                    <h5 class='title'><a href="<?php echo './' . $arrChildTypeProduct[3] . '/' . $arrChildTypeProduct[0] ?>"><?php echo $arrChildTypeProduct[1] ?></a></h5>
                                                    <span class='price'>
                                                        <span class='new'><?php echo number_format($arrChildTypeProduct[2]) ?> đ</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
            ?>
            <!-- </div> -->
        </div>
    </div>
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>

</body>

</html>