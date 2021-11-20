<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once "block/head.php"; ?>
    <title>Chào Mừng Bạn Đến Với LQL</title>
</head>

<body>
    <!-- Header Area start  -->
    <header>
        <?php require_once "block/header.php"; ?>
        <?php require_once "block/headerMobile.php"; ?>
    </header>
    <!-- Header Area End  -->

    <!-- OffCanvas Cart Start -->
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <!-- OffCanvas Menu End -->


    <!-- breadcrumb-area start -->


    <!-- breadcrumb-area end -->

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px" id="box_quenMatKhau">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>Quên Mật Khẩu</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="post" class="text-center">
                                            <input id="ten_dang_nhap_key" type="text" name="user-password" placeholder="Nhập Tên Đăng Nhập..." />
                                            <input id="email_in_key" type="text" name="user-password" placeholder="Nhập Thông Tin gmail..." />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                </div>
                                                <button id="guiMatKhauMoi" type="button"><span>Gửi Mật Khẩu Mới</span></button><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
    <div class="login-register-area pt-100px pb-100px" id="box_doipass">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>Quên Mật Khẩu</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="post" class="text-center">
                                            <input id="key_reset" type="text" name="user-password" placeholder="Nhập Key Xác Nhận..." />
                                            <input id="matkhau_DK" type="password" name="user-password" placeholder="Mật khẩu...." />
                                            <span id="spmatkhau_DK" class="span_err"></span>
                                            <input id="rematkhau_DK" type="password" name="user-password" placeholder="Nhậplại mật khẩu...." />
                                            <span id="sprematkhau_DK" class="span_err"></span>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <button id="doimatkhau_reset" type="button"><span>Đổi Mật Khẩu</span></button><br>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area Start -->
    <div class="ds" id="conn"></div>
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
</body>

</html>