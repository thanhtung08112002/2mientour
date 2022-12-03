<?php
//lấy toàn bộ bảng thành phố
function getAllMien() {
    $conn = connection();
    $sql = "SELECT * FROM `du_lich_trong_nuoc`";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//lấy toàn bộ bảng thành phố với miền
function getAllMienWithCity() {
    $conn = connection();
    $sql = "SELECT * from du_lich_trong_nuoc dltn join du_lich_theo_thanh_pho dlttp on dltn.ma_mien = dlttp.ma_mien JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_thanh_pho = dlttp.ma_thanh_pho ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//lấy toàn bộ bảng thành phố với miền
function getInforWithMaMien($value_list) {
    $conn = connection();
    $sql = "SELECT * from du_lich_trong_nuoc WHERE ma_mien = '$value_list' ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//lấy toàn danh sách tour của  miền
function filterTourWithMaMien($value_list) {
    $conn = connection();
    $sql = "SELECT * FROM `du_lich_trong_nuoc` JOIN du_lich_theo_thanh_pho on du_lich_theo_thanh_pho.ma_mien = du_lich_trong_nuoc.ma_mien JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_thanh_pho = du_lich_theo_thanh_pho.ma_thanh_pho WHERE du_lich_trong_nuoc.ma_mien = '$value_list'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


//lấy thông tin với mã miền
function getInforCityWithMaMien($mamien) {
    $conn = connection();
    $sql = "SELECT * from du_lich_theo_thanh_pho WHERE ma_mien = '$mamien'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


//lọc tour với mã thành phố
function filterTourWithMaThanhPho($mathanhpho) {
    $conn = connection();
    $sql = "SELECT * FROM du_lich_theo_thanh_pho JOIN khoa_tour_chi_tiet ON du_lich_theo_thanh_pho.ma_thanh_pho = khoa_tour_chi_tiet.ma_thanh_pho JOIN dia_diem_khoi_hanh ON khoa_tour_chi_tiet.ma_dia_diem_khoi_hanh = dia_diem_khoi_hanh.ma_dia_diem_khoi_hanh JOIN danh_sach_tour_hot ON danh_sach_tour_hot.ma_so_hot = khoa_tour_chi_tiet.ma_so_hot WHERE du_lich_theo_thanh_pho.ma_thanh_pho = '$mathanhpho'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


//với admin
function filterTourDetail($ma_tour) {
    $conn = connection();
    $sql = "SELECT * FROM `khoa_tour_lite` JOIN khoa_tour_chi_tiet on khoa_tour_chi_tiet.ma_tour=khoa_tour_lite.ma_tour WHERE khoa_tour_lite.ma_tour = '$ma_tour'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function filterTourOfMien($ma_mien) {
    $conn = connection();
    $sql = "SELECT * FROM `khoa_tour_chi_tiet`JOIN du_lich_theo_thanh_pho on khoa_tour_chi_tiet.ma_thanh_pho = du_lich_theo_thanh_pho.ma_thanh_pho JOIN du_lich_trong_nuoc ON du_lich_theo_thanh_pho.ma_mien = du_lich_trong_nuoc.ma_mien WHERE du_lich_trong_nuoc.ma_mien = '$ma_mien'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function thanhToanTourFull($ma_tour) {
    $conn = connection();
    $sql = "SELECT * FROM `thanh_toan_tour` JOIN khoa_tour_lite ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite JOIN phuong_thuc_thanh_toan on phuong_thuc_thanh_toan.phuong_thuc_thanh_toan = thanh_toan_tour.phuong_thuc_thanh_toan WHERE thanh_toan_tour.`ma_tour` = '$ma_tour'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}