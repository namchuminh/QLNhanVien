<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrinhDo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = array();
		$this->load->model('Model_TrinhDo');
	}

	public function index()
	{
		$totalRecords = $this->Model_TrinhDo->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_TrinhDo->getAll();
		return $this->load->view('View_TrinhDo', $data);
	}


	public function Page($trang){

		$totalRecords = $this->Model_TrinhDo->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('trinh-do/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('trinh-do/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_TrinhDo->getAll();
			return $this->load->view('View_TrinhDo', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_TrinhDo->getAll($start);
			return $this->load->view('View_TrinhDo', $data);
		}
	}

	public function Add(){

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$bactrinhdo = $this->input->post('bactrinhdo');
			$chuyennganh = $this->input->post('chuyennganh');
			$namtotnghiep = $this->input->post('namtotnghiep');
			$noidaotao = $this->input->post('noidaotao');

			$this->Model_TrinhDo->add($bactrinhdo,$chuyennganh,$namtotnghiep,$noidaotao);

			return redirect(base_url('trinh-do/'));
		}

		return $this->load->view('View_ThemTrinhDo');
	}

	public function View($MaTrinhDo){
		if(count($this->Model_TrinhDo->getById($MaTrinhDo)) == 0){
			return redirect(base_url('trinh-do/'));
		}

		$data['detail'] = $this->Model_TrinhDo->getById($MaTrinhDo);

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$bactrinhdo = $this->input->post('bactrinhdo');
			$chuyennganh = $this->input->post('chuyennganh');
			$namtotnghiep = $this->input->post('namtotnghiep');
			$noidaotao = $this->input->post('noidaotao');

			$this->Model_TrinhDo->updateById($bactrinhdo,$chuyennganh,$namtotnghiep,$noidaotao,$MaTrinhDo);

			$data['detail'] = $this->Model_TrinhDo->getById($MaTrinhDo);
			return $this->load->view('View_ChiTietTrinhDo', $data);
		}
		
		return $this->load->view('View_ChiTietTrinhDo', $data);
	}

	public function delete($MaTrinhDo){
		$this->Model_TrinhDo->delete($MaTrinhDo);
		return redirect(base_url('trinh-do/'));
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */