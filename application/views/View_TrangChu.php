<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Trang Chủ</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Hệ Thống</a></li>
                            <li class="breadcrumb-item active">Trang Chủ</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bxs-id-card float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">SỐ NHÂN VIÊN</h6>
                        <h3 class="mb-3" data-plugin="counterup">
                            <?php echo $tongnhanvien; ?> nhân viên
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bxs-book-content float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">SỐ PHÒNG BAN</h6>
                        <h3 class="mb-3">
                            <?php echo $tongphongban; ?> phòng ban
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bx-barcode float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">SỐ BẢNG LƯƠNG</h6>
                        <h3 class="mb-3">
                            <?php echo $tongbangluong; ?> bảng lương
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="bx bxs-credit-card float-right m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">ĐÃ NHẬN LƯƠNG THÁNG <?php echo Date('m'); ?></h6>
                        <h3 class="mb-3" data-plugin="counterup">
                        	<?php echo $tongtraluong; ?> nhân viên
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div>

<?php require(__DIR__.'/layouts/footer.php'); ?>