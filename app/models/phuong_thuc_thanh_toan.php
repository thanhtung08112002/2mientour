<?php
//lấy toàn bộ bảng phương thức thanh toán
function getAllphuongthucthanhtoan()
{
    $conn = connection();
    $sql = "SELECT * FROM `phuong_thuc_thanh_toan`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
