<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"></li>
                        </ol>
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

        <!-- start top-Contant -->
        <?php
        /// tieu de box
        $arrBoxTT = ["Tốc Độ", "Thái Độ", "Tổng Lương Đã Nhận","Công Việc Đã Hoàn Thành"];
        /// speed 
        $arrAverage = json_decode($data["nhanVienModel"]->getSpeedAverage($_SESSION["username"]));
        $arrAverage = array_values((array) $arrAverage[0]);
        $arrAverage = $arrAverage[0];
        $arrDGSpeed = ["Rất Nhanh", "Nhanh", "Khá Nhanh", "Chậm", "Rất Chậm"];
        /// 
        /// thai do
        $arrThD = json_decode($data["nhanVienModel"]->getPvHk($_SESSION["username"]));
        $arrThD = array_values((array) $arrThD[0]);
        $arrThD = $arrThD[0];
        $arrDGpV = ["Rất Tốt", "Tốt", "Khá Tốt", "Tệ", "Rất Tệ"];
        /// luong 
        $arrTongluong = json_decode($data["nhanVienModel"]->getTongluong($_SESSION["username"]));
        $arrTongluong = array_values((array) $arrTongluong[0]);
        $arrTongluong = $arrTongluong[0];
        /// CV
        $arrCV = json_decode($data["nhanVienModel"]->getTongCV($_SESSION["username"]));
        $count = count($arrCV);
        /// cv 1 thang
        ?>
        <div class="row text-center">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <p class="font-16"><?php echo $arrBoxTT[0] ?> <i class="fas fa-flag-checkered"></i></p>
                                <h4 class="text-info pt-1 mb-0">
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
                                </h4>
                            </div>
                            <!-- <div class="col-lg-6">
                                
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <p class="font-16"><?php echo $arrBoxTT[1] ?> <i class="far fa-laugh-beam"></i></p>
                                <h4 class="text-info pt-1 mb-0">
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
                                </h4>
                            </div>
                            <!-- <div class="col-lg-6">
                                
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <p class="font-16"><?php echo $arrBoxTT[2] ?> <i class="fas fa-money-bill-wave"></i></p>
                                <h4 class="text-info pt-1 mb-0"><?php echo number_format($arrTongluong)?> đ</h4>
                            </div>
                            <!-- <div class="col-lg-6">
                                
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <p class="font-16"><?php echo $arrBoxTT[3] ?> <i class="fas fa-people-carry"></i></p>
                                <h4 class="text-info pt-1 mb-0"><?php echo $count?></h4>
                            </div>
                            <!-- <div class="col-lg-6">
                                
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top-Contant -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                    <canvas id="myChart" style="width:100%;max-width:6000px"></canvas>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->

</div>