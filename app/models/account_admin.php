<?php
//lấy toàn bộ bảng account_admin
function getAllAccountAdmin()
{
    $conn = connection();
    $sql = "SELECT * FROM `account_admin`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// kiểm tra xem có dữ liệu của tk mk admin k
function check_account($data_account = [])
{
    $data_check = false;
    $getAllAccountAdmin = getAllAccountAdmin();
    extract($data_account);
    foreach ($getAllAccountAdmin as $item) {
        extract($item);
        if ($tai_khoan == $account_admin && $mat_khau == $pass_admin) {
            $data_check = true;
            break;
        } else {
            $data_check = false;
        }
    }
    if ($data_check) {
        data_check($data_check);
    }else{
        data_check($data_check);
    }
}
