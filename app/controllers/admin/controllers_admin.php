<?php

function render_admin($path, $data = [])
{
    extract($data);
    if ($path == 'login_admin') {
        include_once 'app/views/admin/login_admin.php';
    } else {
        $views_admin = "app/views/admin/login_success/$path/$path.php";
        include_once 'app/views/admin/login_success/layoutAdmin.php';
        // } else if ($path == 'admin_page') {
        //     $views_admin = "app/views/admin/login_success/pageAdmin/$path.php";
        //     include_once 'app/views/admin/login_success/layoutAdmin.php';
        // } else if ($path == 'add_nhan_vien') {
        //     $views_admin = "app/views/admin/login_success/pageAdmin/$path.php";
        //     include_once 'app/views/admin/login_success/layoutAdmin.php';
        // } else if ($path == 'edit_nhan_vien') {
        //     $views_admin = "app/views/admin/login_success/pageAdmin/$path.php";
        //     include_once 'app/views/admin/login_success/layoutAdmin.php';
        // } else {
        //     $views_admin = "app/views/admin/login_success/$path/$path.php";
        //     include_once 'app/views/admin/login_success/layoutAdmin.php';
    }
}
