<?php
function admin_page() {
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    render_admin('pageAdmin',['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu]);
}
// xóa nhân viên
function delete_nhan_vien($id)
{
    nhan_vien_delete($id);
    header("Location:admin_page");
}
// thêm nhân viên
function show_them_nhan_vien()
{
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    $du_lich_trong_nuoc = getAlldulichtrongnuoc();

    render_admin("add_nhan_vien", ['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu, 'du_lich_trong_nuoc' => $du_lich_trong_nuoc]);
}
// danh sách nhân viên
function show_list_nhan_vien()
{
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    render_admin("list_nhan_vien", ['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu]);
}
// sửa nhân viên
function show_edit_nhan_vien()
{
    $ban_quan_ly = getAllbanquanly();
    $chuc_vu = getAllchucvu();
    $du_lich_trong_nuoc = getAlldulichtrongnuoc();
    render_admin("edit_nhan_vien", ['ban_quan_ly' => $ban_quan_ly, 'chuc_vu' => $chuc_vu, 'du_lich_trong_nuoc' => $du_lich_trong_nuoc]);
}
// Lưu dữ liệu vào csdl khi thêm
function save_add_nhan_vien()
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
    add_number($data);
}
function save_edit_nhan_vien($id)
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
    $data = [$ma_mien,$ten_quan_ly_mien, $sdt, $que_quan, $anh_dai_dien, $ma_chuc_vu, $ngay_thang_nam_sinh];
    // insert dữ liệu
    save_edit_list($data, $id);
    // var_dump($_POST);
}
