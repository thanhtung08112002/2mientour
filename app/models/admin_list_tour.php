<?php

function add_tour($data_du_lich_thanh_pho, $data_khoa_tour_chi_tiet, $data_khoa_tour_lite)
{
    $conn = connection();
    $sql_du_lich_thanh_pho = "INSERT INTO  du_lich_theo_thanh_pho (`ma_thanh_pho`,`ma_mien`,`ten_thanh_pho`) VALUES (?,?,?)";
    $sql_khoa_tour_chi_tiet = "INSERT INTO  khoa_tour_chi_tiet (`ma_tour`,`ma_thanh_pho`,`ten_tour`, `phuong_tien`, `ma_dia_diem_khoi_hanh`, `thoi_gian_di`, `anh_dai_dien_tour`, `gia_tien`, `ma_so_hot` ) VALUES (?,?, ?,?, ?, ? ,?, ?, ?)";
    $sql_khoa_tour_lite = "    INSERT INTO  khoa_tour_lite (`ma_tour`, `ngay_khoi_hanh`,`so_cho`) VALUES (?,?,?)";
    $stmt_du_lich_thanh_pho = $conn->prepare($sql_du_lich_thanh_pho);
    $stmt_khoa_tour_chi_tiet = $conn->prepare($sql_khoa_tour_chi_tiet);
    $stmt_khoa_tour_lite = $conn->prepare($sql_khoa_tour_lite);
    if ($stmt_du_lich_thanh_pho->execute($data_du_lich_thanh_pho)) {
        if ($stmt_khoa_tour_chi_tiet->execute($data_khoa_tour_chi_tiet)) {
            if ($stmt_khoa_tour_lite->execute($data_khoa_tour_lite)) {
                header("Location: " . ROOT . "quan_ly_tour");
            }
        }
    }
}

function delete_tour()
{
    $conn = connection();
    $sql_khoa_tour_lite = " DELETE FROM   khoa_tour_lite WHERE id_tour_lite = 22";
    $sql_khoa_tour_chi_tiet = " DELETE FROM   khoa_tour_chi_tiet WHERE ma_tour = 'T_HCM03'";
    $sql_du_lich_thanh_pho = " DELETE FROM   du_lich_theo_thanh_pho WHERE ma_thanh_pho = 'BRVT'";
    $stmt_khoa_tour_lite = $conn->prepare($sql_khoa_tour_lite);
    $stmt_khoa_tour_chi_tiet = $conn->prepare($sql_khoa_tour_chi_tiet);
    $stmt_du_lich_thanh_pho = $conn->prepare($sql_du_lich_thanh_pho);
    $stmt_khoa_tour_lite->execute();
    $stmt_khoa_tour_chi_tiet->execute();
    $stmt_du_lich_thanh_pho->execute();
}


function schedule_tour($ma_tour)
{
    $conn = connection();
    $sql = "SELECT * FROM `chi_tiet_tour_lite` WHERE ma_tour =  '$ma_tour'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
