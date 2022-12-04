<?php
function show_get_all_anh_tour()
{
    $anh_tour = get_all_anh_tour();
    render_admin('list_anh_tour', ['anh_tour' => $anh_tour]);
}

function show_add_anh_tour()
{
    $anh_tour = get_all_anh_tour();
    $khoa_tour_chi_tiet = getAllKhoaTour();
    render_admin('add_anh_tour', ['anh_tour' => $anh_tour, 'khoa_tour_chi_tiet' => $khoa_tour_chi_tiet]);
}
function show_edit_anh_tour()
{
    $anh_tour = get_all_anh_tour();
    $khoa_tour_chi_tiet = getAllKhoaTour();
    render_admin('edit_anh_tour', ['anh_tour' => $anh_tour, 'khoa_tour_chi_tiet' => $khoa_tour_chi_tiet]);
}

// xóa ảnh
function delete_anh($id)
{
    anh_delete($id);
    header("Location:list_anh_tour");
}

function save_add_anh_tour()
{

    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh'];
    //Lấy tên ảnh
    $anh = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/imgs_tour/" . $anh);
    // tạo mảng
    $data = [$ma_tour, $anh];
    // insert dữ liệu
    add_anh($data);
}

function save_edit_anh($id)
{
    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh'];
    //Lấy tên ảnh
    $anh = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/imgs_tour/" . $anh);
    // tạo mảng
    $data = [$ma_tour, $anh];
    // insert dữ liệu
    save_edit_tour($data, $id);
    // var_dump($_POST);
}
