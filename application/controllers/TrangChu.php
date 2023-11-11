<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$this->load->model('Model_TrangChu');
	}

	public function index()
	{
		$data['tongnhanvien'] = $this->Model_TrangChu->getSumNhanVien()[0]['tong'];
		$data['tongphongban'] = $this->Model_TrangChu->getSumPhongBan()[0]['tong'];
		$data['tongbangluong'] = $this->Model_TrangChu->getSumBangLuong()[0]['tong'];
		$data['tongtraluong'] = $this->Model_TrangChu->getSumTraLuong()[0]['tong'];
		return $this->load->view('View_TrangChu',$data);
	}

}

/* End of file TrangChu.php */
/* Location: ./application/controllers/TrangChu.php */