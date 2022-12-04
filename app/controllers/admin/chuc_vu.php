<?php
function show_list_chuc_vu()
{

    $chuc_vu = getAllchucvu();
    render_admin('list_chuc_vu', ['chuc_vu' => $chuc_vu]);
}
// xóa chức vụ
function delete_chuc_vu($id)
{
    chuc_vu_delete($id);
    header("Location:list_chuc_vu");
}
// sửa chức vụ
function show_edit_chuc_vu()
{

    $chuc_vu = getAllchucvu();
    render_admin('edit_chuc_vu', ['chuc_vu' => $chuc_vu]);
}
// thêm chức vụ
function show_add_chuc_vu()
{

    $chuc_vu = getAllchucvu();
    render_admin('add_chuc_vu', ['chuc_vu' => $chuc_vu]);
}
function save_edit_chuc_vu($id)
{
    extract($_POST);

    // tạo mảng
    $data = [$ten_chuc_vu];
    // insert dữ liệu
    save_edit_chuc($data, $id);
    // var_dump($_POST);
}

// thêm chức vụ
function save_add_chuc_vu()
{

    extract($_POST);

    // tạo mảng
    $data = [$ten_chuc_vu];
    // insert dữ liệu
    add_chuc_vu($data);
}
