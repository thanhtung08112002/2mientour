<?php
//lấy toàn bộ bảng tour chi tiết liên kết với bảng địa điểm khởi hành và khóa tour lite
function getAllKhoaTour()
{
    $conn = connection();
    $sql = "SELECT dltn.ma_mien,ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh ;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//lấy 3 tour bảng tour chi tiết liên kết với bảng địa điểm khởi hành và khóa tour lite
function get3KhoaTourMienNam()
{
    $conn = connection();
    $sql = "SELECT dltn.ma_mien, ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Nam' LIMIT 3;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get3KhoaTourMienBac()
{
    $conn = connection();
    $sql = "SELECT dltn.ma_mien, ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Bắc' LIMIT 3;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get3KhoaTourHot()
{
    $conn = connection();
    $sql = "SELECT dltn.ma_mien, ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ma_so_hot = 1 LIMIT 3;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//lấy khóa tour theo ma tour

function getKhoaTourWithMaTour($ma_tour)
{
    $conn = connection();
    $sql = "SELECT ktct.ma_tour, ma_thanh_pho, ten_tour, phuong_tien, ten_dia_diem_khoi_hanh,ngay_khoi_hanh, thoi_gian_di,anh,ngay,noi_dung_ngay_tour_chi_tiet, so_cho, gia_tien FROM `khoa_tour_chi_tiet` ktct JOIN dia_diem_khoi_hanh ddkh on ktct.ma_dia_diem_khoi_hanh = ddkh.ma_dia_diem_khoi_hanh JOIN khoa_tour_lite ktl ON ktct.ma_tour = ktl.ma_tour WHERE ktct.ma_tour = '$ma_tour'; ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//tìm kiếm tour theo tên thành phố và dữ liệu nhập vào
function search_tour($data) {
    extract($data);
    $conn = connection();
    $sql = "SELECT dltn.ma_mien,ma_tour, ten_tour,ktct.ma_thanh_pho, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ktct.ma_thanh_pho like '%$valueCity%' And ten_tour like '%$valueSearch%';";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
