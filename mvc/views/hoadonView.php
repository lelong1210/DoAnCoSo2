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
    <?php
    $arr = (json_decode($data["taikhoanModel"]->getBill($_SESSION["username"])));
    if ($arr) {
        $count = count($arr);
        $arrTitle = ["Ngày Mua","Mã Hóa Đơn","Mã Sản Phẩm","Tên Sản Phẩm","Số Lượng","Loại Sản Phẩm","Hình Ảnh","Tổng Tiền"]; ?>
        <table class="table text-center">
            <tr>
                <?php
                    for ($i = 0; $i < count($arrTitle)-2; $i++) {
                        echo "<th>$arrTitle[$i]</th>";
                    }
                    echo "<th></th>";
                    echo "<th>Tổng Tiền</th>";
                ?>
            </tr>
            <?php
                for ($i = 0; $i < $count; $i++) {
                    echo "<tr>";
                        $arrChild = array_values((array) $arr[$i]);
                        $countCh = count($arrChild);
                        for ($j = 0; $j < $countCh - 2; $j++) {
                            echo "<td>$arrChild[$j]</td>";
                        }
                        echo "<td><a href='./$arrChild[5]/$arrChild[2]'><img src='" . $arrChild[$countCh - 2] . "' style='max-width: 50px'></a></a></td>";
                        echo "<td>".number_format(($arrChild[4]*$arrChild[7]))." đ</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    <?php } ?>
    <!-- Footer Area Start -->
    <?php require_once "block/footer.php"; ?>
    <!-- Footer Area End -->

    <?php require_once "block/jslink.php"; ?>
a

</body>

</html>