<?php
function showThanhphoThuoc($ma_mien)
{
    $filterTourWithMaMien = filterTourWithMaMien($ma_mien);
    render_admin('thanhpho', ['filterTourWithMaMien' => $filterTourWithMaMien]);
}
function showThoiGianTour($ma_tour)
{
    $filterTourDetail = filterTourDetail($ma_tour);
    render_admin('thoigiantour', ['filterTourDetail' => $filterTourDetail]);
}