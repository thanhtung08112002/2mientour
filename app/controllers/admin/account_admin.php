<?php
function showALLaccount()
{
    $accounts = getAllAccountAdmin();
    render_admin('list_accounts', ['accounts' => $accounts]);
}

// xóa nhân viên
function delete_account($id)
{
    account_delete($id);
    header("Location:list_accounts");
}

function show_edit_account()
{
    $accounts = getAllAccountAdmin();
    render_admin('edit_account', ['accounts' => $accounts]);
}
function show_add_account()
{
    $accounts = getAllAccountAdmin();
    render_admin('add_account', ['accounts' => $accounts]);
}
function save_edit_account($id)
{
    extract($_POST);

    $data = [$tai_khoan, $mat_khau];
    // insert dữ liệu
    save_edit_list_account($data, $id);
    // var_dump($_POST);
}

// Lưu dữ liệu vào csdl khi thêm
function save_add_account()
{
    extract($_POST);

    $data = [$tai_khoan, $mat_khau];
    // insert dữ liệu
    add_account($data);
    // var_dump($_POST);
    // echo"hello";
}
