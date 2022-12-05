<?php 
function show_all_sliders(){
    $slider = getAllSlider();
    render_admin('list_slider',['slider'=>$slider]);
}
function show_edit_sliders(){
    $slider = getAllSlider();
    render_admin('edit_slider',['slider'=>$slider]);
}
function show_add_sliders(){
    $slider = getAllSlider();
    render_admin('add_slider',['slider'=>$slider]);
}
// xóa slider
function delete_slider($id)
{
    slider_delete($id);
    header("Location:list_slider");
}
// edit slider
function save_edit_sliders($id)
{
    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh'];
    //Lấy tên ảnh
    $anh = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/" . $anh);
    // tạo mảng
    $data = [$anh,$url];
    // insert dữ liệu
    save_edit_slider($data, $id);
    // var_dump($_POST);
}

// thêm ảnh
function save_add_slider()
{

    extract($_POST);
    // lấy dữ liệu ảnh
    $image = $_FILES['anh'];
    //Lấy tên ảnh
    $anh = $image['name'];
    //upload 
    move_uploaded_file($image['tmp_name'], "public/images/" . $anh);
    // tạo mảng
    $data = [$anh,$url];
    // insert dữ liệu
    add_slider($data);
}