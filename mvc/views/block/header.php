<div class="header section">
        <!-- Header Top Message Start -->
        <!-- Header Top  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="/www/"><img src="/www/public/images/logo/logo.jpg" alt="Site Logo" class="imgLOGO" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                        class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Nhập Thứ Bạn Muốn Tìm" id="whatSearch" type="text">
                                        <button class="submit" type="button" id="startSearch"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!--                                     
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Sign in</a></li> --> 
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?php 
                                        if(isset($_SESSION["username"])){
                                    ?>
                                        <li><a class="dropdown-item" href="/www/taikhoan">Tài Khoản</a></li>
                                        <li><a class="dropdown-item" href="/www/thoattaikhoan">Thoát</a></li>
                                    <?php 
                                        }else{
                                    ?>
                                        <li><a class="dropdown-item" href="/www/dndk">Đăng Nhập</a></li>
                                    <?php
                                        }                                    
                                    ?>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="/www/giohang" class="header-action-btn header-action-btn-cart">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num" id="soluongtronggiohang"><?php if(isset($_SESSION["soluongtronggiohang"])) {echo $_SESSION["soluongtronggiohang"];} ?></span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-lg-none sticky-nav bg-white">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="/www/"><img src="/www/public/images/logo/logo.jpg" alt="Site Logo" class="imgLOGO" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                        class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Nhập Thứ Bạn Muốn Tìm" type="text">
                                        <button class="submit" type="button" id="startSearch_dt"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="/www/taikhoan">Tài Khoản</a></li>
                                    <!-- <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Sign in</a></li> -->
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="/www/giohang" class="header-action-btn header-action-btn-cart pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num" id="soluongtronggiohang_dt"><?php if(isset($_SESSION["soluongtronggiohang"])) {echo $_SESSION["soluongtronggiohang"];} ?></span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        <!-- Main Menu Start -->
        <div class="bg-gray d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="main-menu manu-color-white">
                            <ul>
                                <li class="dropdown"><a href="/www/">Trang Chủ</a></li>
                                <li class="dropdown"><a href="#">Sản Phẩm<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/www/khoacuathongminh">Khóa Cửa Thông Minh</a></li>
                                        <li><a href="/www/mayhutbui">Máy Hút Bụi</a></li>
                                        <li><a href="/www/dieuhoathongminh">Điều Hòa Thông Minh</a></li>
                                        <li><a href="/www/denthongminh">Đèn Thông Minh</a></li>
                                        <li><a href="/www/camera">Camera</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="dropdown"><a href="#">Tin Tức</a></li> -->
                                <li class="dropdown"><a href="/www/hoidap">Hỏi Đáp</a></li>
                                <li><a href="/www/lienhe">Liên Hệ</a></li>
                                <li class="dropdown" id="drakMode"><a><i class="fas fa-exchange-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu End -->
    </div>