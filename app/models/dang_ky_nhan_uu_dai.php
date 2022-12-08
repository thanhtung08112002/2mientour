<?php
function getInforRegister()
{
    $conn = connection();
    $sql = "SELECT * FROM thong_tin_dang_ky_nhan_uu_dai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addRegister($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `thong_tin_dang_ky_nhan_uu_dai`(`email`) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

