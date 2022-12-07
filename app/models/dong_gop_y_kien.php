<?php
function addYKien($data){
    $conn = connection();
    $sql = "INSERT INTO `dong_gop_y_kien`( `ho_ten`, `sdt`, `email`, `noi_dung`,`thoi_gian_gop_y`) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function getAllDongGop(){
    $conn = connection();
    $sql = "SELECT * FROM `dong_gop_y_kien` ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}