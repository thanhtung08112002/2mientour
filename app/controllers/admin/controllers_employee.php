<?php

function render_admin($path,$data = []) {
    extract($data);
    $view = "app/views/admin/$path.php";
    include_once "app/views/client/admin/layout/layout_admin.php";
}