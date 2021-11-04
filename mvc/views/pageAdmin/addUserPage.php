<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <h4 class="page-title">Thêm Người Dùng</h4>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Thêm Sản Phẩm</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên Đăng Nhập</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="tendangnhap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Mật Khẩu</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="matkhau">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nhập Lại Mật Khẩu</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="nhaplaimatkhau">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Quyền</label>
                            <div class="col-sm-10">
                                <select id="quyen">
                                    <option value="0">Admin</option>
                                    <option value="1">Khách Hàng</option>
                                    <option value="2">Nhân Viên Lắp Đặt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center"><button class="btn btn-success" id="addUser">Thêm Người Dùng</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->

</div>
<!-- content -->