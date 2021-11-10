<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php require_once "block/head.php"; ?>
    <title>Hóa Đơn</title>
</head>

<body>
    <!-- Header Area start  -->
    <header>
        <?php require_once "block/header.php"; ?>
        <?php require_once "block/headerMobile.php"; ?>
    </header>
    <div class="content container text-center" id="contentMain">
        <?php
        $arr = (json_decode($data["taikhoanModel"]->getBill_ed($_SESSION["username"])));
        if ($arr) {
            $count = count($arr);
            $arrTitle = ["Mã Hóa Đơn", "Ngày Mua", "Địa Chỉ Giao Hàng", "Số Điện Thoại Nhận Hàng", "Đánh Giá Về Nhân Viên Lắp Đặt"]; ?>
            <h1>Đã Nhận Hàng</h1>
            <table id="table_bill_ed" class="display text-center" style="width:100%">
                <thead>
                    <tr>
                        <?php
                            for ($i = 0; $i < count($arrTitle); $i++) {
                                echo "<th>$arrTitle[$i]</th>";
                            }
                            echo "<th>Xem Chi Tiết</th>";
                            ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i = 0; $i < $count; $i++) {
                            echo "<tr>";
                            $arrChild = array_values((array) $arr[$i]);

                            $countCh = count($arrChild);
                            for ($j = 0; $j < $countCh - 1; $j++) {
                                echo "<td>$arrChild[$j]</td>";
                            }
                            echo "<td>
                                    <button type='button' class='fas fa-chevron-down' id='saodanhgia_NhanVienDown$arrChild[0]'></button>
                                    <span id='nodungdanhgiaNV$arrChild[0]'>" . $arrChild[$countCh - 1] . "</span>
                                    <button type='button' class='fas fa-chevron-up' id='saodanhgia_NhanVienUp$arrChild[0]'></button>
                                </td>";
                            echo "<td><button class='btn btn-success' id='btn_chitetHD$arrChild[0]'><i class='fas fa-question-circle'></i></button></td>";
                            echo "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        <?php } ?>
        <!-- chua nhan hang -->
        <?php
        $arr = (json_decode($data["taikhoanModel"]->getBill($_SESSION["username"])));
        if ($arr) {
            $count = count($arr);
            $arrTitle = ["Mã Hóa Đơn", "Ngày Mua", "Địa Chỉ Giao Hàng", "Số Điện Thoại Nhận Hàng", "Tình Trạng Đơn Hàng"]; ?>
            <h1>Chưa Nhận Hàng</h1>
            <table id="table_bill" class="display text-center" style="width:100%">
                <thead>
                    <tr>
                        <?php
                            for ($i = 0; $i < count($arrTitle); $i++) {
                                echo "<th>$arrTitle[$i]</th>";
                            }
                            echo "<th>Xem Chi Tiết</th>";
                            ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i = 0; $i < $count; $i++) {
                            echo "<tr>";
                            $arrChild = array_values((array) $arr[$i]);

                            $countCh = count($arrChild);
                            for ($j = 0; $j < $countCh - 1; $j++) {
                                echo "<td>$arrChild[$j]</td>";
                            }
                            echo "<td>
                                    <span>Chưa Nhận</span>
                                </td>";
                            echo "<td><button class='btn btn-success' id='btn_chitetHD$arrChild[0]'><i class='fas fa-question-circle'></i></button></td>";
                            echo "</tr>";
                        }
                        ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
    <div class="contentHidden text-center">
        <div class="checkout-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-md-30px mt-lm-30px ">
                        <div class="your-order-area">
                            <h3>Thông Tin Về Hóa Đơn</h3>
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
                                        $arrDetailBill = (json_decode($data["taikhoanModel"]->getDetailBill($_SESSION["username"], 80)));
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
                                            <li class="your-order-shipping">Địa Chỉ Giao Hàng
                                                <?php
                                                $phivanchuyen = 0;
                                                for ($i = 0; $i < 1; $i++) {
                                                    $arrChild = array_values((array) $arrDetailBill[$i]); ?>
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <i class="fas fa-shipping-fast"></i>
                                                            </td>
                                                            <td>
                                                                <span><?php echo $arrChild[4] ?></span> -
                                                                <span><?php echo $arrChild[5] ?></span>
                                                            </td>
                                                        </tr>
                                                    </table>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
    <script>
        $('#table_bill').DataTable();
        $('#table_bill_ed').DataTable();
    </script>

</body>

</html>