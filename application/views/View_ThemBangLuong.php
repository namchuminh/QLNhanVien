<?php require(__DIR__.'/layouts/header.php'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Quản Lý Thông Tin Bảng Lương</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('bang-luong/'); ?>">Quản Lý Bảng Lương</a></li>
                            <li class="breadcrumb-item active">Thêm Bảng Lương Mới</li>
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
                    <h4 class="card-title">Thông tin chi tiết bảng lương</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            	<div class="card">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="simpleinput">Tên Phòng Ban</label>
                                                <select name="phongban" required="" class="form-control" id="phongbanSelect">
                                                    <?php foreach ($phongban as $key => $value): ?>
                                                        <option value="<?php echo $value["MaPB"]; ?>"><?php echo $value["TenPhongBan"]; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Chức Vụ</label>
                                                <select name="chucvu" required="" class="form-control" id="chucvuSelect">
                                                    <?php foreach ($chucvu as $key => $value): ?>
                                                        <option value="<?php echo $value["MaCV"]; ?>"><?php echo $value["TenCV"]; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Họ Tên</label>
                                                <select name="nhanvien" required="" class="form-control nhanvien">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Hệ Số Lương</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Hệ số lương" required="" name="hesoluong">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Thưởng Phụ Cấp</label>
                                                <input type="number" id="simpleinput" class="form-control" placeholder="Thưởng phụ cấp" required="" name="thuongphucap">
                                            </div>
                                            <div class="form-group">
                                                <label for="simpleinput">Hệ Số Phụ Cấp</label>
                                                <input type="text" id="simpleinput" class="form-control" placeholder="Hệ số phụ cấp" required="" name="hesophucap">
                                            </div>
                                            <div class="form-group row mt-4">
                                                <div class="col-12 text-left">
                                                    <a href="<?php echo base_url('bang-luong/'); ?>" class="btn btn-success waves-effect waves-light">Quay Lại</a>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm Bảng Lương</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var url = "<?php echo base_url('bang-luong/thong-tin-nhan-vien/'); ?>"

    function getNhanVien(phongBanId,chucVuId){
        $.post(url, {phongBanId, chucVuId}, function(result){
            var data = JSON.parse(result)

            if(data.length >= 1){
                $(".nhanvien").empty();
                for(var i = 0; i < data.length; i++){
                    var gioitinh = data[i].GioiTinh == 1 ? 'Nam' : 'Nữ';
                    var ngaysinh = new Date(data[i].NgaySinh).toLocaleDateString('en-GB');
                    $(".nhanvien").append('<option value="'+data[i].MaNV+'">'+data[i].HoTen+' - '+ gioitinh +' - '+ ngaysinh +'</option>');
                }
            }else{
                $(".nhanvien").empty();
            }
        });
    }

    $(document).ready(function(){
        var phongBanId = $("#phongbanSelect").val();
        var chucVuId = $("#chucvuSelect").val();

        // Lấy giá trị khi select thay đổi
        $("#phongbanSelect").change(function(){
            phongBanId = $(this).val();
            getNhanVien(phongBanId,chucVuId)
        });

        // Lấy giá trị khi select thay đổi
        $("#chucvuSelect").change(function(){
            chucVuId = $(this).val();
            getNhanVien(phongBanId,chucVuId)
        });

        getNhanVien(phongBanId,chucVuId)
    });
</script>





