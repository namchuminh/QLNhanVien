<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TrinhDo extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT * FROM trinhdohocvan ORDER BY MaTDHV DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM trinhdohocvan";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaTDHV){
		$sql = "SELECT * FROM trinhdohocvan WHERE MaTDHV = ?";
		$result = $this->db->query($sql, array($MaTDHV));
		return $result->result_array();
	}

	public function add($bactrinhdo,$chuyennganh,$namtotnghiep,$noidaotao){
		$sql = "INSERT INTO `trinhdohocvan`(`BacTrinhDo`, `ChuyenNganh`, `NamTotNghiep`, `NoiDaoTao`) VALUES (?,?,?,?)";
		$result = $this->db->query($sql,array($bactrinhdo,$chuyennganh,$namtotnghiep,$noidaotao));
		return $result;
	}

	public function updateById($bactrinhdo,$chuyennganh,$namtotnghiep,$noidaotao,$MaTrinhDo){
		$sql = "UPDATE `trinhdohocvan` SET `BacTrinhDo`=?,`ChuyenNganh`=?,`NamTotNghiep`=?,`NoiDaoTao`=? WHERE `MaTDHV`=?";
		$result = $this->db->query($sql,array($bactrinhdo,$chuyennganh,$namtotnghiep,$noidaotao,$MaTrinhDo));
		return $result;
	}

	public function delete($MaTrinhDo){
		$sql = "DELETE FROM `trinhdohocvan` WHERE `MaTDHV`= ?";
		$result = $this->db->query($sql,array($MaTrinhDo));
		return $result;
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */