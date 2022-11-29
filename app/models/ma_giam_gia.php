<?php
//lấy toàn bộ bảng mã giảm giá
function getAllmagiamgia()
{
    $conn = connection();
    $sql = "SELECT * FROM `ma_giam_gia`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
