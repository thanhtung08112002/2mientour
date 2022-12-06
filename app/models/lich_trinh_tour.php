<?php

function schedule_tour($ma_tour)
{
    $conn = connection();
    $sql = "SELECT * FROM `chi_tiet_tour_lite` WHERE ma_tour =  '$ma_tour'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function add_tour_lich_trinh($ma_tour, $ngay, $noi_dung)
{
    $conn = connection();
    $sql = "INSERT INTO `chi_tiet_tour_lite` ( `ma_tour`, `ngay`, `noi_dung_ngay`) VALUES ( '$ma_tour', '$ngay', '$noi_dung')";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        header("location:" . ROOT . "quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
    }
}

function delete_tour_lich_trinh($ma_tour, $id)
{
    $conn = connection();
    $sql = "DELETE FROM `chi_tiet_tour_lite` WHERE `id`=$id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        header("location:" . ROOT . "quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
    }
}


function getChiTietTourLiteId($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `chi_tiet_tour_lite` WHERE id =  '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function save_edit_lich_trinh($data, $ma_tour)
{
    $conn = connection();
    $sql = "UPDATE `chi_tiet_tour_lite` SET `ngay`= ?,`noi_dung_ngay`=? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:" . ROOT . "quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
    }
}
