<?php

function showPaySuccess()
{
    
    extract($_POST);
    $data = [
        $ma_tour_none,
        $id_tour_lite_none,
        $txtHoTen,
        $tntSoDT,
        $tgmail,
        $txtDiaChi,
        $payment_method,
        $so_nguoi,
        $tien_none
    ];
  
    if (payTour($data)) {
        require 'phpMailer.php';
    }
    $getThanhToanTourGanNhat = getThanhToanTourGanNhat();
    render('pay_success',['getThanhToanTourGanNhat' => $getThanhToanTourGanNhat]);
}

