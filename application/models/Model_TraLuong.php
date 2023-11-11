<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_TraLuong extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT traluong.*, nhanvien.HoTen, nhanvien.NgaySinh, nhanvien.GioiTinh, chucvu.TenCV, phongban.TenPhongBan FROM traluong, nhanvien, chucvu, phongban WHERE traluong.MaNV = nhanvien.MaNV AND nhanvien.MaCV = chucvu.MaCV AND nhanvien.MaPB = phongban.MaPB ORDER BY traluong.MaTraLuong DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM traluong";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaTraLuong){
		$sql = "SELECT traluong.*, nhanvien.HoTen, nhanvien.NgaySinh, nhanvien.GioiTinh, chucvu.TenCV, chucvu.LuongCoBan, phongban.TenPhongBan, luong.* FROM traluong, nhanvien, chucvu, phongban, luong WHERE traluong.MaNV = nhanvien.MaNV AND nhanvien.MaCV = chucvu.MaCV AND traluong.MaNV = luong.MaNV AND nhanvien.MaPB = phongban.MaPB AND traluong.MaTraLuong = ?";
		$result = $this->db->query($sql, array($MaTraLuong));
		return $result->result_array();
	}

	public function updateById($phucapkhac,$thuong,$phat,$tongluong,$MaTraLuong){
		$sql = "UPDATE `traluong` SET `PhuCapKhac`=?,`Thuong`=?,`Phat`=?,`TongLuong`=? WHERE `MaTraLuong`= ?";
		$result = $this->db->query($sql,array($phucapkhac,$thuong,$phat,$tongluong,$MaTraLuong));
		return $result;
	}

	public function add($phucapkhac,$thuong,$phat,$tongluong,$nhanvien){
		$sql = "INSERT INTO `traluong`(`PhuCapKhac`, `Thuong`, `Phat`, `TongLuong`, `Thang`, `Nam`, `MaNV`) VALUES (?,?,?,?,?,?,?)";
		$result = $this->db->query($sql,array($phucapkhac,$thuong,$phat,$tongluong,date('m'),date('Y'),$nhanvien));
		return $result;
	}

	public function getByMaNV($manhanvien){
		$sql = "SELECT * FROM traluong WHERE MaNV = ? AND Thang = ? AND Nam = ?";
		$result = $this->db->query($sql, array($manhanvien,date('m'),date('Y')));
		return $result->result_array();
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */