<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PhongBan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = array();
		$this->load->model('Model_PhongBan');
	}

	public function index()
	{
		$totalRecords = $this->Model_PhongBan->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_PhongBan->getAll();
		return $this->load->view('View_PhongBan', $data);
	}


	public function Page($trang){

		$totalRecords = $this->Model_PhongBan->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('phong-ban/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('phong-ban/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_PhongBan->getAll();
			return $this->load->view('View_PhongBan', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_PhongBan->getAll($start);
			return $this->load->view('View_PhongBan', $data);
		}
	}

	public function Add(){

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenphongban = $this->input->post('tenphongban');
			$diachi = $this->input->post('diachi');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$mota = $this->input->post('mota');

			$this->Model_PhongBan->add($tenphongban,$diachi,$sodienthoai,$email,$website,$mota);

			return redirect(base_url('phong-ban/'));
		}

		return $this->load->view('View_ThemPhongBan');
	}

	public function View($MaPhongBan){
		if(count($this->Model_PhongBan->getById($MaPhongBan)) == 0){
			return redirect(base_url('phong-ban/'));
		}

		$data['detail'] = $this->Model_PhongBan->getById($MaPhongBan);

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenphongban = $this->input->post('tenphongban');
			$diachi = $this->input->post('diachi');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$website = $this->input->post('website');
			$mota = $this->input->post('mota');

			$this->Model_PhongBan->updateById($tenphongban,$diachi,$sodienthoai,$email,$website,$mota,$MaPhongBan);

			$data['detail'] = $this->Model_PhongBan->getById($MaPhongBan);
			return $this->load->view('View_ChiTietPhongBan', $data);
		}
		
		return $this->load->view('View_ChiTietPhongBan', $data);
	}

	public function delete($MaPhongBan){
		$this->Model_PhongBan->delete($MaPhongBan);
		return redirect(base_url('phong-ban/'));
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */