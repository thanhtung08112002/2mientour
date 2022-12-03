<?php
//session

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once 'app/config.php';

#Controllers admin
require_once 'app/controllers/admin/controllers_admin.php';
require_once 'app/controllers/admin/admin.php';
require_once 'app/controllers/admin/admin_list_tour.php';
require_once 'app/controllers/admin/admin_page.php';
require_once 'app/controllers/admin/mien.php';
require_once 'app/controllers/admin/thanhpho.php';
require_once 'app/controllers/admin/list.php';

#Models admin
require_once 'app/models/admin_list_tour.php';






#Controllers client
require_once 'app/controllers/client/phpMailer_pay_success.php';
require_once 'app/controllers/client/controllers.php';
require_once 'app/controllers/client/page_home.php';
require_once 'app/controllers/client/introduction.php';
require_once 'app/controllers/client/tour_detail.php';
require_once 'app/controllers/client/list_tour.php';
require_once 'app/controllers/client/list_diem_den.php';
require_once 'app/controllers/client/contact.php';
require_once 'app/controllers/client/news.php';
require_once 'app/controllers/client/cart.php';
require_once 'app/controllers/client/error_404.php';
require_once 'app/controllers/client/congthanhtoan.php';



#Models 
require_once 'app/models/connect.php';
require_once 'app/models/thong_tin_cong_ty.php';
require_once 'app/models/khoa_tour_chi_tiet.php';
require_once 'app/models/thanh_pho.php';
require_once 'app/models/slider.php';
require_once 'app/models/news.php';
require_once 'app/models/mien.php';
require_once 'app/models/account_admin.php';
require_once 'app/models/dang_ky_nhan_uu_dai.php';
require_once 'app/models/cart.php';
require_once 'app/models/thanh_toan_tour.php';
require_once 'app/models/dong_gop_y_kien.php';
require_once 'app/models/vnpay.php';






//chuyển giá tiền có dấu , .
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'VND')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', ',') . "{$suffix}";
        }
    }
}

function date_handler($date_value)
{
    $date_resutl = date_create($date_value);
    return date_format($date_resutl, "d/m/Y");
}






$url = $_GET['ctr'] ?? '/';
switch ($url) {
    case '/':
    case 'home':
        showHome();
        break;
    case 'lienhe':
        showContact();
        break;
    case 'tintuc':
        showNews();
        break;
    case 'gioithieu':
        showIntroduction();
        break;
    case 'send_note':
        if (isset($_POST['btn-send'])) {
            addNote();
        } else {
            header("location: " . ROOT);
        }
        break;
    case 'tour/tourdetail':
        if (isset($_GET['matour'])) {
            showTourDetail($_GET['matour']);
        } else {
            header("location: " . ROOT);
        }
        break;
    case 'tintuc/tintucdetail':
        if (isset($_GET['id'])) {
            showTintucDetail($_GET['id']);
        } else {
            header("location: " . ROOT);
        }
        break;
    case 'cart/':
        if (isset($_GET['matour'])) {
            if (!isset($_GET['id-tour-lite'])) {
                showCart($_GET['matour']);
            } else {
                showCartSameCode($_GET['matour'], $_GET['id-tour-lite']);
            }
        } else {
            error_404();
        }
        break;
        //có thanh toán vnp
    case 'cart/pay-success':
        if (isset($_POST['btn-pay']) && $_POST['payment_method'] == '3') {

            goVNPay($_POST);
        } else
        if (isset($_POST['btn-pay'])) {
            showPaySuccess();
        } else {
            header("location: " . ROOT);
        }
        break;
    case 'vnpay_php/vnpay_return.php':
        showVNPaySuccess();
        break;

        //có thanh toán vnp

    case 'cart/cancel-success':
        if (isset($_POST['btn-cancel'])) {
            cancelTour($_GET['idthanhtoan'], $_GET['email']);
        } else {
            header("location: " . ROOT);
        }
        break;


    case 'tour/result-search':
        if (isset($_GET['btn_search_tour'])) {
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

    case 'diemden/':

        if (isset($_GET['mamien'])) {
            showDiemDen($_GET['mamien']);
        } else  if (isset($_GET['tourhot'])) {
            showDiemDenHot($_GET['tourhot']);
        } else {
            header("Location: " . ROOT);
        }
        break;




        //admin
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
    case 'admin_page':
        if (isset($_SESSION['login_success'])) {
            admin_page();
        } else {
            error_404();
        }
        break;
    case "admin_page/mien":
        showMien();
        break;


        //danh sách tour
    case "admin_list_tour":
        show_admin_list();
        break;
    case "admin_list_tour/":
        if ($_GET['ma-mien']) {
            show_admin_list_mien($_GET['ma-mien']);
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }
    case "admin_list_tour/mien/":
        if ($_GET['ma-thanh-pho']) {
            show_admin_list_tour($_GET['ma-thanh-pho']);
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }
    case "admin_list_tour/mien/thanh_pho/":
        if ($_GET['ma-tour']) {
            show_admin_list_tour_detail($_GET['ma-tour']);
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }
    case "admin_list_tour/add-tour":
        show_admin_add_tour();
        break;

        //end danh sách tour



    case "admin_page/thanhpho":
        if (isset($_GET['mamien'])) {
            showThanhphoThuoc($_GET['mamien']);
        } else if (isset($_GET['matour'])) {
            showThoiGianTour($_GET['matour']);
        }
        break;

    case "admin_page/list":
        showListWithMien();
        break;
    case "admin_page/listdetail":
        if (isset($_GET['mamien'])) {
            showlistdetail($_GET['mamien']);
        } else if (isset($_GET['matour'])) {
            showListThanhToan($_GET['matour']);
        }
        break;




        //fix
    case 'fix':
        fix();
        break;
    default:
        error_404();
}
