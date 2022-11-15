<?php

function showHome() {
    $thong_tin_cong_ty = getAllThongTinCongTy();
    render('homePage',["thong_tin_cong_ty" => $thong_tin_cong_ty]);
}