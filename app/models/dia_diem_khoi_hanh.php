<?php
//lấy toàn bộ bảng danh sách tour hot
function getalldiadiemkhoihanh()
{
    $conn = connection();
    $sql = "SELECT * FROM `dia_diem_khoi_hanh`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// delete ảnh
function dia_diem_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM dia_diem_khoi_hanh WHERE ma_dia_diem_khoi_hanh = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// function insert địa điểm
function dia_diem_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `dia_diem_khoi_hanh` (`ma_dia_diem_khoi_hanh`,`ten_dia_diem_khoi_hanh`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:list_dia_diem");
    }
}

function add_dia_diem_tour($valueAdddiadiem)
{
    $conn = connection();
    $sql = "INSERT INTO `dia_diem_khoi_hanh` (`ma_dia_diem_khoi_hanh`,`ten_dia_diem_khoi_hanh`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($valueAdddiadiem)) {
        header("Location:list_dia_diem");
        // var_dump($_POST);
    }
}
// fuction save edit địa điểm
function save_edit_dia_diem_tour($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `dia_diem_khoi_hanh` SET `ma_dia_diem_khoi_hanh`= ?,`ten_dia_diem_khoi_hanh`= ? WHERE `dia_diem_khoi_hanh`.`ma_dia_diem_khoi_hanh` = '$id' ";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        // var_dump($_POST);
        header("Location:list_dia_diem");
    }
}