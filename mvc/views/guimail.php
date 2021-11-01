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
        <label for="">Địa Chỉ Mail</label><input type="text" id="diachimail">
        <label for="">Tiêu Đề</label><input type="text" id="tieude">
        <label for="">Nội Dung</label><input type="text" id="noidung">
        <label for="">File</label><input type="file" name="file" id="linkduongdananh">
        <button id="sendMail">Gửi</button>
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>

</body>

</html>