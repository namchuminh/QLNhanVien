<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Luong extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT luong.*, nhanvien.HoTen, nhanvien.NgaySinh, nhanvien.GioiTinh, chucvu.TenCV, chucvu.LuongCoBan, phongban.TenPhongBan FROM luong, nhanvien, chucvu, phongban WHERE luong.MaNV = nhanvien.MaNV AND nhanvien.MaCV = chucvu.MaCV AND nhanvien.MaPB = phongban.MaPB ORDER BY luong.MaLuong DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function getAllQuanLy($maphongban, $start = 0, $end = 10){
		$sql = "SELECT luong.*, nhanvien.HoTen, nhanvien.NgaySinh, nhanvien.GioiTinh, chucvu.TenCV, chucvu.LuongCoBan, phongban.TenPhongBan FROM luong, nhanvien, chucvu, phongban WHERE luong.MaNV = nhanvien.MaNV AND nhanvien.MaCV = chucvu.MaCV AND nhanvien.MaPB = phongban.MaPB AND nhanvien.PhanQuyen != 2 AND nhanvien.PhanQuyen != 3 AND nhanvien.MaPB = ? ORDER BY luong.MaLuong DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($maphongban, $start, $end));
		return $result->result_array();
	}

	public function checkNumberQuanLy($maphongban){
		$sql = "SELECT luong.*, nhanvien.HoTen, nhanvien.NgaySinh, nhanvien.GioiTinh, chucvu.TenCV, chucvu.LuongCoBan, phongban.TenPhongBan FROM luong, nhanvien, chucvu, phongban WHERE luong.MaNV = nhanvien.MaNV AND nhanvien.MaCV = chucvu.MaCV AND nhanvien.MaPB = phongban.MaPB AND nhanvien.PhanQuyen != 2 AND nhanvien.PhanQuyen != 3 AND nhanvien.MaPB = ?";
		$result = $this->db->query($sql, array($maphongban));
		return $result->num_rows();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM luong";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaLuong){
		$sql = "SELECT luong.*, nhanvien.HoTen, nhanvien.NgaySinh, nhanvien.GioiTinh, chucvu.TenCV, chucvu.LuongCoBan, phongban.TenPhongBan FROM luong, nhanvien, chucvu, phongban WHERE luong.MaNV = nhanvien.MaNV AND nhanvien.MaCV = chucvu.MaCV AND nhanvien.MaPB = phongban.MaPB AND luong.MaLuong = ?";
		$result = $this->db->query($sql, array($MaLuong));
		return $result->result_array();
	}

	public function updateById($hesoluong,$thuongphucap,$hesophucap,$MaLuong){
		$sql = "UPDATE `luong` SET `HeSoLuong`=?,`ThuongPhuCap`=?,`HeSoPhuCap`=? WHERE `MaLuong`=?";
		$result = $this->db->query($sql,array($hesoluong,$thuongphucap,$hesophucap,$MaLuong));
		return $result;
	}

	public function add($hesoluong,$hesophucap,$thuongphucap,$nhanvien){
		$sql = "INSERT INTO `luong`(`HeSoLuong`, `HeSoPhuCap`, `ThuongPhuCap`, `MaNV`) VALUES (?,?,?,?)";
		$result = $this->db->query($sql,array($hesoluong,$hesophucap,$thuongphucap,$nhanvien));
		return $result;
	}

	public function getByMaNV($manhanvien){
		$sql = "SELECT * FROM luong WHERE MaNV = ?";
		$result = $this->db->query($sql, array($manhanvien));
		return $result->result_array();
	}


	public function delete($MaPB){
		$sql = "DELETE FROM `phongban` WHERE `MaPB`= ?";
		$result = $this->db->query($sql,array($MaPB));
		return $result;
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */