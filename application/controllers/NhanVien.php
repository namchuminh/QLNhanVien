<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NhanVien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('taikhoan')){
			return redirect(base_url('dang-nhap/'));
		}
		$data = array();
		$this->load->model('Model_NhanVien');
	}

	public function index()
	{
		$totalRecords = $this->Model_NhanVien->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		$data['totalPages'] = $totalPages;
		$data['list'] = $this->Model_NhanVien->getAll();
		return $this->load->view('View_NhanVien', $data);
	}


	public function Page($trang){

		$totalRecords = $this->Model_NhanVien->checkNumber();
		$recordsPerPage = 10;
		$totalPages = ceil($totalRecords / $recordsPerPage); 

		if($trang < 1){
			return redirect(base_url('nhan-vien/'));
		}

		if($trang > $totalPages){
			return redirect(base_url('nhan-vien/'));
		}

		$start = ($trang - 1) * $recordsPerPage;


		if($start == 0){
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_NhanVien->getAll();
			return $this->load->view('View_NhanVien', $data);
		}else{
			$data['totalPages'] = $totalPages;
			$data['list'] = $this->Model_NhanVien->getAll($start);
			return $this->load->view('View_NhanVien', $data);
		}
	}

	public function Add(){

		$data['hocvan'] = $this->Model_NhanVien->getAllHocVan();
		$data['phongban'] = $this->Model_NhanVien->getAllPhongBan();
		$data['chucvu'] = $this->Model_NhanVien->getAllChucVu();

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hoten = $this->input->post('hoten');
			$ngaysinh = $this->input->post('ngaysinh');
			$gioitinh = $this->input->post('gioitinh');
			$dantoc = $this->input->post('dantoc');
			$quequan = $this->input->post('quequan');
			$ngaybatdaulam = $this->input->post('ngaybatdaulam');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$chucvu = $this->input->post('chucvu');
			$phongban = $this->input->post('phongban');
			$trinhdohocvan = $this->input->post('trinhdohocvan');
			$tinhtrang = $this->input->post('tinhtrang');
			$avatar = "";

			//Update image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('avatar')){
				$imageChinh = $this->upload->data();
				$avatar = base_url('uploads')."/".$imageChinh['file_name'];
			}

			if($avatar == ""){
				$avatar = base_url('uploads/avatar.jpg');
			}

			$this->Model_NhanVien->add($hoten,$ngaysinh,$gioitinh,$dantoc,$quequan,$ngaybatdaulam,$sodienthoai,$email,$chucvu,$phongban,$tinhtrang,$trinhdohocvan,$avatar);

			return redirect(base_url('nhan-vien/'));
		}

		
		return $this->load->view('View_ThemNhanVien', $data);
	}

	public function View($MaNhanVien){
		if(count($this->Model_NhanVien->getById($MaNhanVien)) == 0){
			return redirect(base_url('nhan-vien/'));
		}

		$data['detail'] = $this->Model_NhanVien->getById($MaNhanVien);
		$data['hocvan'] = $this->Model_NhanVien->getAllHocVan();
		$data['phongban'] = $this->Model_NhanVien->getAllPhongBan();
		$data['chucvu'] = $this->Model_NhanVien->getAllChucVu();

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hoten = $this->input->post('hoten');
			$ngaysinh = $this->input->post('ngaysinh');
			$gioitinh = $this->input->post('gioitinh');
			$dantoc = $this->input->post('dantoc');
			$quequan = $this->input->post('quequan');
			$ngaybatdaulam = $this->input->post('ngaybatdaulam');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$chucvu = $this->input->post('chucvu');
			$phongban = $this->input->post('phongban');
			$trinhdohocvan = $this->input->post('trinhdohocvan');
			$tinhtrang = $this->input->post('tinhtrang');

			//Update image
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('avatar')){
				$imageChinh = $this->upload->data();
				$avatar = base_url('uploads')."/".$imageChinh['file_name'];
				$this->Model_NhanVien->updateImageById($avatar,$MaNhanVien);
			}

			$this->Model_NhanVien->updateById($hoten,$ngaysinh,$gioitinh,$dantoc,$quequan,$ngaybatdaulam,$sodienthoai,$email,$chucvu,$phongban,$tinhtrang,$trinhdohocvan,$MaNhanVien);

			$data['detail'] = $this->Model_NhanVien->getById($MaNhanVien);
			return $this->load->view('View_ChiTietNhanVien', $data);
		}

		
		return $this->load->view('View_ChiTietNhanVien', $data);
	}

	public function delete($MaNhanVien){
		$this->Model_NhanVien->delete($MaNhanVien);
		return redirect(base_url('nhan-vien/'));
	}
}

/* End of file KhachHang.php */
/* Location: ./application/controllers/KhachHang.php */