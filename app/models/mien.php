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
function mien() {
    $getAllMien = getAllMien();
    var_dump($getAllMien);
}