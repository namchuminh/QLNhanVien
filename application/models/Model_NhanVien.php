<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_NhanVien extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll($start = 0, $end = 10){
		$sql = "SELECT nhanvien.*, phongban.TenPhongBan, chucvu.TenCV FROM nhanvien, phongban, chucvu WHERE nhanvien.MaPB = phongban.MaPB AND nhanvien.MaCV = chucvu.MaCV ORDER BY nhanvien.MaNV DESC LIMIT ?, ?";
		$result = $this->db->query($sql, array($start, $end));
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM nhanvien";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaNhanVien){
		$sql = "SELECT nhanvien.*, phongban.TenPhongBan, chucvu.TenCV, trinhdohocvan.BacTrinhDo FROM nhanvien, phongban, chucvu, trinhdohocvan WHERE nhanvien.MaPB = phongban.MaPB AND nhanvien.MaCV = chucvu.MaCV AND nhanvien.MaTDHV = trinhdohocvan.MaTDHV AND nhanvien.MaNV = ?";
		$result = $this->db->query($sql, array($MaNhanVien));
		return $result->result_array();
	}

	public function updateById($hoten,$ngaysinh,$gioitinh,$dantoc,$quequan,$ngaybatdaulam,$sodienthoai,$email,$chucvu,$phongban,$tinhtrang,$trinhdohocvan,$MaNhanVien){
		$sql = "UPDATE `nhanvien` SET `HoTen`=?,`GioiTinh`=?,`NgaySinh`=?,`DanToc`=?,`QueQuan`=?,`SoDienThoai`=?,`TinhTrang`=?,`NgayBatDauLam`=?,`Email`=?,`MaCV`=?,`MaPB`=?,`MaTDHV`=? WHERE `MaNV`=?";
		$result = $this->db->query($sql,array($hoten,$gioitinh,$ngaysinh,$dantoc,$quequan,$sodienthoai,$tinhtrang,$ngaybatdaulam,$email,$chucvu,$phongban,$trinhdohocvan,$MaNhanVien));
		return $result;
	}

	public function add($hoten,$ngaysinh,$gioitinh,$dantoc,$quequan,$ngaybatdaulam,$sodienthoai,$email,$chucvu,$phongban,$tinhtrang,$trinhdohocvan,$avatar){
		$sql = "INSERT INTO `nhanvien`(`HoTen`, `GioiTinh`, `NgaySinh`, `DanToc`, `QueQuan`, `SoDienThoai`, `TinhTrang`, `NgayBatDauLam`, `Email`, `Avatar`, `MaCV`, `MaPB`, `MaTDHV`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$result = $this->db->query($sql,array($hoten,$gioitinh,$ngaysinh,$dantoc,$quequan,$sodienthoai,$tinhtrang,$ngaybatdaulam,$email,$avatar,$chucvu,$phongban,$trinhdohocvan));
		return $result;
	}

	public function updateImageById($avatar,$MaNhanVien){
		$sql = "UPDATE `nhanvien` SET `Avatar`=? WHERE `MaNV`=?";
		$result = $this->db->query($sql,array($avatar,$MaNhanVien));
		return $result;
	}

	public function delete($MaNhanVien){
		$sql = "DELETE FROM `nhanvien` WHERE `MaNV`= ?";
		$result = $this->db->query($sql,array($MaNhanVien));
		return $result;
	}

	public function getAllHocVan(){
		$sql = "SELECT * FROM trinhdohocvan ORDER BY MaTDHV DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getAllPhongBan(){
		$sql = "SELECT * FROM phongban ORDER BY MaPB DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getAllChucVu(){
		$sql = "SELECT * FROM chucvu ORDER BY MaCV DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getBySelected($phongBanId, $chucVuId){
		$sql = "SELECT * FROM nhanvien WHERE MaPB = ? AND MaCV = ? ORDER BY MaNV DESC";
		$result = $this->db->query($sql, array($phongBanId, $chucVuId));
		return $result->result_array();
	}

}

/* End of file Model_KhachHang.php */
/* Location: ./application/models/Model_KhachHang.php */