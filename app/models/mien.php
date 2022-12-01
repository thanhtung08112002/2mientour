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
    $sql = "SELECT * from du_lich_trong_nuoc dltn join du_lich_theo_thanh_pho dlttp on dltn.ma_mien = dlttp.ma_mien ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//lấy thông tin với mã miền
function getInforWithMaMien($mamien) {
    $conn = connection();
    $sql = "SELECT * from du_lich_trong_nuoc WHERE ma_mien = '$mamien'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


//lọc tour với mã miền
function filterTourWithMaMien($mamien) {
    $conn = connection();
    $sql = "SELECT * FROM du_lich_theo_thanh_pho JOIN khoa_tour_chi_tiet ON du_lich_theo_thanh_pho.ma_thanh_pho = khoa_tour_chi_tiet.ma_thanh_pho WHERE ma_mien = '$mamien'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
