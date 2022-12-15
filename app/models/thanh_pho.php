<?php
//lấy toàn bộ bảng thành phố
function getAllThanhPho() {
    $conn = connection();
    $sql = "SELECT * FROM `du_lich_theo_thanh_pho`";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getAllThanhPhoAndMien() {
    $conn = connection();
    $sql = "SELECT * FROM `du_lich_theo_thanh_pho` join `du_lich_trong_nuoc` on `du_lich_trong_nuoc`.ma_mien = `du_lich_theo_thanh_pho`.ma_mien";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function deleteThanhPhoWithMaThanhPho($ma_thanh_pho) {
    $conn = connection();
    $sql = "DELETE FROM `du_lich_theo_thanh_pho` WHERE `ma_thanh_pho` ='$ma_thanh_pho'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
}

function addThanhPhoOnDB($data) {
    $conn = connection();
    $sql = "INSERT INTO `du_lich_theo_thanh_pho` (`ma_thanh_pho`, `ma_mien`, `ten_thanh_pho`) VALUES (?, ?, ?)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute($data);
}