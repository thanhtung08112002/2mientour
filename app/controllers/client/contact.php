<?php

function showContact()
{
    $getAllThanhPho = getAllThanhPho();

    render('contact', ['getAllThanhPho' => $getAllThanhPho]);
}
