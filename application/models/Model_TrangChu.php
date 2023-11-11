<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TrangChu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getSumNhanVien(){
		return $this->db->query("SELECT COUNT(*) AS tong FROM nhanvien")->result_array();
	}

	public function getSumPhongBan(){
		return $this->db->query("SELECT COUNT(*) AS tong FROM phongban")->result_array();
	}

	public function getSumBangLuong(){
		return $this->db->query("SELECT COUNT(*) AS tong FROM luong")->result_array();
	}

	public function getSumTraLuong(){
		return $this->db->query("SELECT COUNT(*) AS tong FROM traluong WHERE Thang = ? AND Nam = ?",array(Date('m'),Date('Y')))->result_array();
	}

}

/* End of file Model_TrangChu.php */
/* Location: ./application/models/Model_TrangChu.php */