<?php

function showContact()
{
    $getAllThanhPho = getAllThanhPho();

    render('contact', ['getAllThanhPho' => $getAllThanhPho]);
}

function addNote(){
    $getAllThanhPho = getAllThanhPho();
    $date = date("Y-m-d H:i:s");
    extract($_POST);
    $data = [
        $txtHoTen,
        $tntSoDT,
        $tgmail,
        $note,
        $date
    ];
    addYKien($data);
     render('send_success', ['getAllThanhPho' => $getAllThanhPho]);
}

