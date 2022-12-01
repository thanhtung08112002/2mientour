<?php
function getAllThongTinCongTy() {
    $conn = connection();
    $sql = "SELECT * FROM `thong_tin_cong_ty`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}