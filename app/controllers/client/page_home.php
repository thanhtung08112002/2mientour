<?php

function showHome() {
    $getAllKhoaTour = getAllKhoaTour();
    render('homePage',['getAllKhoaTour' => $getAllKhoaTour]);
}