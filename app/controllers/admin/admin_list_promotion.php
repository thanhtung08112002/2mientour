<?php
function showAllPromotion(){
    $getAllPromotion = getAllPromotion();
    render_admin('show_list_promotion', ['getAllPromotion' => $getAllPromotion]);
}
function showAddPromotion()
{
    $getAllPromotion = getAllPromotion();
    render_admin('form_add_promotion', ['getAllPromotion' => $getAllPromotion]);
}
function showEditPromotion()
{
    $id_giam_gia = $_GET['id_giam_gia'];
    $getPromotionWithId = getPromotionWithId($id_giam_gia);
    render_admin('form_edit_promotion', ['getPromotionWithId' => $getPromotionWithId]);
}
function deletePromotion()
{
    $id_giam_gia = $_GET['id_giam_gia'];
    deletePromotions($id_giam_gia);
    header("location: " . ROOT . 'admin_list_promotion');
}

function addPromotion()
{
    extract($_POST);
    // tạo mảng
    $data = [$code, $loai_ma_giam_gia, $so_phan_tram_giam];
    // insert dữ liệu
    addPromotions($data);
    /* A comment. */
    // var_dump($_POST);
}
function editPromotion()
{
    extract($_POST);
    // tạo mảng
    $data = [$code, $loai_ma_giam_gia, $so_phan_tram_giam, $id_giam_gia];
    // insert dữ liệu
    editPromotions($data);
    /* A comment. */
    // var_dump($data);
}