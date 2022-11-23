<?php
//lấy toàn bộ bảng tour chi tiết liên kết với bảng địa điểm khởi hành và khóa tour lite
function getAllKhoaTourMienNam() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Nam';";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getAllKhoaTourMienBac() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Bắc';";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getAllKhoaTourHot() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ktct.ma_so_hot = 1; ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//lấy 3 tour bảng tour chi tiết liên kết với bảng địa điểm khởi hành và khóa tour lite
function get3KhoaTourMienNam() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Nam' LIMIT 3;";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get3KhoaTourMienBac() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Bắc' LIMIT 3;";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function get3KhoaTourHot() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ktct.ma_so_hot = 1 LIMIT 3; ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}