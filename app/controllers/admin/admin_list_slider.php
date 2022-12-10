<?php
function showAllSlider(){
    $getAllSlider = getAllSlider();
    render_admin('show_list_slider', ['getAllSlider' => $getAllSlider]);
}

function formAddSlider(){
    render_admin('form_add_slider');
}
function add_slider(){
    extract($_POST);
    $flag = true;
    $img = $_FILES['anh'];
    $anh = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $anh,
        $url
    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "admin_list_slider/add_slider");
    }
    if ($flag) {
        move_uploaded_file($img['tmp_name'], "public/images/" . $anh);
        addSlider($data);
        header("location: " . ROOT . "admin_list_slider");
    }
    
    render_admin('form_add_slider');
}

function deleteSlider()
{
    $id = $_GET['id'];
    $getSliderWithID = getSliderWithID($id);
    foreach ($getSliderWithID as $item) {
        unlink("public/images/" . $item['anh']);
    }
    deleteSliders($id);

    header("location: " . ROOT . 'admin_list_slider');
}

function formEditSlider(){
    $id = $_GET['id'];
    $getSliderWithID = getSliderWithID($id);
    render_admin('form_edit_slider',['getSliderWithID' => $getSliderWithID]);
}
function editSlider()
{

    extract($_POST);
    $flag = true;
    $img = $_FILES['anh'];
    $anh = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $anh,
        $url,
        $id
    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "admin_list_slider/edit_slider/?id=$id");
    }
    if ($flag) {
        move_uploaded_file($img['tmp_name'], "public/images/" . $anh);
        unlink("public/images/" . $anh_cu);
        editSliders($data);
        header("location: " . ROOT . "admin_list_slider");
    }
}