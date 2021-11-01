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
                        $arr = json_decode($data["productModel"]->selecAllProduct());
                        $arrTitle = ($data["productModel"]->getTitleTable($arr));
                        ?>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <?php for ($i = 0; $i < count($arrTitle); $i++) { ?>
                                        <th><?php echo $arrTitle[$i]; ?></th>
                                    <?php } ?>
                                    <td>Xem Chi Tiết</td>
                                    <td>Xóa</td>
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
                                        <td><button id="xem<?php echo $arrChild[0]; ?>" class="btn btn-lg btn-success btn-edit">Xem</button></td>
                                        <td><button id="xoa<?php echo $arrChild[0]; ?>" class="btn btn-lg btn-success btn-delete"><i class="fas fa-trash-alt"></i></button></td>    
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
        <div class="row model_overviewProduct">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="tensanpham">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Giá Tiền</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="giatien">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Loại Sản Phẩm</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="loaisanpham">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Mô Tả Sản Phẩm</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="motasanpham">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Ảnh</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="linkduongdananh">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Hãng Sản Xuất</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="hangsanxuat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Dùng Làm Slider</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="dunglamslider">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Số Lượng</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="soluong">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center"><button class="btn btn-success" id="addProduct">Thêm Sản Phẩm</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->

</div>