<?php if (isset($data["arrDetail"])) { $tong = 0 ; $phiship = 0; ?>
    <h2>Thông Tin Về Sản Phẩm</h2>
    <table class="table text-center">
        <tr>
            <th></th>
            <th>Sản Phẩm</th>
            <th>Giá Tiền</th>
            <th>Số Lượng</th>
            <th>Tổng Tiền</th>
        </tr>
        <?php
            $arr = json_decode($data["arrDetail"]);
            $count = count($arr);
            for ($i = 0; $i < $count; $i++) {
                $arrChild = array_values((array) $arr[$i]) ?>
                <tr>
                    <td><img src="<?php echo $arrChild[2]?>" alt="" style="height: 100px;margin-top: 3%;"></td>
                    <td><?php echo $arrChild[0]?></td>
                    <td><?php echo $arrChild[1]?></td>
                    <td><?php echo $arrChild[3]?></td>
                    <td><?php echo number_format($arrChild[1]*$arrChild[3]) ; $tong = $tong + ($arrChild[1]*$arrChild[3]) ; $phiship = $arrChild[7]?> đ</td>
                </tr>
        <?php } $arrChild = array_values((array) $arr[0])?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><?php echo number_format($tong+$phiship)?> đ</td>
        </tr>
    </table>
    <h2>Thông Tin Về Giao Hàng</h2>
    <table class="table text-center">
        <tr>
            <th>Địa Chỉ Giao Hàng</th>
            <th>Tiến Độ Giao Hàng</th>
            <th>Hình Thức Giao Hàng</th>
            <th>Số Điện Thoại Nhận Hàng</th>
        </tr>
        <tr>
            <td><?php echo $arrChild[4]?></td>
            <td><?php if($arrChild[6] == 1){echo "Đã Giao";}else{echo "Chưa Giao Hàng";}?></td>
            <td><?php if($arrChild[8] == 0){echo "Thanh Toán Online";}else{echo "Thanh Toán Khi Nhận Hàng";}?></td>
            <td><?php echo $arrChild[5]?></td>
        </tr>
    </table>
    <h2>Thông Tin Về Nhân Viên</h2>
    <table class="table text-center" style="margin-top: 5%;"> 
        <tr>
            <th>Mã Nhân Viên</th>
            <th>Tên Nhân Viên</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
        </tr>
        <tr>
            <td><?php echo $arrChild[9]?></td>
            <td><?php echo $arrChild[10]?></td>
            <td><?php echo $arrChild[11]?></td>
            <td><?php echo $arrChild[12]?></td>
        </tr>
    </table>
    <button id="back_table_congvc" class="btn btn-success">Quay Lại</button>
<?php } ?>