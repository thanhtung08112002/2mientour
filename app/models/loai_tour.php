<?php
//lấy toàn bộ bảng thành phố
function getLoaiTour() {
    $conn = connection();
    $sql = "SELECT * FROM `danh_sach_tour_hot`";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
