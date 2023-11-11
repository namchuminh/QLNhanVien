<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Nhân Viên</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item">Quản Lý Nhân Viên</li>
                            <li class="breadcrumb-item active">Thêm Nhân Viên Mới</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Thông tin chi tiết nhân viên</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            	<div class="card">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="mb-3" style="width: 160px; height: 160px; margin-right: auto; margin-left: auto;">
                                                    <img style="width: 100%; height: 100%; border-radius: 50%;" id="output" src="<?php echo base_url('uploads/avatar.jpg') ?>" required>
                                                </div>
                                                <div style="text-align: center;">
                                                    <label for="selectfile" class="btn"><p style="font-weight: bold;"><i class="fa-solid fa-camera"></i> Chọn ảnh</p></label>
                                                    <input onchange="loadFile(event)" class="d-none" type="file" id="selectfile" class="form-control" placeholder="Ảnh chính" name="avatar">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <label for="simpleinput">Tên Nhân Viên</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Tên nhân viên" required="" name="hoten">
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Ngày Sinh</label>
                                                    <input type="date" id="simpleinput" class="form-control" placeholder="Ngày sinh" required="" name="ngaysinh">
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Giới Tính</label>
                                                    <select name="gioitinh" required="" class="form-control">
                                                        <option value="1" selected>Nam</option>
                                                        <option value="0">Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <label for="simpleinput">Dân Tộc</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Dân tộc" required="" name="dantoc">
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Quê Quán</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Quê quán" required="" name="quequan">
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Ngày Bắt Đầu Làm</label>
                                                    <input type="date" id="simpleinput" class="form-control" placeholder="Ngày bắt đầu làm" required="" name="ngaybatdaulam">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <label for="simpleinput">Số Điện Thoại</label>
                                                    <input type="number" id="simpleinput" class="form-control" placeholder="Số điện thoại" required="" name="sodienthoai">
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Email</label>
                                                    <input type="email" id="simpleinput" class="form-control" placeholder="Email" required="" name="email">
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Trình Trạng</label>
                                                    <select name="tinhtrang" required="" class="form-control">
                                                        <option value="1" selected>Đang làm việc</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <label for="simpleinput">Chức Vụ</label>
                                                    <select name="chucvu" required="" class="form-control">
                                                        <?php foreach ($chucvu as $key => $value): ?>
                                                            <option value="<?php echo $value["MaCV"]; ?>"><?php echo $value["TenCV"]; ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Phòng Ban</label>
                                                    <select name="phongban" required="" class="form-control">
                                                        <?php foreach ($phongban as $key => $value): ?>
                                                            <option value="<?php echo $value["MaPB"]; ?>"><?php echo $value["TenPhongBan"]; ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="simpleinput">Trình Độ Học Vấn</label>
                                                    <select name="trinhdohocvan" required="" class="form-control">
                                                        <?php foreach ($hocvan as $key => $value): ?>
                                                            <option value="<?php echo $value["MaTDHV"]; ?>"><?php echo $value["BacTrinhDo"]; ?> - <?php echo $value["ChuyenNganh"]; ?> - <?php echo $value["NoiDaoTao"]; ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-12 text-left">
                                                    <a href="<?php echo base_url('nhan-vien/'); ?>" class="btn btn-success waves-effect waves-light">Quay Lại</a>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm Thông Tin</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>

<style type="text/css">
    .table th, .table td{
      padding: 0.75rem; 
      vertical-align: middle; 
      border-top: 1px solid #dee2e6; 
      font-size: 15px;
    }
</style>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>



