<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Toàn Bộ Sản Phẩm</h4>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        $arr = json_decode($data["taikhoanModel"]->selectAllUser());
                        $arrTitle = ($data["taikhoanModel"]->getTitleTable($arr));
                        ?>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                        <?php for ($j = 0; $j < count($arrChild); $j++) { ?>
                                            <td><?php echo $arrChild[$j]; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <!-- MODEL -->
    </div>
    <!-- container-fluid -->

</div>