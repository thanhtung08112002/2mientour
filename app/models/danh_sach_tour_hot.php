<?php
//lấy toàn bộ bảng danh sách tour hot
function getalldanhsachtourhot()
{
    $conn = connection();
    $sql = "SELECT * FROM `danh_sach_tour_hot`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
