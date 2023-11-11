<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Luong extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = array();
		$this->load->model('Model_Luong');
		$this->load->model('Model_NhanVien');
	}

	public function index()
	{
		$totalRecords = $this->Model_Luong->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_Luong->getAll();
		return $this->load->view('View_Luong', $data);
	}


	public function Page($trang){

		$totalRecords = $this->Model_Luong->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('bang-luong/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('bang-luong/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_Luong->getAll();
			return $this->load->view('View_Luong', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_Luong->getAll($start);
			return $this->load->view('View_Luong', $data);
		}
	}

	public function Add(){
		$data['phongban'] = $this->Model_NhanVien->getAllPhongBan();
		$data['chucvu'] = $this->Model_NhanVien->getAllChucVu();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$nhanvien = $this->input->post('nhanvien');
			$phongban = $this->input->post('phongban');
			$hesoluong = $this->input->post('hesoluong');
			$thuongphucap = $this->input->post('thuongphucap');
			$hesophucap = $this->input->post('hesophucap');

			if(count($this->Model_Luong->getByMaNV($nhanvien)) >= 1){
				return redirect(base_url('bang-luong/xem/'.$this->Model_Luong->getByMaNV($nhanvien)[0]['MaLuong'].'/'));
			}

			$this->Model_Luong->add($hesoluong,$hesophucap,$thuongphucap,$nhanvien);

			return redirect(base_url('bang-luong/'));
		}

		return $this->load->view('View_ThemBangLuong',$data);
	}

	public function View($MaLuong){
		if(count($this->Model_Luong->getById($MaLuong)) == 0){
			return redirect(base_url('bang-luong/'));
		}

		$data['detail'] = $this->Model_Luong->getById($MaLuong);

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hesoluong = $this->input->post('hesoluong');
			$thuongphucap = $this->input->post('thuongphucap');
			$hesophucap = $this->input->post('hesophucap');
			$this->Model_Luong->updateById($hesoluong,$thuongphucap,$hesophucap,$MaLuong);

			$data['detail'] = $this->Model_Luong->getById($MaLuong);
			return $this->load->view('View_ChiTietBangLuong', $data);
		}
		
		return $this->load->view('View_ChiTietBangLuong', $data);
	}

	public function NhanVien(){
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$phongBanId = $this->input->post('phongBanId');
			$chucVuId = $this->input->post('chucVuId');

			$data = $this->Model_NhanVien->getBySelected($phongBanId, $chucVuId);
			echo json_encode($data);
		}else{
			return redirect(base_url('bang-luong/'));
		}
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */