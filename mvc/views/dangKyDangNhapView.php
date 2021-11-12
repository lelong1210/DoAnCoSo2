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
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>Đăng Nhập</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>Đăng Ký</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="post" class="text-center">
                                            <input id="tendangnhap_DN"type="text" name="user-name" placeholder="Tên đăng nhập" />
                                            <input id="matkhau_DN" type="password" name="user-password" placeholder="mật khẩu..." />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <!-- <input type="checkbox" /> -->
                                                    <!-- <a class="flote-none" href="javascript:void(0)">Remember me</a> -->
                                                    <!-- <a href="#">Forgot Password?</a> -->
                                                </div>
                                                <button id="dangnhap" type="button"><span>Đăng Nhập</span></button><br>
                                                <hr>
                                                <?php require_once "dangnhapMangxahoi/source_google.php"?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form>
                                            <input id="tendangnhap_DK" type="text" name="user-name" placeholder="Tên đăng nhập" >
                                            <span id="sptendangnhap_DK" class="span_err"></span>
                                            <input id="matkhau_DK" type="password" name="user-password" placeholder="Mật khẩu...." />
                                            <span id="spmatkhau_DK" class="span_err"></span>
                                            <input id="rematkhau_DK" type="password" name="user-password" placeholder="Nhậplại mật khẩu...." />
                                            <span id="sprematkhau_DK" class="span_err"></span>
                                            <input id="email_DK" name="user-email" placeholder="Email" type="email" />
                                            <span id="spemail_DK" class="span_err"></span>
                                            <div class="button-box text-center">
                                                <button id="dangky" type="button"><span>Đăng Ký</span></button>
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
    <!-- Footer Area Start -->
    <div class="ds" id="conn"></div>
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
</body>

</html>