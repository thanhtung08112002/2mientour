<?php
function add_tour_khoi_hanh($ma_tour, $ngay_khoi_hanh,$so_cho)
{
    $conn = connection();
    $sql = "INSERT INTO `khoa_tour_lite` (`ma_tour`, `ngay_khoi_hanh`, `so_cho`) VALUES ('$ma_tour', '$ngay_khoi_hanh', '$so_cho')";
    $stmt = $conn->prepare($sql);
   if ($stmt->execute()) {
    header("location:".ROOT."quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
   } 
}
function delete_tour_khoi_hanh($ma_tour,$id)
{
    $conn = connection();
    $sql = "DELETE FROM `khoa_tour_lite` WHERE `id_tour_lite`=$id";
    $stmt = $conn->prepare($sql);
   if ($stmt->execute()) {
    header("location:".ROOT."quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
   } 
}
function edit_tour_khoi_hanh($data,$ma_tour)
{
    $conn = connection();
    $sql = "UPDATE `khoa_tour_lite` SET `id_tour_lite`=?,`ngay_khoi_hanh`=?,`so_cho`=? WHERE id = ?";
    $stmt = $conn->prepare($sql);
   if ($stmt->execute($data)) {
    header("location:".ROOT."quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
   } 
}



function getKhoaTourLite($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `khoa_tour_lite` WHERE id_tour_lite = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function save_edit_khoi_hanh($data,$ma_tour)
{
    $conn = connection();
    $sql = "UPDATE `khoa_tour_lite` SET `ngay_khoi_hanh`=?,`so_cho`=? WHERE id_tour_lite = ?";
    $stmt = $conn->prepare($sql);
   if ($stmt->execute($data)) {
    header("location:".ROOT."quan_ly_tour/detail-tour/?ma-tour=$ma_tour");
   } 
}