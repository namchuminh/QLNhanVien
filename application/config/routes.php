<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'TrangChu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dang-nhap'] = 'DangNhap/index';
$route['dang-xuat'] = 'DangXuat/index';


$route['nhan-vien'] = 'NhanVien/index';
$route['nhan-vien/them'] = 'NhanVien/Add';
$route['nhan-vien/xem/(:any)'] = 'NhanVien/View/$1';
$route['nhan-vien/xoa/(:any)'] = 'NhanVien/delete/$1';
$route['nhan-vien/trang/(:any)'] = 'NhanVien/Page/$1';

$route['phong-ban'] = 'PhongBan/index';
$route['phong-ban/them'] = 'PhongBan/Add';
$route['phong-ban/xem/(:any)'] = 'PhongBan/View/$1';
$route['phong-ban/xoa/(:any)'] = 'PhongBan/delete/$1';
$route['phong-ban/trang/(:any)'] = 'PhongBan/Page/$1';

$route['chuc-vu'] = 'ChucVu/index';
$route['chuc-vu/them'] = 'ChucVu/Add';
$route['chuc-vu/xem/(:any)'] = 'ChucVu/View/$1';
$route['chuc-vu/xoa/(:any)'] = 'ChucVu/delete/$1';
$route['chuc-vu/trang/(:any)'] = 'ChucVu/Page/$1';

$route['trinh-do'] = 'TrinhDo/index';
$route['trinh-do/them'] = 'TrinhDo/Add';
$route['trinh-do/xem/(:any)'] = 'TrinhDo/View/$1';
$route['trinh-do/xoa/(:any)'] = 'TrinhDo/delete/$1';
$route['trinh-do/trang/(:any)'] = 'TrinhDo/Page/$1';

$route['bang-luong'] = 'Luong/index';
$route['bang-luong/them'] = 'Luong/Add';
$route['bang-luong/xem/(:any)'] = 'Luong/View/$1';
$route['bang-luong/xoa/(:any)'] = 'Luong/delete/$1';
$route['bang-luong/trang/(:any)'] = 'Luong/Page/$1';
$route['bang-luong/thong-tin-nhan-vien'] = 'Luong/NhanVien';

$route['tra-luong'] = 'TraLuong/index';
$route['tra-luong/them'] = 'TraLuong/Add';
$route['tra-luong/xem/(:any)'] = 'TraLuong/View/$1';
$route['tra-luong/xoa/(:any)'] = 'TraLuong/delete/$1';
$route['tra-luong/trang/(:any)'] = 'TraLuong/Page/$1';
