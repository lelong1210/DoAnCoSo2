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
                                            $arr = $data["taikhoanModel"]->selectAddressShipping($_SESSION["username"]);
                                            if($arr){
                                                $data["productModel"]->showAddressShippingInPayment(json_decode($arr));
                                            }
                                        ?>
                                    </li>
                                    <li>
                                        <a href="./taikhoan"><i class="far fa-plus-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping" >Số Điện Thoại Giao Hàng
                                            <table>
                                                <tr>
                                                    <td><input type="checkbox" style="height: 20px;" class="btn" id="checkedSdt"></td>   
                                                    <td >
                                                        <?php
                                                            $arr1 = json_decode($data["taikhoanModel"]->getSdtGh($_SESSION["username"]));
                                                            $arr1 = array_values((array)$arr1[0]);
                                                        ?>
                                                        <span id="sdtgh"><?php echo $arr1[0]?></span>
                                                    </td>
                                                </tr>
                                            </table>
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