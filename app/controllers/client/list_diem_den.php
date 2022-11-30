<?php

function showDiemDen($value_list) {
    $getInforWithMaMien = getInforWithMaMien($value_list);
    $filterTourWithMaMien = filterTourWithMaMien($value_list);
    render('diemDen', ['getInforWithMaMien' => $getInforWithMaMien,'filterTourWithMaMien' => $filterTourWithMaMien]);
}
function showDiemDenHot($value_hot) {
    $getAllTourHot = getAllTourHot($value_hot);
    render('diemDen', ['getAllTourHot' => $getAllTourHot]);
}