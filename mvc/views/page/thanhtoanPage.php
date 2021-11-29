<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>SẢn Phẩm</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Sản Phẩm</li>
                                    <li>Giá Tiền</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <?php $tongtien = $data["productModel"]->showProductInPayment(); $arr1 = $_SESSION["thanhtoan"]; ?>
                                <!-- span dung cho mua truc tiep -->
                                <span style="color: red;" id="spanPaylive"><?php $arr1 = array_values((array)$arr1[0]) ; echo $arr1[2]?></span>
                                <span style="color: green;" id="masp"><?php echo $arr1[0]?></span>
                                <span style="color: blue;" id="soluongsp">
                                    <?php 
                                        $soluongsp = json_decode($data["productModel"]->getsoluongSp($arr1[0]));
                                        $soluongsp = array_values((array)$soluongsp[0]);
                                        $soluongsp = $soluongsp[0];
                                        echo $soluongsp;
                                    ?>
                                </span>
                                <!-- ket thuc span mua truc tiep -->
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Địa Chỉ Giao Hàng
                                        <?php
                                        $arr = $data["taikhoanModel"]->selectAddressShipping($_SESSION["username"]);
                                        if ($arr) {
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
                                    <li class="your-order-shipping">Phí Vận Chuyển</li>
                                    <li><span id="shippingCost"></span> đ</li>
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Thanh Toán
                                        <table>
                                            <tr>
                                                <td><input type='checkbox' style='height: 20px;' class='btn' id='checkboxTT0'></td>
                                                <td><span id="ndhinhthuc0">Online</span></td>
                                            </tr>
                                            <tr>
                                                <td><input type='checkbox' style='height: 20px;' class='btn' id='checkboxTT1'></td>
                                                <td><span id="ndhinhthuc1">Khi Nhận Hàng</span></td>
                                            </tr>
                                        </table>
                                    </li>
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
<div class="contentQr text-center">
    <div class="row">
        <div class="col-sm-12"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Superqr.svg/1200px-Superqr.svg.png" alt="" id="img" class="imgtt"></div>
        <div class="col-sm-6"><button class="btn btn-success" id="huyThanhToanOnline">Hủy</button></div>
        <div class="col-sm-6"><button class="btn btn-success" id="thanhtoanOnline">Thanh Toán</button></div>
    </div>
</div>