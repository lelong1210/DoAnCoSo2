<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Toàn Bộ Lương</h4>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="float-right d-none d-md-block app-datepicker">
                        <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                        <i class="mdi mdi-chevron-down mdi-drop"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-title -->

        <!-- end row -->

        <div class="row table_overView">
            <div class="col-12" id="table_congvc">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $arr = json_decode($data["nhanVienModel"]->getCongViecToLuong($_SESSION["username"]));
                        $luonggoc = 200000 ;
                        if($arr){
                            $arrTitle = ["Mã Công Việc","Mã Hóa Đơn","Đánh Giá","Ngày Nhận","Ngày Xong","Thời Gian HT (ngày)","Lương","Nhận","Chi Tiết Công Việc"];
                        ?>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    $arrChild = array_values((array)$arr[$i]);

                                ?>
                                    <tr>
                                        <?php for ($j = 0; $j < count($arrChild); $j++) {?>
                                            <td><?php echo $arrChild[$j]; ?></td>
                                        <?php } ?>
                                        <?php
                                            $luongsao = 0 ; 
                                            if($arrChild[2] != 0){
                                                if($arrChild[2] > 3){
                                                    $luongsao = 50000;
                                                }else{
                                                    $luongsao = 10000;
                                                }
                                            }
                                        ?>
                                        <?php
                                            $thoigianchenhlech = $arrChild[5];
                                            $luongthoigian  = 0;
                                            if($thoigianchenhlech < 10){
                                                if($thoigianchenhlech >= 0 && $thoigianchenhlech <= 1){
                                                    $luongthoigian = $luonggoc;
                                                }else{
                                                    $luongthoigian = ($luonggoc / $thoigianchenhlech);
                                                }
                                            }else{
                                                $luongthoigian = ($luonggoc / 10);
                                            }
                                        ?>
                                        <?php $tongluong = round($luongthoigian + $luongsao)?>
                                        <td><span><?php echo number_format($tongluong) ?></span></td>
                                        <span style="display: none;"><span id="tongluong<?php echo $arrChild[0]?>"><?php echo $tongluong?></span></span>
                                        <span style="display: none;"><span id="danhgiacuakhach<?php echo $arrChild[0]?>"><?php echo $arrChild[2]?></span></span>
                                        <td id="td_btn_nl<?php echo $arrChild[0]?>">
                                            <?php if($data["nhanVienModel"]->selectLuong($arrChild[0])){echo "Đã Nhận";}else{?>
                                                <button class="btn btn-lg btn-success" id="btn_nhanLuong<?php echo $arrChild[0]?>">Nhận</button>
                                            <?php }?>
                                        </td>
                                        
                                        <td><button class="btn btn-lg btn-success" id="btn_xct<?php echo $arrChild[1]?>">?</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php }else{
                        echo "<h1>Bạn Vẫn Chưa Hoàn Thành Công Việc Nào Trên Hệ Thống ^_^ !!!</h1>";
                    }?>
                    </div>
                </div>
            </div>
            <!-- end col -->
            
            <div class="conn text-center" id="conn_ts" ></div>
        </div>
        <!-- end row -->
        <!-- MODEL -->
    </div>
    <!-- container-fluid -->

</div>