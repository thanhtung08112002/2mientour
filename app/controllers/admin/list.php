<?php
function showListWithMien()
{
    $getAllMien = getAllMien();
    render_admin('list', ['getAllMien' => $getAllMien]);
}

function showListDetail($ma_mien)
{
    $filterTourOfMien = filterTourOfMien($ma_mien);
    render_admin('listdetail', ['filterTourOfMien' => $filterTourOfMien]);
}
function showListThanhToan($ma_tour)
{
    $thanhToanTourFull = thanhToanTourFull($ma_tour);
    render_admin('listThanhToan', ['thanhToanTourFull' => $thanhToanTourFull]);
}
