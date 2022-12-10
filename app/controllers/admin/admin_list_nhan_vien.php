<?php
function showAllNhanVien()
{
    $getAllNhanVienMienNam = getAllNhanVienMienNam();
    $getAllNhanVienMienBac = getAllNhanVienMienBac();
    $getAllNhanVien = getAllNhanVien();
    render_admin('show_list_nhan_vien', ['getAllNhanVien' => $getAllNhanVien, 'getAllNhanVienMienNam' => $getAllNhanVienMienNam, 'getAllNhanVienMienBac' => $getAllNhanVienMienBac]);
}
function formAddNhanVien()
{
    $getChucVu = getChucVu();
    $getAllMien = getAllMien();
    render_admin('form_add_nhan_vien', ['getAllMien' => $getAllMien, 'getChucVu' => $getChucVu]);
}
function addNhanVien()
{
    extract($_POST);
    $flag = true;
    $img = $_FILES['anh_dai_dien'];
    $anh_dai_dien = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh_dai_dien, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $mien,
        $ho_ten,
        $sdt,
        $que_quan,
        $anh_dai_dien,
        $chuc_vu,
        $ngay_thang_nam_sinh
    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "admin_list_employee/add");
    }
    if ($flag) {
        move_uploaded_file($img['tmp_name'], "public/images/img_quan_ly/" . $anh_dai_dien);
        addEmployee($data);
        header("location: " . ROOT . "admin_list_employee");
    }
}
function deleteNhanVien()
{
    $id = $_GET['id'];
    $getEmployeeWithId = getEmployeeWithId($id);
    foreach ( $getEmployeeWithId as $item) {
        unlink("public/images/img_quan_ly/" . $item['anh_dai_dien']);
    }
    deleteEmployee($id);
   
    header("location: " . ROOT . 'admin_list_employee');
}
function formEditNhanVien(){
    $id = $_GET['id'];
    $getChucVu = getChucVu();
    $getAllMien = getAllMien();
    $getEmployeeWithId = getEmployeeWithId($id);
    render_admin('form_edit_nhan_vien', ['getEmployeeWithId' => $getEmployeeWithId,'getAllMien' => $getAllMien,'getChucVu' => $getChucVu]);
}
function editNhanVien() {
    
    extract($_POST);
    $flag = true;
    $img = $_FILES['anh_dai_dien'];
    $anh_dai_dien = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh_dai_dien, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $mien,
        $ho_ten,
        $sdt,
        $que_quan,
        $anh_dai_dien,
        $chuc_vu,
        $ngay_thang_nam_sinh,
        $id_ma_quan_ly
    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "admin_list_employee/add");
    }
    if ($flag) {
        move_uploaded_file($img['tmp_name'], "public/images/img_quan_ly/" . $anh_dai_dien);
        unlink("public/images/img_quan_ly/" . $anh_cu);
        editEmployee($data);
        header("location: " . ROOT . "admin_list_employee");
    }
    
}