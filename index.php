<?php
//session

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

#Controllers admin
require_once 'app/controllers/admin/controllers_admin.php';
require_once 'app/controllers/admin/admin.php';


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








$url = $_GET['ctr'] ?? '/';
switch ($url) {
    case '/':
    case 'home':
        showHome();
        break;
    case 'tourdetail':
        showTourDetail();
        break;
    case 'admin':
        goToAdmin();
        break;
    case 'check_login':
        if (isset($_POST['btn-login'])) {
            checkLogin();
        }else{
            error_404();
        }
        break;
    default:
        error_404();
}
