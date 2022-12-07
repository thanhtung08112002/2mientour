<?php
function showDongGopY(){
    $getAllDongGop = getAllDongGop();
     render_admin('show_dong_gop_y_kien', ['getAllDongGop' => $getAllDongGop]);
}