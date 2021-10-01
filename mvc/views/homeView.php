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
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                            <div class="row">
                                <?php $data["homeModel"]->ShowProduct();?>
                            </div>
                        </div>
                    </div>
                </div>
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