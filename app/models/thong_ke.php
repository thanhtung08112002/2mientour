<?php
function thong_ke_theo_ma_mien()
{
    $conn = connection();
    $sql = "SELECT du_lich_theo_thanh_pho.ma_thanh_pho, du_lich_theo_thanh_pho.ten_thanh_pho AS 'tenthanhpho', COUNT(*) AS 'soluong', MAX(khoa_tour_chi_tiet.gia_tien) AS 'giacaonhat', MIN(khoa_tour_chi_tiet.gia_tien) AS 'giathapnhat', ROUND(AVG(khoa_tour_chi_tiet.gia_tien),0) AS 'giatrungbinh' FROM du_lich_theo_thanh_pho JOIN khoa_tour_chi_tiet ON du_lich_theo_thanh_pho.ma_thanh_pho = khoa_tour_chi_tiet.ma_thanh_pho GROUP BY du_lich_theo_thanh_pho.ma_thanh_pho, du_lich_theo_thanh_pho.ten_thanh_pho ORDER BY giacaonhat DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function thong_ke_theo_thanh_toan_tour()
{
    $conn = connection();
    $sql = "SELECT * FROM thanh_toan_tour JOIN khoa_tour_chi_tiet ON thanh_toan_tour.ma_tour = khoa_tour_chi_tiet.ma_tour JOIN du_lich_theo_thanh_pho ON du_lich_theo_thanh_pho.ma_thanh_pho = khoa_tour_chi_tiet.ma_thanh_pho WHERE thanh_toan_tour.ma_tour = khoa_tour_chi_tiet.ma_tour";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function thong_ke_theo_mien()
{
    $conn = connection();
    $sql = "SELECT du_lich_trong_nuoc.ma_mien, du_lich_trong_nuoc.ten_mien AS 'ten_mien', COUNT(*) AS 'soluong', du_lich_theo_thanh_pho.ten_thanh_pho FROM du_lich_trong_nuoc JOIN du_lich_theo_thanh_pho ON du_lich_trong_nuoc.ma_mien = du_lich_theo_thanh_pho.ma_mien JOIN khoa_tour_chi_tiet ON du_lich_theo_thanh_pho.ma_thanh_pho = khoa_tour_chi_tiet.ma_thanh_pho GROUP BY du_lich_trong_nuoc.ma_mien, du_lich_trong_nuoc.ten_mien";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function danh_sach_thong_ke_tour_chi_tiet()
{
    $conn = connection();
    $sql = "SELECT khoa_tour_chi_tiet.ma_tour, du_lich_theo_thanh_pho.ma_thanh_pho, ten_tour, thanh_toan_tour.ho_ten, du_lich_trong_nuoc.ten_mien FROM khoa_tour_chi_tiet JOIN thanh_toan_tour ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour JOIN du_lich_theo_thanh_pho ON du_lich_theo_thanh_pho.ma_thanh_pho = khoa_tour_chi_tiet.ma_thanh_pho JOIN du_lich_trong_nuoc ON du_lich_trong_nuoc.ma_mien = du_lich_theo_thanh_pho.ma_mien WHERE khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour;
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function danh_sach_tour_with_id($id)
{
    $conn = connection();
    $sql = "SELECT du_lich_theo_thanh_pho.ma_thanh_pho,ten_thanh_pho, du_lich_trong_nuoc.ma_mien, khoa_tour_chi_tiet.ten_tour, thanh_toan_tour.ho_ten FROM du_lich_theo_thanh_pho JOIN du_lich_trong_nuoc ON du_lich_theo_thanh_pho.ma_mien = du_lich_trong_nuoc.ma_mien JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_thanh_pho = du_lich_theo_thanh_pho.ma_thanh_pho JOIN khoa_tour_lite ON khoa_tour_chi_tiet.ma_tour = khoa_tour_lite.ma_tour JOIN thanh_toan_tour ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite WHERE du_lich_trong_nuoc.ma_mien LIKE 'MB';
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
