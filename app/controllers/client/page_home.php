<?php

function showHome()
{
    $getAllThanhPho = getAllThanhPho();
    $get3KhoaTourMienBac= get3KhoaTourMienBac();
    $get3KhoaTourMienNam= get3KhoaTourMienNam();
    $get3KhoaTourHot= get3KhoaTourHot();
    render('homePage', ['get3KhoaTourHot' => $get3KhoaTourHot ,'get3KhoaTourMienNam' => $get3KhoaTourMienNam ,'get3KhoaTourMienBac' => $get3KhoaTourMienBac ,'getAllThanhPho' => $getAllThanhPho]);
}
