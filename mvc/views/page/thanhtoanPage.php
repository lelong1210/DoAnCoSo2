<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Sản Phẩm</li>
                                    <li>Giá Tiền</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <?php $tongtien = $data["productModel"]->showProductInPayment(); ?>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Địa Chỉ Giao Hàng
                                        <?php
                                            $data["productModel"]->showAddressShippingInPayment(json_decode($data["taikhoanModel"]->selectAddressShipping($_SESSION["username"])));
                                        ?>
                                    </li>
                                    <li>
                                        <a href="./taikhoan"><i class="far fa-plus-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping" >Phí Vận Chuyển</li>
                                    <li><span id="shippingCost"></span> đ</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Tổng Tiền</li>
                                    <li id="tongtien"><?php echo ($tongtien); ?> đ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method">
                        </div>
                    </div>
                    <div class="Place-order mt-25">
                        <a class="btn-hover" id="thanhtoan">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>