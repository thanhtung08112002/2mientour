<?php

function showDiemDen($value_list) {
    $getAllThanhPho = getAllThanhPho();
    $getInforWithMaMien = getInforWithMaMien($value_list);
    $filterTourWithMaMien = filterTourWithMaMien($value_list);
    render('diemDen', ['getInforWithMaMien' => $getInforWithMaMien,'filterTourWithMaMien' => $filterTourWithMaMien,'getAllThanhPho' => $getAllThanhPho]);
}
function showDiemDenHot($value_hot) {
    $getAllThanhPho = getAllThanhPho();
    $getAllTourHot = getAllTourHot($value_hot);
    render('diemDen', ['getAllTourHot' => $getAllTourHot,'getAllThanhPho' => $getAllThanhPho]);
}