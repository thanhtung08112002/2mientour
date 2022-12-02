<?php

function showIntroduction()
{
    $getAllThanhPho = getAllThanhPho();

    render('introduction', ['getAllThanhPho' => $getAllThanhPho]);
}
