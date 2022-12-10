<?php
function getInforRegister()
{
    $conn = connection();
    $sql = "SELECT * FROM thong_tin_dang_ky_nhan_uu_dai ORDER BY id DESC ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addRegister($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `thong_tin_dang_ky_nhan_uu_dai`(`email`,`thoi_gian_dang_ky`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function deleteRegister($id) {
    $conn = connection();
    $sql = "DELETE FROM `thong_tin_dang_ky_nhan_uu_dai` WHERE id =  '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}