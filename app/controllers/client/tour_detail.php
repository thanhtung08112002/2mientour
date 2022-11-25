<?php

function showTourDetail($ma_tour) {
    $get3KhoaTourMienNam = get3KhoaTourMienNam();
    $getKhoaTourWithMaTour = getKhoaTourWithMaTour($ma_tour);
    render('tourDetail',['getKhoaTourWithMaTour' => $getKhoaTourWithMaTour]);
}