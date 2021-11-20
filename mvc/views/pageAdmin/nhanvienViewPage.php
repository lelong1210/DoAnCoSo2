<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Toàn Bộ Nhân Viên</h4>
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

        <div class="row table_overView" id="box_overview_nhanvien">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        // $arr = json_decode($data["taikhoanModel"]->selectAllUser());
                        $arrTitle = ["Mã Nhân Viên", "Tên Nhân Viên", "Công Việc Đã Hoàn Thành", "Lương Đã Nhận", "Đánh Giá Của Khách Hàng","Tốc Độ", "Chi Tiết"];
                        $arr = (json_decode($data["adminModel"]->getNhanVien()));
                        // print_r($arr);
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
                                // echo $count."-->";
                                for ($i = 0; $i < 3; $i++) {
                                    $arrChild = array_values((array) $arr[$i]);

                                    ?>
                                    <tr>
                                        <?php for ($j = 0; $j < count($arrChild); $j++) { ?>
                                            <td><?php echo $arrChild[$j]; ?></td>
                                        <?php } ?>
                                        <?php
                                            /// tieu de box
                                            $arrBoxTT = ["Tốc Độ", "Thái Độ", "Tổng Lương Đã Nhận", "Công Việc Đã Hoàn Thành"];
                                            /// speed 
                                            $arrAverage = $data["adminModel"]->xulyArr(json_decode($data["nhanVienModel"]->getSpeedAverage($arrChild[0])));
                                            if(!$arrAverage){
                                                $arrAverage = "" ;
                                            }
                                            $arrDGSpeed = ["Rất Nhanh", "Nhanh", "Khá Nhanh", "Chậm", "Rất Chậm"];
                                            /// thai do
                                            $arrThD = $data["adminModel"]->xulyArr(json_decode($data["nhanVienModel"]->getPvHk($arrChild[0])));
                                            if(!$arrThD){
                                                $arrThD = "";
                                            }
                                            $arrDGpV = ["Rất Tốt", "Tốt", "Khá Tốt", "Tệ", "Rất Tệ"];
                                            /// luong 
                                            $arrTongluong = $data["adminModel"]->xulyArr(json_decode($data["nhanVienModel"]->getTongluong($arrChild[0])));
                                            if(!$arrTongluong){
                                                $arrTongluong = 0;
                                            }
                                            /// CV
                                            $arrCV = json_decode($data["nhanVienModel"]->getTongCV($arrChild[0]));
                                            if(!$arrCV){
                                                $arrCV = [] ;
                                            } 
                                            $count = count($arrCV);
                                            /// cv 1 thang
                                        ?>
                                        <td>
                                            <span id="tongcv<?php echo $arrChild[0]?>">
                                                <?php echo $count?>
                                            </span>
                                        </td>
                                        <td>
                                            <span id="tongluong<?php echo $arrChild[0]?>">
                                                <?php echo number_format($arrTongluong)?> đ
                                            </span> 
                                        </td>
                                        <td>
                                            <span id="thd<?php echo $arrChild[0]?>">
                                                <?php 
                                                    if($arrThD >= 0 && $arrThD <= 1){
                                                        echo $arrDGpV[4];
                                                    }else if($arrThD > 1 && $arrThD <= 2){
                                                        echo $arrDGpV[3];
                                                    }else if($arrThD > 2 && $arrThD <= 3){
                                                        echo $arrDGpV[2];
                                                    }else if($arrThD > 3 && $arrThD <= 4){
                                                        echo $arrDGpV[1];
                                                    }else{
                                                        echo $arrDGpV[0];
                                                    }
                                                ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span id="tocdo<?php echo $arrChild[0]?>">
                                                <?php 
                                                    if($arrAverage >= 0 && $arrAverage <= 1){
                                                        echo $arrDGSpeed[0];
                                                    }else if($arrAverage > 1 && $arrAverage <= 2){
                                                        echo $arrDGSpeed[1];
                                                    }else if($arrAverage > 2 && $arrAverage <= 3){
                                                        echo $arrDGSpeed[2];
                                                    }else if($arrAverage > 3 && $arrAverage <= 5){
                                                        echo $arrDGSpeed[3];
                                                    }else{
                                                        echo $arrDGSpeed[4];
                                                    }
                                                ?>
                                            </span>
                                        </td>
                                        <td><button class="btn btn-success" id="btnNhanvien<?php echo $arrChild[0]?>">?</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <div class="row" id="box_detail_nhanvien">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="mt-0 header-title">Chi Tiết Về Nhân Viên</h4>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Mã Nhân Viên</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="maNhanVien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên Nhân Viên</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="tenNhanVien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="soDienThoaiNhanVien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Địa Chỉ</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="diachiNhanVien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="emailNhanVien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Công Việc Đã Hoàn Thành</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="cvdht_nhanvien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Lương Đã Nhận</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="ldnhan_nhanvien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Đánh Giá Của Khách Hàng</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="dgckh_nhanvien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span id="masp_edit"></span>
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tốc Độ</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="tocdo_nhanvien">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-success" id="btn_back_table_nhanvien">Quay Lại</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- MODEL -->
    </div>
    <!-- container-fluid -->

</div>