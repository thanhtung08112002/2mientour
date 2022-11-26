<?php
function admin_page() {
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    render_admin('pageAdmin',['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu]);
}