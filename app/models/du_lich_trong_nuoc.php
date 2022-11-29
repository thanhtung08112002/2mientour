<?php
// lấy dữ liệu bảng trong nước
function getAlldulichtrongnuoc()
{
    $conn = connection();
    $sql = "SELECT * FROM du_lich_trong_nuoc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}