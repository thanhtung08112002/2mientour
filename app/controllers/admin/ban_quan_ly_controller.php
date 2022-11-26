<?php
function show_ban_quan_ly()
{
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    render_admin("pageAdmin", ['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu]);
}
// xóa nhân viên
function delete_nhan_vien($id)
{
    nhan_vien_delete($id);
    header("Location:ban_quan_ly");
}
// thêm nhân viên
function show_them_nhan_vien()
{
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    render_admin("add_nhan_vien", ['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu]);
}
// sửa nhân viên
function show_edit_nhan_vien()
{
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    render_admin("edit_nhan_vien", ['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu]);
}
// Lưu dữ liệu vào csdl khi thêm
function save_add_nhan_vien()
{

    $date = date("Y-m-d");
    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh_dai_dien'];
    //Lấy tên ảnh
    $anh_dai_dien = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/" . $anh_dai_dien);
    // tạo mảng
    $data = [$ten_quan_ly_mien, $sdt, $que_quan, $anh_dai_dien, $ma_chuc_vu, $ngay_thang_nam_sinh];
    // insrt dữ liệu
    add_number($data);
}
function save_edit_nhan_vien($id)
{
    $date = date("Y-m-d");
    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh_dai_dien'];
    //Lấy tên ảnh
    $anh_dai_dien = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/" . $anh_dai_dien);
    // tạo mảng
    $data = [$ten_quan_ly_mien, $sdt, $que_quan, $anh_dai_dien, $ma_chuc_vu, $ngay_thang_nam_sinh];
    // insrt dữ liệu
    save_edit_list($data, $id);
}
