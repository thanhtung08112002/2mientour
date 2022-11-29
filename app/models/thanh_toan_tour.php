<?php
//lấy toàn bộ bảng account_admin
function getALLthanhtoantour()
{
    $conn = connection();
    $sql = "SELECT * FROM `thanh_toan_tour`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// delete thanh_toan_tour
function thanh_toan_tour_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM thanh_toan_tour WHERE id_thanh_toan = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// fuction save edit thanh toán
function save_edit_list_thanh_toan($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `thanh_toan_tour` SET `ma_tour`=?,`ho_ten`=?,`sdt`=?,`email`=?,`dia_chi`=?,`id_ma_giam_gia`=?,`phuong_thuc_thanh_toan`=?,`so_luong`=?,`thanh_tien`=? WHERE `thanh_toan_tour`.`id_thanh_toan` = $id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:list_thanh_toan_tour");
    }
}
