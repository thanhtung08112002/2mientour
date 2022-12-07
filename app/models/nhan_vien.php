<?php
// lấy dữ liệu bảng nhân viên
function getAllNhanVien()
{
    $conn = connection();
    $sql = "SELECT * FROM ban_quan_ly_theo_mien bqltm JOIN chuc_vu cv on bqltm.ma_chuc_vu = cv.ma_chuc_vu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}