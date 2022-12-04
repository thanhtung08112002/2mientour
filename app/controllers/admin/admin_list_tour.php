<?php
function show_admin_list() {
    $getAllMien = getAllMien();
    render_admin('list_tour', ['getAllMien' => $getAllMien]);
}
function show_admin_list_mien($ma_mien) {
    $getInforCityWithMaMien = getInforCityWithMaMien($ma_mien);
    render_admin('list_tour_mien', ['getInforCityWithMaMien' => $getInforCityWithMaMien]);
}
function show_admin_list_tour($ma_mien) {
    $filterTourWithMaThanhPho = filterTourWithMaThanhPho($ma_mien);
    render_admin('list_tour_thanh_pho', ['filterTourWithMaThanhPho' => $filterTourWithMaThanhPho]);
}

function show_admin_add_tour() {
    // $admin_add_tour = admin_add_tour();
    // $add_tour = add_tour();
    $delete_tour = delete_tour();
    render_admin('add_tour');
}
