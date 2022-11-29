<?php 
//thông tin tour mặc định khi đặt từ trang page
function informationTourDefautFromPage($ma_tour) {
    $conn = connection();
    $sql = "SELECT ktct.ma_tour, ma_thanh_pho, ten_tour,id_tour_lite, phuong_tien, anh_dai_dien_tour,ddkh.ten_dia_diem_khoi_hanh,ktct.ma_dia_diem_khoi_hanh, thoi_gian_di, gia_tien, so_cho, ngay_khoi_hanh   FROM `khoa_tour_chi_tiet` ktct JOIN dia_diem_khoi_hanh ddkh on ktct.ma_dia_diem_khoi_hanh = ddkh.ma_dia_diem_khoi_hanh JOIN khoa_tour_lite ktl ON ktct.ma_tour = ktl.ma_tour   WHERE ktct.ma_tour = '$ma_tour' ORDER BY ngay_khoi_hanh ASC limit 1;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}