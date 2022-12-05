<?php
//lấy toàn bộ bảng thành phố
function getAllSlider()
{
    $conn = connection();
    $sql = "SELECT * FROM `slider`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// delete ảnh
function slider_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM slider WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// fuction save edit ảnh
function save_edit_slider($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `slider` SET `anh`=?,`url`=? WHERE `slider`.`id` = $id";

    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:list_slider");
        // var_dump($_POST);
    }
}
// function insert ảnh
function sldier_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `slider` (`anh`,`url`) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:list_slider");
    }
}


function add_slider($valueAddslider)
{
    $conn = connection();
    $sql = "INSERT INTO `slider` (`anh`,`url`) VALUES(?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($valueAddslider)) {
        // var_dump($_POST);
        header("Location:list_slider");
    }
}