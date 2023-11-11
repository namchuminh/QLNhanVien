<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChucVu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = array();
		$this->load->model('Model_ChucVu');

	}

	public function index()
	{
		$totalRecords = $this->Model_ChucVu->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_ChucVu->getAll();
		return $this->load->view('View_ChucVu', $data);
	}


	public function Page($trang){

		$totalRecords = $this->Model_ChucVu->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('chuc-vu/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('chuc-vu/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_ChucVu->getAll();
			return $this->load->view('View_ChucVu', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_ChucVu->getAll($start);
			return $this->load->view('View_ChucVu', $data);
		}
	}

	public function Add(){

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenchucvu = $this->input->post('tenchucvu');
			$mota = $this->input->post('mota');
			$luongcoban = $this->input->post('luongcoban');

			$this->Model_ChucVu->add($tenchucvu,$mota,$luongcoban);

			return redirect(base_url('chuc-vu/'));
		}

		return $this->load->view('View_ThemChucVu');
	}

	public function View($MaChucVu){
		if(count($this->Model_ChucVu->getById($MaChucVu)) == 0){
			return redirect(base_url('chuc-vu/'));
		}

		$data['detail'] = $this->Model_ChucVu->getById($MaChucVu);

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenchucvu = $this->input->post('tenchucvu');
			$mota = $this->input->post('mota');
			$luongcoban = $this->input->post('luongcoban');

			$this->Model_ChucVu->updateById($tenchucvu,$mota,$luongcoban,$MaChucVu);

			$data['detail'] = $this->Model_ChucVu->getById($MaChucVu);
			return $this->load->view('View_ChiTietChucVu', $data);
		}
		
		return $this->load->view('View_ChiTietChucVu', $data);
	}

	public function delete($MaChucVu){
		$this->Model_ChucVu->delete($MaChucVu);
		return redirect(base_url('chuc-vu/'));
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */