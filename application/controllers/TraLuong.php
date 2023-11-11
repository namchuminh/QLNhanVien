<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TraLuong extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = array();
		$this->load->model('Model_TraLuong');
		$this->load->model('Model_NhanVien');
		$this->load->model('Model_ChucVu');
		$this->load->model('Model_Luong');
	}

	public function index()
	{
		$totalRecords = $this->Model_TraLuong->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_TraLuong->getAll();
		return $this->load->view('View_TraLuong', $data);
	}


	public function Page($trang){

		$totalRecords = $this->Model_TraLuong->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('tra-luong/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('tra-luong/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_TraLuong->getAll();
			return $this->load->view('View_TraLuong', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_TraLuong->getAll($start);
			return $this->load->view('View_TraLuong', $data);
		}
	}

	public function Add(){
		$data['phongban'] = $this->Model_NhanVien->getAllPhongBan();
		$data['chucvu'] = $this->Model_NhanVien->getAllChucVu();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$chucvu = $this->input->post('chucvu');
			$nhanvien = $this->input->post('nhanvien');

			if(count($this->Model_TraLuong->getByMaNV($nhanvien)) >= 1){
				return redirect(base_url('tra-luong/xem/'.$this->Model_TraLuong->getByMaNV($nhanvien)[0]['MaTraLuong'].'/'));
			}

			if(count($this->Model_Luong->getByMaNV($nhanvien)) < 1){
				$data['error'] = "Vui lòng thêm bảng lương cho nhân viên trước!";
				return $this->load->view('View_ThemTraLuong',$data);
			}

			$thuong = $this->input->post('thuong');
			$phat = $this->input->post('phat');
			$phucapkhac = $this->input->post('phucapkhac');

			$hesoluong = $this->Model_Luong->getByMaNV($nhanvien)[0]['HeSoLuong'];
			$thuongphucap = $this->Model_Luong->getByMaNV($nhanvien)[0]['ThuongPhuCap'];
			$hesophucap = $this->Model_Luong->getByMaNV($nhanvien)[0]['HeSoPhuCap'];
			$luongcoban = $this->Model_ChucVu->getById($chucvu)[0]['LuongCoBan'];

			$tongluong = ($luongcoban * $hesoluong) + ($thuongphucap * $hesophucap) + $thuong + $phucapkhac - $phat; 

			$this->Model_TraLuong->add($phucapkhac,$thuong,$phat,$tongluong,$nhanvien);

			return redirect(base_url('tra-luong/'));
		}

		return $this->load->view('View_ThemTraLuong',$data);
	}

	public function View($MaTraLuong){
		if(count($this->Model_TraLuong->getById($MaTraLuong)) == 0){
			return redirect(base_url('tra-luong/'));
		}

		$data['detail'] = $this->Model_TraLuong->getById($MaTraLuong);

		if ($this->input->server('REQUEST_METHOD') === 'POST') {

			$thuong = $this->input->post('thuong');
			$phat = $this->input->post('phat');
			$phucapkhac = $this->input->post('phucapkhac');

			$luongcoban = $this->Model_TraLuong->getById($MaTraLuong)[0]['LuongCoBan'];
			$hesoluong = $this->Model_TraLuong->getById($MaTraLuong)[0]['HeSoLuong'];
			$thuongphucap = $this->Model_TraLuong->getById($MaTraLuong)[0]['ThuongPhuCap'];
			$hesophucap = $this->Model_TraLuong->getById($MaTraLuong)[0]['HeSoPhuCap'];

			$tongluong = ($luongcoban * $hesoluong) + ($thuongphucap * $hesophucap) + $thuong + $phucapkhac - $phat; 

			$this->Model_TraLuong->updateById($phucapkhac,$thuong,$phat,$tongluong,$MaTraLuong);

			$data['detail'] = $this->Model_TraLuong->getById($MaTraLuong);
			return $this->load->view('View_ChiTietTraLuong', $data);
		}
		
		return $this->load->view('View_ChiTietTraLuong', $data);
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */