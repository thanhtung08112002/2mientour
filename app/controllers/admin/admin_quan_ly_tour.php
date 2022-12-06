<?php
function showAllTour()
{
    $getAllTour = getAllTour();
    render_admin('quan_ly_tour', ['getAllTour' => $getAllTour]);
}
function showAddTour()
{
    $getAllMien = getAllMien();
    $getLoaiTour = getLoaiTour();
    $getDiaiemKhoiHanh = getDiaiemKhoiHanh();
    render_admin('form_add_tour', ['getLoaiTour' => $getLoaiTour, 'getAllMien' => $getAllMien, 'getDiaiemKhoiHanh' => $getDiaiemKhoiHanh]);
}
//add
function add_tour()
{
    $flag = true;
    extract($_POST);
    $image = $_FILES['anh_dai_dien_tour'];
    $name_img = $image['name'];
    $dir_file = mb_strtolower(pathinfo($name_img, PATHINFO_EXTENSION));

    $file_arr = ['jpg', 'jepg', 'png'];
    $data_du_lich_thanh_pho = [
        $ma_thanh_pho,
        $mien,
        $ten_thanh_pho
    ];
    $data_khoa_tour_chi_tiet = [
        $ma_tour,
        $ma_thanh_pho,
        $ten_tour,
        $phuong_tien,
        $dia_diem_khoi_hanh,
        $thoi_gian_di,
        $name_img,
        $gia_tien,
        $loai_tour
    ];
    $data_khoa_tour_lite = [
        $ma_tour,
        $ngay_khoi_hanh,
        $so_cho
    ];
    $getAllTour = getAllTour();
    foreach ($getAllTour as $item) {
        if ($ma_tour == $item['ma_tour'] && $ma_thanh_pho == $item['ma_thanh_pho']) {
            setcookie('ma_error', "Mã đã tồn tại", time() + 3);
            $flag = false;
            header("location: " . ROOT . "quan_ly_tour/add-tour");
        } else if ($ma_tour == $item['ma_tour'] || $ma_thanh_pho == $item['ma_thanh_pho']) {

            setcookie('ma_error', "Mã đã tồn tại", time() + 3);
            $flag = false;

            header("location: " . ROOT . "quan_ly_tour/add-tour");
        }
    }
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "quan_ly_tour/add-tour");
    }
    if ($flag) {

        move_uploaded_file($image['tmp_name'], "public/images/imgs_tour/" . $name_img);
        add_tour_to_db($data_du_lich_thanh_pho, $data_khoa_tour_chi_tiet, $data_khoa_tour_lite);
    }
}


function show_admin_list_tour_detail($ma_tour)
{
    $imgTourDetail = imgTourDetail($ma_tour);
    $filterTourDetail = filterTourDetail($ma_tour);
    $schedule_tour = schedule_tour($ma_tour);
    render_admin('detail-tour', ['filterTourDetail' => $filterTourDetail, 'schedule_tour' => $schedule_tour, 'imgTourDetail' => $imgTourDetail]);
}
function show_add_detail($thu_muc)
{
    render_admin('showAdddetail', ['thu_muc' => $thu_muc]);
}
function add_khoi_hanh()
{
    extract($_POST);
    add_tour_khoi_hanh($ma_tour, $ngay_khoi_hanh, $so_cho);
}
function add_lich_trinh()
{
    extract($_POST);
    add_tour_lich_trinh($ma_tour, $ngay, $noi_dung);
}
function add_anh()
{
    $flag = true;
    $file_arr = ['jpg', 'jepg', 'png'];
    echo "<pre>";
    extract($_POST);
    $imgs = $_FILES['anh_tour'];
    $anh = $imgs['name'];
    $i = 0;
    foreach ($anh as $item) {
        $dir_file = mb_strtolower(pathinfo($item, PATHINFO_EXTENSION));
        var_dump($dir_file);
        if (!in_array($dir_file, $file_arr)) {
            setcookie('img_error', "file không đúng định dạng", time() + 3);
            $flag = false;
            header("location: " . ROOT . "quan_ly_tour/add-chi-tiet-tour/?thu-muc=anh&ma-tour=$ma_tour");
        }
        if ($flag) {

            move_uploaded_file($imgs['tmp_name'][$i++], "public/images/imgs_tour/" . $item);
            add_anh_tour($ma_tour, $item);
        }
    }
}

// delete
function delete_tour()
{
    $getAllTour = getAllTour();
    foreach ($getAllTour as $item) {
        if ($_GET['ma-tour'] == $item['ma_tour']) {
            unlink("public/images/imgs_tour/" . $item['anh_dai_dien_tour']);
        }
    }
    delete_tour_in_db($_GET['ma-tour'], $_GET['ma-thanh-pho']);
}
function delete_khoi_hanh()
{
    delete_tour_khoi_hanh($_GET['ma-tour'], $_GET['id']);
}
function delete_lich_trinh()
{
    delete_tour_lich_trinh($_GET['ma-tour'], $_GET['id']);
}
function delete_anh()
{
    $selectImgTourDetail = selectImgTourDetail($_GET['id']);
    foreach ($selectImgTourDetail as $item) {
        if ($_GET['id'] == $item['id']) {
            var_dump($item['id']);
            unlink("public/images/imgs_tour/" . $item['anh']);
        }
    }
    delete_anh_tour($_GET['ma-tour'], $_GET['id']);
}


//edit
function edit_khoa_tour_chi_tiet()
{
    $ma_tour = $_GET['ma-tour'];
    $getLoaiTour = getLoaiTour();
    $getDiaiemKhoiHanh = getDiaiemKhoiHanh();
    $getTourWithMaTour = getTourWithMaTour($ma_tour);
    render_admin('edit_khoa_tour_chi_tiet', ['getTourWithMaTour' => $getTourWithMaTour, 'getDiaiemKhoiHanh' => $getDiaiemKhoiHanh, 'getLoaiTour' => $getLoaiTour]);
}

function check_and_save_khoa_tour_chi_tiet()
{
    $ma_tour = $_GET['ma-tour'];
    $flag = true;
    extract($_POST);
    $img = $_FILES['anh_dai_dien_tour'];
    $anh_dai_dien_tour = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh_dai_dien_tour, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $ten_tour,
        $phuong_tien,
        $dia_diem_khoi_hanh,
        $thoi_gian_di,
        $anh_dai_dien_tour,
        $gia_tien,
        $loai_tour,
         $ma_tour
    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "quan_ly_tour/edit-tour/?ma-tour=$ma_tour");
    }
    if ($flag) {
        move_uploaded_file($img['tmp_name'], "public/images/imgs_tour/" . $anh_dai_dien_tour);
        unlink("public/images/imgs_tour/" . $anh_ban_dau);
        edit_khoa_tour_chi_tiet_with_ma_tour( $data);
    }
}
