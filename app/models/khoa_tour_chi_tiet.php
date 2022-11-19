<?php
//lấy toàn bộ bảng tour chi tiết liên kết với bảng địa điểm khởi hành và khóa tour lite
function getAllKhoaTour() {
    $conn = connection();
    $sql = "SELECT ma_tour, ten_tour, ten_dia_diem_khoi_hanh, anh_dai_dien_tour, gia_tien FROM du_lich_trong_nuoc dltn JOIN du_lich_theo_thanh_pho dltp ON dltn.ma_mien = dltp.ma_mien JOIN khoa_tour_chi_tiet ktct ON ktct.ma_thanh_pho = dltp.ma_thanh_pho JOIN dia_diem_khoi_hanh ddkh ON ddkh.ma_dia_diem_khoi_hanh = ktct.ma_dia_diem_khoi_hanh WHERE ten_mien = 'Miền Nam';";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}