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
                                            <input type="text" name="user-name" placeholder="Tên đăng nhập" />
                                            <input type="password" name="user-password" placeholder="mật khẩu..." />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <!-- <input type="checkbox" /> -->
                                                    <!-- <a class="flote-none" href="javascript:void(0)">Remember me</a> -->
                                                    <!-- <a href="#">Forgot Password?</a> -->
                                                </div>
                                                <button type="button"><span>Đăng Nhập</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="post" class="text-center">
                                            <input type="text" name="user-name" placeholder="Tên đăng nhập" />
                                            <input type="password" name="user-password" placeholder="Mật khẩu...." />
                                            <input type="password" name="user-password" placeholder="Nhậplại mật khẩu...." />
                                            <input name="user-email" placeholder="Email" type="email" />
                                            <div class="button-box">
                                                <button type="button"><span>Đăng Ký</span></button>
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
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
</body>

</html>