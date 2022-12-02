<?php

function showContact()
{
    $getAllThanhPho = getAllThanhPho();

    render('contact', ['getAllThanhPho' => $getAllThanhPho]);
}

function addNote(){
    $getAllThanhPho = getAllThanhPho();

    extract($_POST);
    $data = [
        $txtHoTen,
        $tntSoDT,
        $tgmail,
        $note
    ];
    addYKien($data);
     render('send_success', ['getAllThanhPho' => $getAllThanhPho]);
}