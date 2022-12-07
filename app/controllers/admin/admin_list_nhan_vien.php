<?php
function showAllNhanVien(){
    $getAllNhanVien = getAllNhanVien();
    render_admin('show_list_nhan_vien', ['getAllNhanVien' => $getAllNhanVien]);
}