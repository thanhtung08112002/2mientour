<?php 

function show_get_thong_tin(){
    $thong_tin = getAllThongTinCongTy();
    render_admin('list_thong_tin', ['thong_tin' => $thong_tin]);

}

function show_edit_thong_tin(){
    $thong_tin = getAllThongTinCongTy();
    render_admin('edit_thong_tin', ['thong_tin' => $thong_tin]);

}

function save_edit_thong_tin_cong_ty($id)
{
    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['logo'];
    //Lấy tên ảnh
    $logo = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/" . $logo);
    // tạo mảng
    $data = [$ma_cong_ty,$ten_cong_ty, $dia_chi_cong_ty, $tel, $fax, $email_cong_ty, $logo, $copyrights];
    // insert dữ liệu
    save_edit_thong_tin($data, $id);
    // var_dump($_POST);
}