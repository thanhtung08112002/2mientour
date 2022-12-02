<?php
function addYKien($data){
    $conn = connection();
    $sql = "INSERT INTO `dong_gop_y_kien`( `ho_ten`, `sdt`, `email`, `noi_dung`) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}