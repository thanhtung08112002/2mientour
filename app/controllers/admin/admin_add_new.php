<?php
function showAddNew(){
    
    render_admin('form_add_new');
}
function checkAddNew() {
    extract($_POST);
    $ngay_dang = date("Y-m-d ");
    $flag = true;
    $img = $_FILES['anh_dai_dien_tin_tuc'];
    $anh_dai_dien_tin_tuc = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh_dai_dien_tin_tuc, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $tieu_de,
        $noi_dung_dau,
        $anh_dai_dien_tin_tuc,
        $ngay_dang
    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "admin_list_news/add_new");
    }
    if ($flag) {
        move_uploaded_file($img['tmp_name'], "public/images/imgs_news/" . $anh_dai_dien_tin_tuc);
        addNew($data);
    }
}