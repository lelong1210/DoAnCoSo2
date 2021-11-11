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
    <div class="contentHidden " id="contentHidden">

    </div>
    <!-- <div class="test"><button class="btn btn-success" id="test">click me</button></div> -->
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