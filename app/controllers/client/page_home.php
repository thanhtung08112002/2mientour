<?php

function showHome()
{
    $getAllThanhPho = getAllThanhPho();
    $get3KhoaTourMienNam = get3KhoaTourMienNam();
    $get3KhoaTourMienBac = get3KhoaTourMienBac();
    $get3KhoaTourHot = get3KhoaTourHot();
    render('homePage', ['get3KhoaTourMienNam' => $get3KhoaTourMienNam, 'get3KhoaTourMienBac' => $get3KhoaTourMienBac, 'get3KhoaTourHot' => $get3KhoaTourHot, 'getAllThanhPho' => $getAllThanhPho]);
}
