<?php

function showCart($matour)
{
   $informationTourDefautFromPage = informationTourDefautFromPage($matour);
    render('cart',['informationTourDefautFromPage' => $informationTourDefautFromPage]);
    echo "<pre>";
}
