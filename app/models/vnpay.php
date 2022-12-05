<?php
function addVNPay($data = []) {
    $conn = connection();
    $sql = "INSERT INTO `vnpay`(`ma_gd`, `so_hoa_don`,`so_tien`, `ngan_hang`, `noi_dung_thanh_toan`, `trang_thai`, `tra_gop`, `ngay_tao`) VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute($data);
}


function tong_tien_thanh_toan_vnpay() {
    $conn = connection();
    $sql = "SELECT SUM(so_tien) as tong_tien_thanh_toan_online FROM `vnpay` ";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}