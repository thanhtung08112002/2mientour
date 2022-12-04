<?php
function getAllchucvu()
{
    $conn = connection();
    $sql = "SELECT * FROM chuc_vu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// delete chức vụ
function chuc_vu_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM chuc_vu WHERE ma_chuc_vu = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// function insert ảnh
function chuc_vu_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `chuc_vu` (ten_chuc_vu) VALUES(?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:list_chuc_vu");
    }
}


function add_chuc_vu($valueAddchuc)
{
    $conn = connection();
    $sql = "INSERT INTO `chuc_vu` (ten_chuc_vu) VALUES(?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($valueAddchuc)) {
        // var_dump($_POST);
        header("Location:list_chuc_vu");
    }
}


// fuction save edit chức vụ
function save_edit_chuc($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `chuc_vu` SET`ten_chuc_vu`=? WHERE `chuc_vu`.`ma_chuc_vu` = $id";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:list_chuc_vu");
        // var_dump($_POST);

    }
}
