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
require_once 'app/controllers/admin/list.php';
require_once 'app/controllers/admin/admin_quan_ly_tour.php';
require_once 'app/controllers/admin/admin_list_receipt_customer.php';
require_once 'app/controllers/admin/admin_list_nhan_vien.php';
require_once 'app/controllers/admin/admin_list_dong_gop.php';
require_once 'app/controllers/admin/admin_list_promotion.php';
require_once 'app/controllers/admin/admin_list_news.php';
require_once 'app/controllers/admin/admin_list_register_promotion.php';
require_once 'app/controllers/admin/admin_list_slider.php';
require_once 'app/controllers/admin/admin_add_new.php';










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
require_once 'app/models/loai_tour.php';
require_once 'app/models/dia_diem_khoi_hanh.php';
require_once 'app/models/anh_tour.php';
require_once 'app/models/lich_trinh_tour.php';
require_once 'app/models/khoi_hanh.php';
require_once 'app/models/nhan_vien.php';
require_once 'app/models/ma_uu_dai.php';
require_once 'app/models/chuc_vu.php';















//chuy???n gi?? ti???n c?? d???u , .
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
        //c?? thanh to??n vnp
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

        //c?? thanh to??n vnp

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
        if (isset($_SESSION['login_success'])) {
            showMien();
        } else {
            error_404();
        }
        break;

        //qu???n l?? tour du l???ch
    case "quan_ly_tour":
        if (isset($_SESSION['login_success'])) {
            showAllTour();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/add-tour":
        if (isset($_SESSION['login_success'])) {
            showAddTour();
        } else {
            error_404();
        }
        break;

    case "quan_ly_tour/add-tour/check":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_insert'])) {
            add_tour();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/delete-tour/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['ma-thanh-pho'])) {
            delete_tour();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/add-chi-tiet-tour/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour'])) {
            switch ($_GET['thu-muc']) {
                case 'khoihanh':
                    show_add_detail($_GET['thu-muc']);
                    break;
                case 'lichtrinh':
                    show_add_detail($_GET['thu-muc']);
                    break;
                case 'anh':
                    show_add_detail($_GET['thu-muc']);
                    break;
            }
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/add-khoi-hanh":
        if (isset($_SESSION['login_success']) && isset($_POST['ma_tour'])) {
            add_khoi_hanh();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/add-lich-trinh":
        if (isset($_SESSION['login_success']) && isset($_POST['ma_tour'])) {
            add_lich_trinh();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/add-anh":
        if (isset($_SESSION['login_success']) && isset($_POST['ma_tour'])) {
            add_anh();
        } else {
            error_404();
        }
        break;

        //delele
    case "quan_ly_tour/delete-khoi-hanh/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['id'])) {
            delete_khoi_hanh();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/delete-lich-trinh/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['id'])) {
            delete_lich_trinh();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/delete-anh/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['id'])) {
            delete_anh();
        } else {
            error_404();
        }
        //delete
        //edit
    case "quan_ly_tour/edit-khoi-hanh/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['id'])) {
            editDetail();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/edit-lich-trinh/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['id'])) {
            editDetail();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/edit-anh/":
        if (isset($_SESSION['login_success']) && isset($_GET['ma-tour']) && isset($_GET['id'])) {
            editDetail();
        } else {
            error_404();
        }
    case "quan_ly_tour/save-edit-khoi-hanh":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_detail'])) {
            edit_khoi_hanh();
        } else {
            error_404();
        }
        break;
    case "quan_ly_tour/save-edit-lich-trinh":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_detail'])) {
            edit_lich_trinh();
        } else {
            error_404();
        }
        break;
        // ??ang l??m
    case "quan_ly_tour/save-edit-anh":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_detail'])) {
            edit_anh();
        } else {
            error_404();
        }
        break;
        // ??ang l??m

        //edit
    case "quan_ly_tour/detail-tour/":
        if ($_GET['ma-tour']) {
            show_admin_list_tour_detail($_GET['ma-tour']);
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "quan_ly_tour/edit-tour/":
        if ($_GET['ma-tour']) {
            edit_khoa_tour_chi_tiet();
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "quan_ly_tour/edit-tour/check/":
        if ($_GET['ma-tour']) {
            check_and_save_khoa_tour_chi_tiet();
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        //qu???n l?? tour du l???ch




        //danh s??ch tour
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
            show_admin_list_detail_tour_lite($_GET['ma-tour']);
            break;
        } else {
            header("location:" . ROOT . 'admin_page');
        }

    case "admin_list_tour/add-tour":
        show_admin_add_tour();
        break;

        //end danh s??ch tour

        //h??a ????n kh??ch h??ng
    case "admin_list_receipt_customer":
        if (isset($_SESSION['login_success'])) {
            showAllReceiptCustomer();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_receipt_customer/delete/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            deleteReceiptCustomer();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        //end h??a ????n kh??ch h??ng

        //nh??n vi??n
    case "admin_list_employee":
        if (isset($_SESSION['login_success'])) {
            showAllNhanVien();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_employee/add":
        if (isset($_SESSION['login_success'])) {
            formAddNhanVien();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_employee/add/check":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_insert_employee'])) {
            addNhanVien();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_employee/delete/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            deleteNhanVien();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_employee/edit/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            formEditNhanVien();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_employee/edit/check":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_employee'])) {
            editNhanVien();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        //end nh??n vi??n

        //????ng g??p ?? ki???n
    case "admin_list_idea":
        if (isset($_SESSION['login_success'])) {
            showDongGopY();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_idea/delete/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            deleteYKienCuaKhachHang();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        //end ????ng g??p ?? ki???n

        //??u ????i
    case "admin_list_promotion":
        if (isset($_SESSION['login_success'])) {
            showAllPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // add ??u ????i
    case "admin_list_promotion/add_promotion":
        if (isset($_SESSION['login_success'])) {
            showAddPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_promotion/add_promotion/check_promotion":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_insert_promotion'])) {
            addPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end add ??u ????i
        // edit ??u ????i
    case "admin_list_promotion/edit_promotion/":
        if (isset($_SESSION['login_success']) && isset($_GET['id_giam_gia'])) {
            showEditPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_promotion/edit_promotion/check_promotion":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_promotion'])) {
            editPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end edit ??u ????i
        // delete ??u ????i
    case "admin_list_promotion/delete_promotion/":
        if (isset($_SESSION['login_success']) && isset($_GET['id_giam_gia'])) {
            deletePromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end delete ??u ????i
        //end ??u ????i

        //tin t???c
    case "admin_list_news":
        if (isset($_SESSION['login_success'])) {
            showAllNews();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/detail/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            showAllNewsDetail();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/add_new":
        if (isset($_SESSION['login_success'])) {
            showAddNew();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/add_new/check":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_insert_new'])) {
            checkAddNew();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/add-news-detail/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            showAddNewDetail();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/add-news-detail/check":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_insert_news_detail'])) {
            checkAddNewDetail();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // edit tin t???c chi ti???t
    case "admin_list_news/edit_news_detail/":
        if (isset($_SESSION['login_success']) && isset($_GET['id_content'])) {
            showEditNewsDetail();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/edit_news_detail/check_news_detail/":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_news_detail']) && isset($_GET['id'])) {
            editNewsDetail();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end edit tin t???c chi ti???t
        // delete tin t???c chi ti???t
    case "admin_list_news/delete_news_detail/":
        if (isset($_SESSION['login_success']) && isset($_GET['id_content']) && isset($_GET['id'])) {
            deleteNewsDetail();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end delete tin t???c chi ti???t
        // edit tin t???c
    case "admin_list_news/edit_news/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            showEditNews();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_news/edit_news/check_news":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_news'])) {
            editMew();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end edit tin t???c
        // delete tin t???c
    case "admin_list_news/delete_news/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            deleteNew();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end delete tin t???c   
        //end tin t???c

        //????ng k?? nh???n ??u ????i
    case "admin_list_register_promotion":
        if (isset($_SESSION['login_success'])) {
            showAllRegisterPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_register_promotion/delete/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            deleteRegisterPromotion();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        //end ????ng k?? nh???n ??u ????i

        //Slider
    case "admin_list_slider":
        if (isset($_SESSION['login_success'])) {
            showAllSlider();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // add
    case "admin_list_slider/add_slider":
        if (isset($_SESSION['login_success'])) {
            formAddSlider();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_slider/add_slider/check_slider":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_insert_slider'])) {
            add_slider();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end add
        // delete
    case "admin_list_slider/delete_slider/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            deleteSlider();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end delete
        // edit slider
    case "admin_list_slider/edit_slider/":
        if (isset($_SESSION['login_success']) && isset($_GET['id'])) {
            formEditSlider();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
    case "admin_list_slider/edit_slider/check_slider":
        if (isset($_SESSION['login_success']) && isset($_POST['btn_edit_slider'])) {
            editSlider();
        } else {
            header("location:" . ROOT . 'admin_page');
        }
        break;
        // end edit slider
        //end Slider

    case "admin_page/list":
        showListWithMien();
        break;
    case "admin_page/sign_out/":
        if (isset($_GET['sign-out'])) {
            sign_out();
        }

        break;
    default:
        error_404();
}
