<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <div class="text-center"><h3>Thông Tin Về Hóa Đơn</h3></div>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Sản Phẩm</li>
                                    <li>Giá Tiền</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <?php
                                $arrDetailBill = (json_decode($data["arrBillDetail"]));
                                if ($arrDetailBill) {
                                    $tongtien = 0;
                                    for ($i = 0; $i < count($arrDetailBill); $i++) {
                                        $arrChild = array_values((array) $arrDetailBill[$i]);
                                        ?>
                                        <ul>
                                            <li>
                                                <span> <img src='<?php echo $arrChild[2] ?>' alt='' style='max-width: 100px;'></span>
                                                <span class='order-price'><?php echo number_format($arrChild[1] * $arrChild[3]);
                                                                                    $tongtien = $tongtien + ($arrChild[1] * $arrChild[3]) ?> đ</span>
                                            </li>
                                            <li><span class='order-middle-left'> <?php echo $arrChild[0] ?><span style='color:red'> X</span> <span style='color:red' id='soluongsp$arrProductNumber[0]'> <?php echo $arrChild[3] ?></span></span></li>
                                        </ul>
                                    <?php
                                        }
                                        ?>

                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Địa Chỉ Giao Hàng</li>
                                    <li>
                                        <?php
                                            $phivanchuyen = 0;
                                            for ($i = 0; $i < 1; $i++) {
                                                $arrChild = array_values((array) $arrDetailBill[$i]); ?>
                                                <ul>
                                                    <li class="your-order-shipping"><i class="fas fa-shipping-fast"></i></li>
                                                    <li>
                                                            <span><?php echo $arrChild[4] ?></span> -
                                                            <span><?php echo $arrChild[5] ?></span>
                                                    </li>
                                                </ul>
                                        <?php
                                                $phivanchuyen = $arrChild[7];
                                            }
                                        ?>
                                    </li>                                    
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Phí Vận Chuyển</li>
                                    <li><span></span><?php echo number_format($phivanchuyen) ?> đ</li>
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Tình Trạng Đơn Hàng</li>
                                    <li>
                                        <?php
                                            $phivanchuyen = 0;
                                            for ($i = 0; $i < 1; $i++) {
                                                $arrChild = array_values((array) $arrDetailBill[$i]); ?>
                                                <ul>
                                                    <li>
                                                        <span><?php if($arrChild[6] > 0){echo "Đã Nhận";}else{echo "Chưa Nhận";} ?></span>
                                                    </li>
                                                </ul>
                                        <?php } ?>
                                    </li>                                    
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Tổng Tiền</li>
                                    <li id="tongtien"><?php echo number_format($tongtien + $phivanchuyen); ?> đ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method">
                        </div>
                    </div>
                    <div class="Place-order mt-25">
                        <a class="btn-hover" id="back_contentMain">Quay Lại</a>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>
    </div>
</div>