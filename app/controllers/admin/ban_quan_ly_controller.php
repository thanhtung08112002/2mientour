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
