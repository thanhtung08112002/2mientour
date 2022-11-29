<?php

function showTourDetail($ma_tour)
{
    // $get3KhoaTourMienNam = get3KhoaTourMienNam();
    $tourDetail = tourDetail($ma_tour);
    $informationTour = informationTour($ma_tour);

    foreach ($informationTour as $item) {
        $infor = $item;
    }
    extract($infor);
    $tourLienQuan = tourLienQuan($ma_dia_diem_khoi_hanh, $ma_tour);
    $getImgWithMaTour = getImgWithMaTour($ma_tour);
    $getKhoaTourWithMaTour = getKhoaTourWithMaTour($ma_tour);
    $khoiHanhKhac = khoiHanhKhac($ma_tour, $ngay_khoi_hanh);
    render('tourDetail', ['getKhoaTourWithMaTour' => $getKhoaTourWithMaTour, 'getImgWithMaTour' => $getImgWithMaTour, 'informationTour' => $informationTour, 'tourDetail' => $tourDetail, 'tourLienQuan' => $tourLienQuan, 'khoiHanhKhac' => $khoiHanhKhac]);
}

