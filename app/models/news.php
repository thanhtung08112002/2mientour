<?php
function getNews()
{
    $conn = connection();
    $sql = "SELECT * FROM tin_tuc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getNewDetail($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `tin_tuc_chi_tiet` join tin_tuc on tin_tuc.id = tin_tuc_chi_tiet.id WHERE tin_tuc.id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}