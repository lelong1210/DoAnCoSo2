<!DOCTYPE html>
<html lang="zxx">
<head>
    <?php require_once "block/head.php"; ?>
</head>
<body style="color:red">
    <!-- Header Area start  -->
    <header>
        <?php require_once "block/header.php"; ?>
        <?php require_once "block/headerMobile.php"; ?>
    </header>
    <!-- Hero/Intro Slider Start -->
    <!-- Hero/Intro Slider End -->
        <?php 
            if($data["title"] == "overView"){
                require_once "page/productOverview.php";
            }else{
                require_once "page/prductDetail.php";
            }
        ?>
    <!-- Product tab Area Start -->
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
    
</body>

</html>