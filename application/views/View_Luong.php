<?php require(__DIR__.'/layouts/header.php'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Bảng Lương</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item active">Quản Lý Bảng Lương</li>
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
                    <h4 class="card-title">Danh sách thông tin bảng lương</h4>
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
                                                    >Tên Nhân Viên</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
	                                                colspan="1"
	                                                >Ngày Sinh</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Giới Tính</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Tên Phòng Ban</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Chức Vụ</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Lương Cơ Bản</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Hệ Số Lương</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Thưởng Phụ Cấp</th>
                                                <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Hệ Số Phụ Cấp</th>
	                                            <th tabindex="0" aria-controls="basic-datatable" rowspan="1"
                                                    colspan="1"
                                                    >Xem Chi Tiết
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $key => $value): ?>
                                        		<tr role="row" class="odd">
                                                    <td><?php echo $key + 1; ?></td>
    	                                            <td><?php echo $value['HoTen']; ?></td>
                                                    <td><?php echo date("d/m/Y", strtotime($value['NgaySinh'])); ?></td>
                                                    <td>
                                                        <?php 
                                                            if ($value['GioiTinh'] == 1) {
                                                                echo "Nam"; 
                                                            }else{
                                                                echo "Nữ"; 
                                                            }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $value['TenPhongBan']; ?></td>
                                                    <td><?php echo $value['TenCV']; ?></td>
                                                    <td><?php echo number_format($value['LuongCoBan']); ?> VNĐ / tháng</td>
                                                    <td>x <?php echo $value['HeSoLuong']; ?></td>
                                                    <td><?php echo number_format($value['ThuongPhuCap']); ?> VNĐ / tháng</td>
                                                    <td>x <?php echo $value['HeSoPhuCap']; ?></td>
                                                    <td>
                                                        <a class="btn btn-secondary" style="width: 100%;" href="<?php echo base_url('bang-luong/xem/'.$value['MaLuong'].'/') ?>">XEM</a>
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
                                       		<li style="margin-right: 5px;" class="paginate_button page-item"><a href="<?php echo base_url('bang-luong/trang/'.$i.'/') ?>"
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