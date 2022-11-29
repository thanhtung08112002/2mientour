<?php 
//get all thanh toan tour
function getThanhToanTour($id_thanh_toan) {
    $conn = connection();
    $sql = "SELECT * FROM `thanh_toan_tour` WHERE `id_thanh_toan` = $id_thanh_toan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//thanh toan tour
function payTour($data) {
    $conn = connection();
    $sql = "INSERT INTO `thanh_toan_tour` (`ma_tour`, `id_tour_lite`, `ho_ten`, `sdt`, `email`, `dia_chi`, `phuong_thuc_thanh_toan`, `so_luong`, `thanh_tien`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//get thanh toan tour gan nhat

function getThanhToanTourGanNhat() {
    $conn = connection();
    $sql = "SELECT ten_tour, ngay_khoi_hanh, so_luong, thanh_tien, ho_ten, sdt, email, dia_chi, ten_phuong_thuc FROM `thanh_toan_tour` JOIN phuong_thuc_thanh_toan ON thanh_toan_tour.phuong_thuc_thanh_toan = phuong_thuc_thanh_toan.phuong_thuc_thanh_toan JOIN khoa_tour_lite ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour ORDER by id_thanh_toan DESC limit 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
