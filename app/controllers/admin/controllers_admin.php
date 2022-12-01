<?php

function render_admin($path, $data = [])
{
    extract($data);
    if ($path == 'login_admin') {
        include_once 'app/views/admin/login_admin.php';
    }else{
        $views_admin = "app/views/admin/login_success/$path/$path.php";
        include_once 'app/views/admin/login_success/layoutAdmin.php';
    }
    
}
