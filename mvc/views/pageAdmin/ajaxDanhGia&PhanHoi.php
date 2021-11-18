<?php if (isset($data["arrReview"]) && $data["arrReview"]) { ?>
    <div class="row table_overView">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php
                        $arr = json_decode($data["arrReview"]);
                        $arrTitle = ["Mã Nhận Xét", "Mã Sản Phẩm", "Tên Khách Hàng", "Nội Dung Đánh Giá", "Ngày Đánh Giá"];
                        ?>
                    <table id="table_reply" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <?php for ($i = 0; $i < count($arrTitle); $i++) { ?>
                                    <th><?php echo $arrTitle[$i]; ?></th>
                                <?php } ?>
                                <th>Xem Đánh Giá</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $count = count($arr);
                                for ($i = 0; $i < $count; $i++) {
                                    $arrChild = array_values((array) $arr[$i]);

                                    ?>
                                <tr>
                                    <?php for ($j = 0; $j < count($arrChild); $j++) { ?>
                                        <td><?php echo $arrChild[$j]; ?></td>
                                    <?php } ?>
                                    <td><button id="ph_danhGia<?php echo $arrChild[0]; ?>" class="btn btn-lg btn-success">Phản Hồi</button></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="btn btn-success" id="back_box_containt_table_sp">Quay Lại</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
<?php } ?>
<?php if (isset($data["arrPhReview"])) { ?>
    <?php if (($data["arrPhReview"])) { ?>
        <div class="row table_overView">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                                $arr = json_decode($data["arrPhReview"]);
                                $arrTitle = ["Mã Nhận Xét", "Người Phản Hồi", "Nội Dung Phản Hồi", "Ngày Phản Hồi"];
                                ?>
                        <table id="table_reply_ph" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <?php for ($i = 0; $i < count($arrTitle); $i++) { ?>
                                        <th><?php echo $arrTitle[$i]; ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                        $count = count($arr);
                                        for ($i = 0; $i < $count; $i++) {
                                            $arrChild = array_values((array) $arr[$i]);

                                            ?>
                                    <tr>
                                        <?php for ($j = 0; $j < count($arrChild); $j++) { ?>
                                            <td><?php echo $arrChild[$j]; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="box_ph text-center">
                            <textarea name="" id="insertDG_ND" cols="30" rows="10" placeholder="Nhập Nội Dung Phản Hồi"></textarea><br>
                            <button class="btn btn-success" id="back_box_containt_review">Quay Lại</button>
                            <button class="btn btn-success" id="btn_insert_danhgia">Phản Hồi</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    <?php } else { ?>
        <div class="box_ph text-center">
            <textarea name="" id="insertDG_ND" cols="30" rows="10" placeholder="Nhập Nội Dung Phản Hồi"></textarea><br>
            <button class="btn btn-success" id="back_review">Hủy</button>
            <button class="btn btn-success" id="btn_insert_danhgia">Phản Hồi</button>
        </div>
    <?php } ?>
<?php } ?>