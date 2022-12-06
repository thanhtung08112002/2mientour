<?php
function admin_page()
{
    $tong_so_tour_hien_co = tong_so_tour_hien_co();
    $tong_tien_thanh_toan_khac_vnpay = tong_tien_thanh_toan_khac_vnpay();
    $tong_tien_thanh_toan_vnpay = tong_tien_thanh_toan_vnpay();
    $tien_khac_vnpay = $tong_tien_thanh_toan_khac_vnpay[0]['tong_tien_thanh_toan_binh_thuong'];
    $tien_vnpay = $tong_tien_thanh_toan_vnpay[0]['tong_tien_thanh_toan_online'];
    $tong = $tien_khac_vnpay + $tien_vnpay;
    $getAllThanhToanTour = getAllThanhToanTour();
    $thong_ke_so_luong_tour_thanh_toan = thong_ke_so_luong_tour_thanh_toan();
    $thong_ke_gia_tien_tour = thong_ke_gia_tien_tour();
    render_admin('pageAdmin', ['getAllThanhToanTour' => $getAllThanhToanTour, 'tong_tien_thanh_toan_vnpay' => $tong_tien_thanh_toan_vnpay, 'tong_tien_thanh_toan_khac_vnpay' => $tong_tien_thanh_toan_khac_vnpay, 'tong' => $tong, 'tong_so_tour_hien_co' => $tong_so_tour_hien_co, 'thong_ke_so_luong_tour_thanh_toan' => $thong_ke_so_luong_tour_thanh_toan, 'thong_ke_gia_tien_tour' => $thong_ke_gia_tien_tour]);
}
function sign_out()
{
    unset($_SESSION['login_success']);
    header('location:' . ROOT);
}
