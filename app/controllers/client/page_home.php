<?php

function showHome()
{
    $getAllSlider = getAllSlider();
    $getAllThanhPho = getAllThanhPho();
    $get3KhoaTourMienBac = get3KhoaTourMienBac();
    $get3KhoaTourMienNam = get3KhoaTourMienNam();
    $get3KhoaTourHot = get3KhoaTourHot();
    render('homePage', ['get3KhoaTourHot' => $get3KhoaTourHot, 'get3KhoaTourMienNam' => $get3KhoaTourMienNam, 'get3KhoaTourMienBac' => $get3KhoaTourMienBac, 'getAllThanhPho' => $getAllThanhPho, 'getAllSlider' => $getAllSlider]);
}

function addEmailRegiterPromotion()
{
    $flag = false;
    extract($_POST);
    $data = [
        $email
    ];
    $getInforRegister = getInforRegister($email);
    foreach ($getInforRegister as $item) {
        if ($item['email'] == $email) {
            $flag = true;
        }
    }

    if ($flag) {
        setcookie("error_register",'Tài khoản này đã được đăng ký', time()+ 1);
        header("location: ".ROOT);
    } else {
        addRegister($data);
        setcookie("register_success",'Đăng ký thành công', time()+ 1);
        header("location: ".ROOT);
    }
}
