<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Trình Độ</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Quản Lý Trình Độ</li>
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
                    <h4 class="card-title">Danh sách thông tin trình độ</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                            	<div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >STT</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Bậc Trình Độ</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Chuyên Ngành</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Năm Tốt Nghiệp</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Nơi Đào Tạo</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Xem Chi Tiết
                                                </th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Xóa Trình Độ
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $key => $value): ?>
                                        		<tr role="row" class="odd">
                                                    <td><?php echo $key + 1; ?></td>
    	                                            <td><?php echo $value['BacTrinhDo']; ?></td>
                                                    <td><?php echo $value['ChuyenNganh']; ?></td>
                                                    <td><?php echo $value['NamTotNghiep']; ?></td>
                                                    <td><?php echo $value['NoiDaoTao']; ?></td>
                                                    <td>
                                                        <a class="btn btn-secondary" style="width: 100%;" href="<?php echo base_url('trinh-do/xem/'.$value['MaTDHV'].'/') ?>">XEM</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger" style="width: 100%;" href="<?php echo base_url('trinh-do/xoa/'.$value['MaTDHV'].'/') ?>">XÓA</a>
                                                    </td>
    	                                        </tr>
                                        	<?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
                                    <ul class="pagination pagination-rounded">
                                        <?php for($i = 1; $i <= $totalPages; $i++){ ?>
                                       		<li style="margin-right: 5px;" class="paginate_button page-item"><a href="<?php echo base_url('trinh-do/trang/'.$i.'/') ?>"
                                                class="page-link"><?php echo $i; ?></a></li>
                                        <?php } ?>           
                                    </ul>
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