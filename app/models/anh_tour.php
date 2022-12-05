<?php
//lấy toàn bộ bảng mã giảm giá
function get_all_anh_tour()
{
    $conn = connection();
    $sql = "SELECT * FROM anh_tour JOIN khoa_tour_chi_tiet ON anh_tour.ma_tour = khoa_tour_chi_tiet.ma_tour ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// delete ảnh
function anh_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM anh_tour WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// function insert ảnh
function anh_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `anh_tour` (`ma_tour`,`anh`) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:list_anh_tour");
    }
}


function add_anh($valueAddanh)
{
    $conn = connection();
    $sql = "INSERT INTO `anh_tour` (`ma_tour`,`anh`) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($valueAddanh)) {
        // var_dump($_POST);
        header("Location:list_anh_tour");
    }
}


// fuction save edit ảnh
function save_edit_tour($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `anh_tour` SET`ma_tour`=?,`anh`=? WHERE `anh_tour`.`id` = $id";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:list_anh_tour");
        // var_dump($_POST);
    }
}
