<?php
function goToAdmin(){
    render_admin('login_admin');
}
function checkLogin() {
    extract($_POST);
    check_account($_POST);

}

function data_check($result_data_check) {
    if ($result_data_check) {
        $_SESSION['login_success'] = 'login_success';
        if (isset($_SESSION['error_login'])) {
           unset($_SESSION['error_login']);
        }
        header('Location: admin_page');
    }else{
        setcookie('error_login','Sai tài khoản hoặc mật khẩu', time() +1) ;
        header('Location: admin');
    }
}


