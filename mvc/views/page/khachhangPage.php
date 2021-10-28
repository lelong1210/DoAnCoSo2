<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="ml-auto mr-auto col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="true" href="#my-account-1">Chỉnh Sửa Thông Tin </a>
                                </h3>
                            </div>
                            <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Tông Tin Tài Khoản</h4>
                                        </div>
                                        <?php
                                        $data["taikhoanModel"]->editInformation();
                                        ?>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="icon-arrow-up-circle"></i> Quay Lên</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="button" id="updateAcount">Cập Nhật</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="400">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="false" href="#my-account-2">ĐỔI MẬT KHẨU </a></h3>
                            </div>
                            <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>Nhập Mật Khẩu Mới</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Mật Khẩu Mới</label>
                                                    <input type="password" id="matkhau_UP" />
                                                    <span id="spmatkhau_UP"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Nhập Lại Mật Khẩu Mới</label>
                                                    <input type="password" id="rematkhau_UP" />
                                                    <span id="sprematkhau_UP"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="icon-arrow-up-circle"></i> Quay Lên</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="button" id="updatePassword">Cập Nhật</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="600">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>3 .</span> <a data-bs-toggle="collapse" class="collapsed" aria-expanded="false" href="#my-account-3">Địa Chỉ Giao Hàng
                                    </a></h3>
                            </div>
                            <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                                <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <?php  $data["taikhoanModel"]->showAddressShipping();?>
                                        </div>
                                        <div>
                                            <button id="selectAddress"><i class="far fa-plus-square"></i></button>
                                            <div class="contentSelectAddress" id="contentSelectAddress">
                                                <select id="tentinh"></select>
                                                <select id="tenhuyen"></select>
                                                <select id="tenxa"></select>
                                                <input type="text" placeholder="nhập địa chỉ..." id="diachi">
                                                <button class="btn btn-lg btn-success" id="saveAddressShipping">Lưu</button>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="icon-arrow-up-circle"></i> Quay Lên</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account " data-aos="fade-up" data-aos-delay="800">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>4 .</span> <a href="./giohang">Tới Giỏ Hàng</a></h3>
                            </div>
                        </div>
                        <div class="panel panel-default single-my-account m-0" style="margin-top: 20px;" data-aos="fade-up" data-aos-delay="800">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span>5 .</span> <a href="./thoattaikhoan">Thoát Tài Khoản</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>