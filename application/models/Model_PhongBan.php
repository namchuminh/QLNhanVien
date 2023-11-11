<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_PhongBan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT * FROM phongban ORDER BY MaPB DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM phongban";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaPB){
		$sql = "SELECT * FROM phongban WHERE MaPB = ?";
		$result = $this->db->query($sql, array($MaPB));
		return $result->result_array();
	}

	public function updateById($tenphongban,$diachi,$sodienthoai,$email,$website,$mota,$MaPhongBan){
		$sql = "UPDATE `phongban` SET `TenPhongBan`=?,`DiaChi`=?,`SoDienThoai`=?,`Email`=?,`Website`=?,`MoTa`=? WHERE `MaPB`=?";
		$result = $this->db->query($sql,array($tenphongban,$diachi,$sodienthoai,$email,$website,$mota,$MaPhongBan));
		return $result;
	}

	public function add($tenphongban,$diachi,$sodienthoai,$email,$website,$mota){
		$sql = "INSERT INTO `phongban`(`TenPhongBan`, `DiaChi`, `SoDienThoai`, `Email`, `Website`, `MoTa`) VALUES (?,?,?,?,?,?)";
		$result = $this->db->query($sql,array($tenphongban,$diachi,$sodienthoai,$email,$website,$mota));
		return $result;
	}


	public function delete($MaPB){
		$sql = "DELETE FROM `phongban` WHERE `MaPB`= ?";
		$result = $this->db->query($sql,array($MaPB));
		return $result;
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */