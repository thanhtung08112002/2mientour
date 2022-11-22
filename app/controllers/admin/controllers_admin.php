<?php

function render_admin($path, $data = [])
{
    extract($data);
    if ($path) {
        include_once 'app/views/admin/login_admin.php';
    }  
}
