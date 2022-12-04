<?php
function show_all_dia_diem()
{
    $dia_diem_khoi_hanh = getalldiadiemkhoihanh();
    render_admin('list_dia_diem', ['dia_diem_khoi_hanh' => $dia_diem_khoi_hanh]);
}
// sửa địa điểm
function show_edit_dia_diem()
{
    $dia_diem_khoi_hanh = getalldiadiemkhoihanh();
    render_admin('edit_dia_diem', ['dia_diem_khoi_hanh' => $dia_diem_khoi_hanh]);
}
// sửa địa điểm
function show_add_dia_diem()
{
    $dia_diem_khoi_hanh = getalldiadiemkhoihanh();
    render_admin('add_dia_diem', ['dia_diem_khoi_hanh' => $dia_diem_khoi_hanh]);
}
// xóa ảnh
function delete_dia_diem($id)
{
    dia_diem_delete($id);
    header("Location:list_dia_diem");
}

function save_edit_dia_diem($id)
{
    extract($_POST);

    // tạo mảng
    $data = [$ma_dia_diem_khoi_hanh, $ten_dia_diem_khoi_hanh];
    // insert dữ liệu
    save_edit_dia_diem_tour($data, $id);
    // var_dump($_POST);
}

// thêm chức vụ
function save_add_dia_diem()
{

    extract($_POST);

    // tạo mảng
    $data = [$ma_dia_diem_khoi_hanh, $ten_dia_diem_khoi_hanh];
    // insert dữ liệu
    add_dia_diem_tour($data);
    // var_dump($_POST);

}
