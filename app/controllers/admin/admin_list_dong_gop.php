<?php
function showDongGopY(){
    $getAllDongGop = getAllDongGop();
     render_admin('show_dong_gop_y_kien', ['getAllDongGop' => $getAllDongGop]);
}

function deleteYKienCuaKhachHang(){
    $id = $_GET['id'];
    $deleteYKien = deleteYKien($id);
    header('Location:'.ROOT.'admin_list_idea');
}