<?php
$thong_tin_cong_ty = getAllThongTinCongTy();
foreach ($thong_tin_cong_ty as $item) {
  $thongTin = $item;
}
extract($thongTin);