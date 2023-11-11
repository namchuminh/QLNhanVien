<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Trình Độ</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('trinh-do/'); ?>">Quản Lý Trình Độ</a></li>
                            <li class="breadcrumb-item active">Thêm Trình Độ Mới</li>
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
                    <h4 class="card-title">Thông tin chi tiết trình độ</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            	<div class="card">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="simpleinput">Bậc Trình Độ</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Bậc trình độ" required="" name="bactrinhdo">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Chuyên Ngành</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Chuyên ngành" required="" name="chuyennganh">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Năm Tốt Nghiệp</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Năm tốt nghiệp" required="" name="namtotnghiep">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Nơi Đào Tạo</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Nơi đào tạo" required="" name="noidaotao">
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-12 text-left">
                                                    <a href="<?php echo base_url('trinh-do/'); ?>" class="btn btn-success waves-effect waves-light">Quay Lại</a>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm Trình Độ</button>
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



