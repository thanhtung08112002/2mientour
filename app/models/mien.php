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
