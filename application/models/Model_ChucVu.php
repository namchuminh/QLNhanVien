<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ChucVu extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT * FROM chucvu ORDER BY LuongCoBan DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM chucvu";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaCV){
		$sql = "SELECT * FROM chucvu WHERE MaCV = ?";
		$result = $this->db->query($sql, array($MaCV));
		return $result->result_array();
	}

	public function add($tenchucvu,$mota,$luongcoban){
		$sql = "INSERT INTO `chucvu`(`TenCV`, `MoTa`, `LuongCoBan`) VALUES (?,?,?)";
		$result = $this->db->query($sql,array($tenchucvu,$mota,$luongcoban));
		return $result;
	}

	public function updateById($tenchucvu,$mota,$luongcoban,$MaChucVu){
		$sql = "UPDATE `chucvu` SET `TenCV`=?,`MoTa`=?,`LuongCoBan`=? WHERE `MaCV`=?";
		$result = $this->db->query($sql,array($tenchucvu,$mota,$luongcoban,$MaChucVu));
		return $result;
	}

	public function delete($MaChucVu){
		$sql = "DELETE FROM `chucvu` WHERE `MaCV`= ?";
		$result = $this->db->query($sql,array($MaChucVu));
		return $result;
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */