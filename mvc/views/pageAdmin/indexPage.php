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
                <?php
                $tongThu = $data["adminModel"]->xulyArr(json_decode($data["adminModel"]->getTongTienThu()));
                $tongChi = $data["adminModel"]->xulyArr(json_decode($data["adminModel"]->getTongTienChi()));
                $tongKhach = $data["adminModel"]->xulyArr(json_decode($data["adminModel"]->getKhachHang()));
                $tongsanphamdaban = $data["adminModel"]->xulyArr(json_decode($data["adminModel"]->getSanPhamDaBan()));
                ?>
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
        <div class="row text-center">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <h5 class="font-16">Tổng Tiền Thu <i class="fas fa-money-bill-wave-alt"></i></h5>

                            </div>
                            <div class="col-lg-12">
                                <h4 class="text-info pt-1 mb-0"><?php echo number_format($tongThu) ?> đ</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <h5 class="font-16">Tổng Tiền Chi <i class="fas fa-money-bill-wave-alt"></i></h5>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="text-info pt-1 mb-0"><?php echo number_format($tongChi) ?> đ</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <h5 class="font-16">Khách Hàng Hiện Có <i class="fas fa-user"></i></h5>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="text-info pt-1 mb-0"><?php echo number_format($tongKhach) ?> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-12">
                                <h5 class="font-16">Sản Phẩm Đã Bán <i class="fas fa-box"></i></h5>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="text-info pt-1 mb-0"><?php echo number_format($tongsanphamdaban) ?> </h4>
                            </div>
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
                        <canvas id="bd_doanhthu" style="width:100%;max-width:6000px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="/www/public/images/logo/logo.jpg" alt="" m>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div>
    <!-- container-fluid -->

</div>
<script>
</script>