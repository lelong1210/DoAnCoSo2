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
        $arr = ["Công Việc Mới","Công Việc Đang Chờ","Công Việc Đã Hoàn Thành"]
    ?>
    <div class="row">
        <?php for ($i=0; $i < 3; $i++) { ?>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center p-1">
                            <div class="col-lg-6">
                                <h5 class="font-16"><?php echo $arr[$i]?></h5>
                                <h4 class="text-info pt-1 mb-0">$67,670</h4>
                            </div>
                            <div class="col-lg-6">
                                <div id="chart<?php echo ($i+1)?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <!-- end top-Contant -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Sales Statistics</h4>
                    <ul class="list-inline widget-chart mt-4 mb-0 text-center">
                        <li class="list-inline-item">
                            <h5>3654</h5>
                            <p class="text-muted">Marketplace</p>
                        </li>
                        <li class="list-inline-item">
                            <h5>954</h5>
                            <p class="text-muted">Last week</p>
                        </li>
                        <li class="list-inline-item">
                            <h5>8462</h5>
                            <p class="text-muted">Last Month</p>
                        </li>
                    </ul>
                    <div id="morris-bar-stacked" class="text-center" style="height: 350px;"></div>

                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Trends Monthly</h4>
                    <ul class="list-inline widget-chart mt-4 mb-0 text-center">
                        <li class="list-inline-item">
                            <h5>3654</h5>
                            <p class="text-muted">Marketplace</p>
                        </li>
                        <li class="list-inline-item">
                            <h5>954</h5>
                            <p class="text-muted">Last week</p>
                        </li>
                        <li class="list-inline-item">
                            <h5>8462</h5>
                            <p class="text-muted">Last Month</p>
                        </li>
                    </ul>
                    <div id="morris-donut-example" class="morris-charts morris-chart-height text-center" style="height: 350px;"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


</div>
<!-- container-fluid -->

</div>