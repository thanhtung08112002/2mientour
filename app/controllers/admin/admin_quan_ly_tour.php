<?php
function showAllTour()
{
    $getAllTour = getAllTour();
    render_admin('quan_ly_tour', ['getAllTour' => $getAllTour]);
}
function showAddTour()
{
    $getAllMien = getAllMien();
    $getLoaiTour = getLoaiTour();
    $getDiaiemKhoiHanh = getDiaiemKhoiHanh();
    render_admin('form_add_tour', ['getLoaiTour' => $getLoaiTour, 'getAllMien' => $getAllMien, 'getDiaiemKhoiHanh' => $getDiaiemKhoiHanh]);
}
function check()
{
    echo "<pre>";
    var_dump($_POST);
    var_dump($_FILES);
    extract($_POST);
    $name_img = $_FILES['anh_dai_dien_tour']['name'];
    $data_du_lich_thanh_pho =[
        $ma_thanh_pho,
        $mien,
        $ten_thanh_pho
    ];
    $data_khoa_tour_chi_tiet =[
        $ma_tour,
        $ma_thanh_pho,
        $ten_tour,
        $phuong_tien,
        $dia_diem_khoi_hanh,
        $thoi_gian_di,
        $name_img,
        $gia_tien,
        $loai_tour
    ];
    $data_khoa_tour_lite = [
        $ma_tour,
        $ngay_khoi_hanh,
        $so_cho
    ];
    add_tour($data_du_lich_thanh_pho,$data_khoa_tour_chi_tiet,$data_khoa_tour_lite);
}

function show_admin_list_tour_detail($ma_tour) {
    $filterTourDetail = filterTourDetail($ma_tour);
    $schedule_tour = schedule_tour($ma_tour);
    render_admin('detail-tour', ['filterTourDetail' => $filterTourDetail,'schedule_tour' => $schedule_tour]);
}