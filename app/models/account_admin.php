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
    } else {
        data_check($data_check);
    }
}
// delete nhân viên
function account_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM account_admin WHERE id_account = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
// function insert nhân viên
function account_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO `account_admin` (`tai_khoan`,`mat_khau`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:list_accounts");
    }
}

function add_account($valueAddAccount)
{
    $conn = connection();
    $sql = "INSERT INTO `account_admin` (`tai_khoan`,`mat_khau`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($valueAddAccount)) {
        header("Location:list_accounts");
    }
}
// fuction save edit nhân viên
function save_edit_list_account($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `account_admin` SET `tai_khoan`=?,`mat_khau`=? WHERE `account_admin`.`id_account` = $id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:list_accounts");
        // echo "hello";
    }
}
