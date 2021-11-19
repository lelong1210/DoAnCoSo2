<!-- Start content -->
<div class="content">
  <?php $arr = (json_decode($_SESSION["information"])); ?>
  <?php $arr = array_values((array) $arr[0]); ?>
  <div class="container-fluid">
    <div class="page-title-box">

      <div class="row align-items-center ">
        <div class="col-md-8">
          <div class="page-title-box">
            <h4 class="page-title">Quản Lý Thông Tin</h4>
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
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="mt-0 header-title">Thông Tin Về Tài Khoản</h4>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Tên Đăng Nhập</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?php echo $arr[0] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Tên Người Dùng</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="tennguoidung" value="<?php echo $arr[1] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Số Điện Thoại</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="sodienthoai" value="<?php echo $arr[3] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="email" value="<?php echo $arr[4] ?>">
                <span style="color: red;" id="spemail"></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Địa Chỉ</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="diachi" value="<?php echo $arr[2] ?>">
              </div>
            </div>
            <div class="col-sm-12 text-center"><button class="btn btn-success" id="update_acount">Cập Nhập Thông Tin</button></div>
          </div>
        </div>
      </div>
    </div>
    <!-- end col -->
    <!-- pass -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="mt-0 header-title">Đổi Mật Khẩu</h4>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Mật Khẩu</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" id="matkhau">
                <span style="color: red;" id="spmatkhau"></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Nhập Lại Mật Khẩu</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" id="nhaplaimatkhau">
                <span style="color: red;" id="spnhaplaimatkhau"></span>
              </div>
            </div>
            <div class="col-sm-12 text-center"><button class="btn btn-success" id="update_pass">Cập Nhập Mật Khẩu</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row -->

</div>
<!-- container-fluid -->

</div>
<!-- content -->