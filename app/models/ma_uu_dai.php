<?php
function getAllPromotion(){
    $conn = connection();
    $sql = "SELECT * FROM `ma_giam_gia` order by id_giam_gia desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// add
function addPromotions($data)
{

    $conn = connection();
    $sql = "INSERT INTO `ma_giam_gia`( `code`, `loai_ma_giam_gia`, `so_phan_tram_giam`) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location: " . ROOT . 'admin_list_promotion');
        // var_dump($_POST);
    }
}
// deletePromotions
function deletePromotions($id_giam_gia)
{

    $conn = connection();
    $sql = "DELETE FROM `ma_giam_gia` WHERE id_giam_gia = $id_giam_gia";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
// lấy theo id
function getPromotionWithId($id_giam_gia)
{
    $conn = connection();
    $sql = "SELECT * FROM ma_giam_gia  where id_giam_gia = $id_giam_gia";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// edit
function editPromotions($data)
{

    $conn = connection();
    $sql = "UPDATE `ma_giam_gia` SET `code`=?,`loai_ma_giam_gia`=?,`so_phan_tram_giam`=? WHERE id_giam_gia = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location: " . ROOT . 'admin_list_promotion');
        // var_dump($_POST);
    }
}