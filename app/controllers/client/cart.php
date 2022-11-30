<?php

function showCart($matour)
{
   $informationTourDefautFromPage = informationTourDefautFromPage($matour);
    render('cart',['informationTourDefautFromPage' => $informationTourDefautFromPage]);
}
function showCartSameCode($matour, $ma_tour_lite) {
    $informationTourHasCode = informationTourHasCode($matour,$ma_tour_lite);
    render('cart',['informationTourHasCode' => $informationTourHasCode]);
    
}