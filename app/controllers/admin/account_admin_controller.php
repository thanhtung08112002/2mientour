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
// thêm nhân viên
// Lưu dữ liệu vào csdl khi thêm
function save_add_account()
{
    $ngay_thang_nam_sinh = date("Y-m-d");
    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh_dai_dien'];
    //Lấy tên ảnh
    $anh_dai_dien = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/" . $anh_dai_dien);
    // tạo mảng
    $data = [$ma_mien, $ten_quan_ly_mien, $sdt, $que_quan, $anh_dai_dien, $ma_chuc_vu, $ngay_thang_nam_sinh];
    // insert dữ liệu
    add_account($data);
}