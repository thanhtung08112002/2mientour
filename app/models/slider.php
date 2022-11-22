<?php
//lấy toàn bộ bảng thành phố
function getAllSlider() {
    $conn = connection();
    $sql = "SELECT * FROM `slider`";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}