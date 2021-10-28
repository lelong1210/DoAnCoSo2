<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide zoom-image-hover">
                            <?php
                            $arr = json_decode($data["productModel"]->SelectProductWhereMasp($data["params"]));
                            $arr = array_values((array)$arr[0]);
                            echo "<title>$arr[1]</title>";
                            echo "<img class='img-responsive m-auto' src='$arr[5]' alt=''>";
                            echo "<span id='spanOf$arr[0]'></span>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-3 mb-3">
                    <!-- sau nay roi tim hieu sau -->
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="product-details-content quickview-content">
                    <h2><?php echo $arr[1] ?></h2>
                    <div class="pricing-meta">
                        <ul>
                            <li class="old-price not-cut"><?php echo number_format($arr[2]) ?> đ</li>
                        </ul>
                    </div>
                    <p class="quickview-para m-0"><?php echo $arr[4] ?></p>
                    <div class="pro-details-quality">
                        <div class="pro-details-cart">
                            <button class="add-cart btn btn-primary btn-hover-primary" id='<?php echo "btnMH" . $arr[0] ?>'> Mua Ngay</button>
                        </div>
                    </div>
                    <div class="pro-details-policy">
                        <ul>
                            <li><img src="http://localhost/DoAnCoSo2/public/images/icons/policy.png" alt="" /><span>Bảo Mật</span></li>
                            <li><img src="http://localhost/DoAnCoSo2/public/images/icons/policy-2.png" alt="" /><span>Vận Chuyển Nhanh Chóng</span></li>
                            <li><img src="http://localhost/DoAnCoSo2/public/images/icons/policy-3.png" alt="" /><span>Đổi Mới Nếu Bị Lỗi Trong 7 Ngày</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
