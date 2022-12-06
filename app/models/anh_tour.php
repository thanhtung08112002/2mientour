<?php
function imgTourDetail($ma_tour)
{
    $conn = connection();
    $sql = "SELECT * FROM `anh_tour` WHERE ma_tour =  '$ma_tour'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function selectImgTourDetail($id)
{
    $conn = connection();
    $sql = "SELECT * FROM anh_tour WHERE id= '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function add_anh_tour($ma_tour, $anh)
{
    $conn = connection();
    $sql = "INSERT INTO `anh_tour` ( `ma_tour`, `anh`) VALUES ( '$ma_tour', '$anh')";
    $stmt = $conn->prepare($sql);
   if ($stmt->execute()) {
    header("location:".ROOT."quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
   } 
}
function delete_anh_tour($ma_tour,$id)
{
    $conn = connection();
    $sql = "DELETE FROM `anh_tour` WHERE `id`=$id";
    $stmt = $conn->prepare($sql);
   if ($stmt->execute()) {
    header("location:".ROOT."quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
   } 
}

function getAnhId($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `anh_tour` WHERE id =  '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function save_edit_anh($data, $ma_tour)
{
    $conn = connection();
    $sql = "UPDATE `anh_tour` SET `anh`=? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:" . ROOT . "quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
    }
}
