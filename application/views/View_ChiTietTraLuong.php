<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Trả Lương</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('tra-luong/'); ?>">Quản Lý Trả Lương</a></li>
                            <li class="breadcrumb-item active">Chi Tiết Trả Lương</li>
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
                    <h4 class="card-title">Thông tin chi tiết trả lương</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            	<div class="card">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="simpleinput">Tên Nhân Viên</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Tên nhân viên" required=""  value="<?php echo $detail[0]["HoTen"] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Ngày Sinh</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="NgaySinh" required="" value="<?php echo $detail[0]["NgaySinh"] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Giới Tính</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Giới tính" required="" value="<?php echo $detail[0]["GioiTinh"] == 1 ? 'Nam' : 'Nữ'; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Tên Phòng Ban</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Tên phòng ban" required="" value="<?php echo $detail[0]["TenPhongBan"] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Chức Vụ</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Chức vụ" required="" value="<?php echo $detail[0]["TenCV"] ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Lương Cơ Bản</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Lương cơ bản" required="" value="<?php echo $detail[0]["LuongCoBan"] ?>" name="luongcoban" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Hệ Số Lương</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Hệ số lương" required="" value="<?php echo $detail[0]["HeSoLuong"] ?>" name="hesoluong" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Thưởng Phụ Cấp</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Thưởng phụ cấp" required="" value="<?php echo $detail[0]["ThuongPhuCap"] ?>" name="thuongphucap" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Hệ Số Phụ Cấp</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Hệ số phụ cấp" required="" value="<?php echo $detail[0]["HeSoPhuCap"] ?>" name="hesophucap" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Thưởng</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Thưởng" required="" value="<?php echo $detail[0]["Thuong"] ?>" name="thuong">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Phạt</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Phạt" required="" value="<?php echo $detail[0]["Phat"] ?>" name="phat">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Phụ Cấp Khác</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Phụ cấp khác" required="" value="<?php echo $detail[0]["PhuCapKhac"] ?>" name="phucapkhac">
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-12 text-left">
                                                    <a href="<?php echo base_url('tra-luong/'); ?>" class="btn btn-success waves-effect waves-light">Quay Lại</a>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Trả Lương</button>
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
<?php require(__DIR__.'/layouts/footer.php'); ?>



