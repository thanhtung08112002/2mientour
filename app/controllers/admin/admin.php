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
        render_admin('pageAdmin');
    }else{
        $_SESSION['error_login'] = 'Sai tài khoản hoặc mật khẩu';
        header('Location: admin');
    }
}


