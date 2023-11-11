<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Phòng Ban</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('phong-ban/'); ?>">Quản Lý Phòng Ban</a></li>
                            <li class="breadcrumb-item active">Chi Tiết Phòng Ban</li>
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
                    <h4 class="card-title">Thông tin chi tiết phòng ban</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            	<div class="card">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="simpleinput">Tên Phòng Ban</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Tên phòng ban" required="" name="tenphongban" value="<?php echo $detail[0]["TenPhongBan"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Địa Chỉ</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Địa chỉ" required="" name="diachi" value="<?php echo $detail[0]["DiaChi"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Số Điện Thoại</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Số điện thoại" required="" name="sodienthoai" value="<?php echo $detail[0]["SoDienThoai"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Email</label>
                                                <input type="email" id="simpleinput" class="form-control" placeholder="Email" required="" name="email" value="<?php echo $detail[0]["Email"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Website</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Website" required="" name="website" value="<?php echo $detail[0]["Website"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Mô Tả</label>
                                                <textarea class="form-control" required id="exampleFormControlTextarea1" rows="3" placeholder="Mô tả" name="mota"><?php echo $detail[0]["MoTa"] ?></textarea>
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-12 text-left">
                                                    <a href="<?php echo base_url('phong-ban/'); ?>" class="btn btn-success waves-effect waves-light">Quay Lại</a>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Thông Tin</button>
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



