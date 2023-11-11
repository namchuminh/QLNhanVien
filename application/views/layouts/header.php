<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Trang Quản Trị Dành Cho Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('public/admin/'); ?>images/favicon.ico">
    <link href="<?php echo base_url('public/admin/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/admin/'); ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('public/admin/'); ?>css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-plus"></i> Thêm Mới
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 70px, 0px);">

                            <!-- item-->
                            <a href="<?php echo base_url('nhan-vien/them/') ?>" class="dropdown-item notify-item">
                                Nhân Viên
                            </a>

                            <!-- item-->
                            <a href="<?php echo base_url('phong-ban/them/') ?>" class="dropdown-item notify-item">
                                Phòng Ban
                            </a>

                            <!-- item-->
                            <a href="<?php echo base_url('chuc-vu/them/') ?>" class="dropdown-item notify-item">
                                Chức Vụ
                            </a>

                            <!-- item-->
                            <a href="<?php echo base_url('trinh-do/them/') ?>" class="dropdown-item notify-item">
                                Trình Độ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Chào, <?php echo $_SESSION['hoten']; ?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="<?php echo base_url('dang-xuat/') ?>">
                                <span>Đăng Xuất</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="<?php echo base_url('admin/'); ?>" class="logo">
                        <img src="<?php echo base_url('public/admin/'); ?>images/logo-light.png" />
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">TỔNG QUAN HỆ THỐNG</li>

                        <li>
                            <a href="<?php echo base_url(); ?>" class="waves-effect"><i class='bx bx-home-smile'></i><span class="badge badge-pill badge-primary float-right"></span><span>Trang Chủ</span></a>
                        </li>

                        <li class="menu-title">QUẢN LÝ THÔNG TIN</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-id-card"></i><span>Nhân Viên</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('nhan-vien/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('nhan-vien/them/'); ?>">Thêm Mới</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-book-content"></i><span>Phòng Ban</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('phong-ban/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('phong-ban/them/'); ?>">Thêm Mới</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-layer"></i><span>Chức Vụ</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('chuc-vu/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('chuc-vu/them/'); ?>">Thêm Mới</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-book"></i><span>Trình Độ</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('trinh-do/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('trinh-do/them/'); ?>">Thêm Mới</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">QUẢN LÝ TRẢ LƯƠNG</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-barcode"></i><span>Bảng Lương</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('bang-luong/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('bang-luong/them/'); ?>">Thêm Mới</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-credit-card"></i><span>Trả Lương</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo base_url('tra-luong/'); ?>">Danh Sách</a></li>
                                <li><a href="<?php echo base_url('tra-luong/them/'); ?>">Thêm Mới</a>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">