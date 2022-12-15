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
    $sql = "INSERT INTO `thanh_toan_tour` (`ma_tour`, `id_tour_lite`, `ho_ten`, `sdt`, `email`, `dia_chi`, `phuong_thuc_thanh_toan`, `nguoi_lon`,`tre_em`, `thanh_tien`,`thoi_gian_thanh_toan`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//get thanh toan tour gan nhat

function getThanhToanTourGanNhat() {
    $conn = connection();
    $sql = "SELECT id_thanh_toan,ten_tour, ngay_khoi_hanh, nguoi_lon,tre_em, thanh_tien, ho_ten, sdt, email, dia_chi, ten_phuong_thuc, thoi_gian_thanh_toan FROM `thanh_toan_tour` JOIN phuong_thuc_thanh_toan ON thanh_toan_tour.phuong_thuc_thanh_toan = phuong_thuc_thanh_toan.phuong_thuc_thanh_toan JOIN khoa_tour_lite ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour ORDER by id_thanh_toan DESC limit 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//get all thanh toan tour 

function getAllThanhToanTour() {
    $conn = connection();
    $sql = "SELECT id_thanh_toan,khoa_tour_chi_tiet.ma_tour,ten_tour, ngay_khoi_hanh, nguoi_lon,tre_em, thanh_tien, ho_ten, sdt, email, dia_chi, ten_phuong_thuc, thoi_gian_thanh_toan FROM `thanh_toan_tour` JOIN phuong_thuc_thanh_toan ON thanh_toan_tour.phuong_thuc_thanh_toan = phuong_thuc_thanh_toan.phuong_thuc_thanh_toan JOIN khoa_tour_lite ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour ORDER BY id_thanh_toan DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//cancel tour

function cancelTourThanhToan( $id_thanh_toan) {
    $conn = connection();
    $sql = "DELETE FROM `thanh_toan_tour` WHERE `id_thanh_toan` = $id_thanh_toan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}


function tong_tien_thanh_toan_khac_vnpay() {
    $conn = connection();
    $sql = "SELECT SUM(thanh_tien) as tong_tien_thanh_toan_binh_thuong FROM `thanh_toan_tour`  ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function thong_ke_so_luong_tour_thanh_toan() {
    $conn = connection();
    $sql = "SELECT COUNT(*) as so_luong,  ten_tour FROM `thanh_toan_tour` JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour GROUP BY khoa_tour_chi_tiet.ma_tour ORDER BY so_luong DESC";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function thong_ke_gia_tien_tour() {
    $conn = connection();
    $sql = "SELECT ten_tour,gia_tien FROM `khoa_tour_chi_tiet` ORDER BY gia_tien ASC";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


//vnpay
function getAllVNPay() {
    $conn = connection();
    $sql = "SELECT * FROM `vnpay`";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function deleteVNPayWithMaGD($magd) {
    $conn = connection();
    $sql = "DELETE FROM `vnpay` WHERE `ma_gd` = '$magd'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
}