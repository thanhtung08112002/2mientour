<?php
function getAllThongTinCongTy()
{
    $conn = connection();
    $sql = "SELECT * FROM `thong_tin_cong_ty`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function save_edit_thong_tin($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `thong_tin_cong_ty` SET `ma_cong_ty`=?,`ten_cong_ty`=?,`dia_chi_cong_ty`=?,`tel`=?,`fax`=?,`email_cong_ty`=?,`logo`=?,`copyrights`=? WHERE thong_tin_cong_ty.ma_cong_ty = '$id'";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        // var_dump($_POST);
        header("Location:list_thong_tin");
    }
}
