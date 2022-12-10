<?php
//lấy toàn bộ bảng thành phố
function getAllSlider() {
    $conn = connection();
    $sql = "SELECT * FROM `slider` order by id DESC";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addSlider($data)
{
    $conn = connection();
    $sql = "INSERT INTO `slider`(`anh`, `url`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function getSliderWithId($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `slider` WHERE id = $id;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function deleteSliders($id)
{

    $conn = connection();
    $sql = "DELETE FROM `slider` WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function editSliders($data)
{
    $conn = connection();
    $sql = "UPDATE `slider` SET `anh`=?,`url`=? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}