<?php
function showListThanhPho()
{
    $getAllThanhPhoAndMien = getAllThanhPhoAndMien();
    render_admin('quan_ly_thanh_pho', ['getAllThanhPhoAndMien' => $getAllThanhPhoAndMien]);
}
function formAddThanhPho()
{
    $getAllMien = getAllMien();
    render_admin('form_add_thanh_pho', ['getAllMien' => $getAllMien]);
}
function addThanhPho()
{
    extract($_POST);
   
    $flag = false;
    $getAllThanhPhoAndMien = getAllThanhPhoAndMien();
    foreach ($getAllThanhPhoAndMien as $item) {
        if ($_POST['ma_thanh_pho'] == $item['ma_thanh_pho']) {

            $flag = true;
            break;
        }
    }
    if ($flag == true) {
        setcookie('ma_thanh_pho_error', "mã thành phố đã tồn tại", time() + 3);
        header('location:' . ROOT . 'quan_ly_thanh_pho/add');
    } else {
        $data = [
            $ma_thanh_pho,
            $mien,
            $ten_thanh_pho
        ];

        addThanhPhoOnDB($data);
        header('Location:' . ROOT . 'quan_ly_thanh_pho');
    }
}
function deleteThanhPho()
{
    $flag = false;
    $ma_thanh_pho = $_GET['ma-thanh-pho'];
    $getAllKhoaTour = getAllKhoaTour();
    foreach ($getAllKhoaTour as $item) {
        if ($ma_thanh_pho == $item['ma_thanh_pho']) {
            $flag = true;
            break;
        }
    }
    if ($flag == true) {
        echo "<script>
        
        alert('trong danh sách tour có tour thuộc thành phố này, vui lòng xóa danh sách trước!')
        
        </script>";
        echo '<a href=' . ROOT . 'quan_ly_thanh_pho' . ' class="btn btn-primary" style="font-size: 4rem"> Quay lại trang danh sách thành phố</a>';
        echo '<br>';
        echo '<a href=' . ROOT . 'quan_ly_tour' . ' class="btn btn-primary" style="font-size: 4rem"> Chuyển sang mục danh sách tour</a>';
    } else {
        deleteThanhPhoWithMaThanhPho($ma_thanh_pho);
        header('Location:' . ROOT . 'quan_ly_thanh_pho');
    }
}
