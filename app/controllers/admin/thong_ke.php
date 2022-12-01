<?php
function showAllThongKe()
{
    $thong_ke_theo_ma_mien = thong_ke_theo_ma_mien();
    render_admin('thong_ke', ['thong_ke_theo_ma_mien' => $thong_ke_theo_ma_mien]);
}
function showAllThongKeTheoMien()
{
    $thong_ke_theo_mien = thong_ke_theo_mien();
    render_admin('thong_ke_theo_mien', ['thong_ke_theo_mien' => $thong_ke_theo_mien]);
}
function showAllDanhSachThongKeChiTiet()
{
    $danh_sach_thong_ke_tour_chi_tiet = danh_sach_thong_ke_tour_chi_tiet();
    render_admin('thong_ke_chi_tiet', ['danh_sach_thong_ke_tour_chi_tiet' => $danh_sach_thong_ke_tour_chi_tiet]);
}
function danh_sach_tour_chi_tiet($ma_mien)
{
    $danh_sach_tour_with_ma_mien = danh_sach_tour_with_ma_mien($ma_mien);
    render_admin('danh_sach_tour_chi_tiet', ['danh_sach_tour_with_ma_mien' => $danh_sach_tour_with_ma_mien]);
}
