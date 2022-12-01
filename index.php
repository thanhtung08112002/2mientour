<?php
//session
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once 'app/config.php';

#Controllers admin
require_once 'app/controllers/admin/controllers_admin.php';
require_once 'app/controllers/admin/admin.php';
require_once 'app/controllers/admin/ban_quan_ly.php';
require_once 'app/controllers/admin/account_admin.php';
require_once 'app/controllers/admin/account_admin.php';
require_once 'app/controllers/admin/thanh_toan_tour.php';
require_once 'app/controllers/admin/thong_ke.php';






#Views admin



#Controllers client
require_once 'app/controllers/client/controllers.php';
require_once 'app/controllers/client/page_home.php';
require_once 'app/controllers/client/tour_detail.php';
require_once 'app/controllers/client/list_tour.php';
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
require_once 'app/config.php';
require_once 'app/models/dang_ky_nhan_uu_dai.php';
require_once 'app/models/du_lich_trong_nuoc.php';
require_once 'app/models/thanh_toan_tour.php';
require_once 'app/models/ma_giam_gia.php';
require_once 'app/models/phuong_thuc_thanh_toan.php';
require_once 'app/models/thong_ke.php';









//chuyển giá tiền có dấu , .
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'VND')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}

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
    case 'tourdetail':
        if (isset($_GET['matour'])) {
            showTourDetail($_GET['matour']);
        } else {
            error_404();
        }
        break;
    case 'admin':
        goToAdmin();
        break;

    case 'check_login':
        if (isset($_POST['btn-login'])) {
            checkLogin();
        } else {
            error_404();
        }
        break;

        // trang admin
    case 'admin_page':
        if (isset($_SESSION['login_success'])) {
            admin_page();
        } else {
            error_404();
        }
        break;
        // trang thêm nhân viên
    case 'add_nhan_vien':
        if (isset($_SESSION['login_success'])) {
            show_them_nhan_vien();
        } else {
            error_404();
        }
        break;
        // thêm lưu nhân viên
    case 'save_nhan_vien':
        if (isset($_SESSION['login_success'])) {
            save_add_nhan_vien();
        } else {
            error_404();
        }
        break;
        // trang danh sách  nhân viên
    case 'list_nhan_vien':
        if (isset($_SESSION['login_success'])) {
            show_list_nhan_vien();
        } else {
            error_404();
        }
        break;

        // trang sửa nhân viên
    case 'edit_nhan_vien':
        if (isset($_SESSION['login_success'])) {
            show_edit_nhan_vien();
        } else {
            error_404();
        }
        break;
    case 'save_edit_nhan_vien':
        if (isset($_SESSION['login_success'])) {
            $id = $_GET['id'];
            save_edit_nhan_vien($id);
        } else {
            error_404();
        }
        break;
        // xóa nhân viên
    case 'delete_nhan_vien':
        if (isset($_SESSION['login_success'])) {
            $id = $_GET['id'];
            delete_nhan_vien($id);
        } else {
            error_404();
        }
        break;
        // danh sách tài khoản
    case 'list_accounts':
        if (isset($_SESSION['login_success'])) {
            showALLaccount();
        } else {
            error_404();
        }
        break;
        // xóa tài khoản accounts
    case 'delete_tai_khoan':
        if (isset($_SESSION['login_success'])) {
            $id = $_GET['id'];
            delete_account($id);
        } else {
            error_404();
        }
        break;
        // trang sửa accounts
    case 'edit_account':
        if (isset($_SESSION['login_success'])) {
            show_edit_account();
        } else {
            error_404();
        }
        break;
    case 'save_edit_account':
        if (isset($_SESSION['login_success'])) {
            $id = $_GET['id'];
            save_edit_account($id);
        } else {
            error_404();
        }
        break;
        // trang thêm accounts
    case 'add_account':
        if (isset($_SESSION['login_success'])) {
            show_add_account();
        } else {
            error_404();
        }
        break;
        // thêm lưu nhân viên
    case 'save_account':
        if (isset($_SESSION['login_success'])) {
            save_add_account();
        } else {
            error_404();
        }
        break;
        // trang thanh toán tour
    case 'list_thanh_toan_tour':
        if (isset($_SESSION['login_success'])) {
            showAllthanhtoantour();
        } else {
            error_404();
        }
        break;
        // xóa thanh toán tour
    case 'delete_thanh_toan':
        if (isset($_SESSION['login_success'])) {
            $id = $_GET['id'];
            delete_thanh_toan_tour($id);
        } else {
            error_404();
        }
        break;
        // edit thanh toán tour
    case 'edit_thanh_toan':
        if (isset($_SESSION['login_success'])) {
            show_edit_thanh_toan($_GET['id']);
        } else {
            error_404();
        }
        break;

    case 'save_edit_thanh_toan':
        if (isset($_SESSION['login_success'])) {
            $id = $_GET['id'];
            save_edit_thanh_toan($id);
        } else {
            error_404();
        }
        break;
        // thống kê
    case 'thong_ke':
        if (isset($_SESSION['login_success'])) {
            showAllThongKe();
        } else {
            error_404();
        }
        break;
        // thống kê theo miền
    case 'thong_ke_theo_mien':
        if (isset($_SESSION['login_success'])) {
            showAllThongKeTheoMien();
        } else {
            error_404();
        }
        break;
    case 'danh_sach_thong_ke_tour_chi_tiet':
        if (isset($_SESSION['login_success'])) {
            showAllDanhSachThongKeChiTiet();
        } else {
            error_404();
        }
        break;

    case 'thong_ke_theo_mien_chi_tiet':
        if (isset($_SESSION['login_success'])) {
            $ma_thanh_pho = $_GET['ma_thanh_pho'];
            danh_sach_tour_chi_tiet($ma_thanh_pho);
        } else {
            error_404();
        }
        break;



    case 'tour/result-search':
        if (isset($_POST['btn_search_tour'])) {
            searchTour();
        } else {
            header("Location: " . ROOT);
        }
        break;
    case 'register_promotion':
        if (isset($_POST['btn-register-promotion'])) {
            addEmailRegiterPromotion();
        } else {
            header("Location: " . ROOT);
        }
        break;
        //fix
    case 'fix':
        fix();
        break;
    default:
        error_404();
}
