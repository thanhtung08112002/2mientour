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