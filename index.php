<?php
//session
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

#Controllers admin
require_once 'app/controllers/admin/controllers_admin.php';
require_once 'app/controllers/admin/admin.php';
require_once 'app/controllers/admin/ban_quan_ly_controller.php';

#Views admin



#Controllers client
require_once 'app/controllers/client/controllers.php';
require_once 'app/controllers/client/page_home.php';
require_once 'app/controllers/client/tour_detail.php';
require_once 'app/controllers/client/error_404.php';

#Views client


#Models 
require_once 'app/models/connect.php';
require_once 'app/models/thong_tin_cong_ty.php';
require_once 'app/models/khoa_tour_chi_tiet.php';
require_once 'app/models/thanh_pho.php';
require_once 'app/models/slider.php';
require_once 'app/models/mien.php';
require_once 'app/models/account_admin.php';
require_once 'app/models/ban_quan_ly_theo_mien.php';
require_once 'app/models/chuc_vu.php';




$url = $_GET['ctr'] ?? '/';
switch ($url) {
    case '/':
        // trang page home
    case 'home':
        showHome();
        break;
        // trang đăng nhập admin
    case 'admin':
        goToAdmin();
        break;
        // chức năng đăng nhập
    case 'check_login':
        if (isset($_POST['btn-login'])) {
            checkLogin();
        } else {
            error_404();
        }
        break;
        // trang admin
    case 'ban_quan_ly':
        show_ban_quan_ly();
        break;
        // trang thêm nhân viên
    case 'add-nhan-vien':
        show_them_nhan_vien();
        break;
        // xóa nhân viên
    case 'delete-nhan-vien':
        $id = $_GET['id'];
        delete_nhan_vien($id);
        break;
    default:
        error_404();
}
