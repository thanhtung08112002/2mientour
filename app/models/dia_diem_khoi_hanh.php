<?php
//lấy toàn bộ bảng thành phố
function getDiaiemKhoiHanh() {
    $conn = connection();
    $sql = "SELECT * FROM `dia_diem_khoi_hanh`";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}