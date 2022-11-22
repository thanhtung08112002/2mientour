<?php
if (!function_exists('currency_format')) {
  function currency_format($number, $suffix = 'VND')
  {
    if (!empty($number)) {
      return number_format($number, 0, ',', '.') . " " . "{$suffix}";
    }
  }
}
include_once 'homePageSliderAndSearch.php';
include_once 'homePageTourHot.php';
include_once 'homePageMienBac.php';
include_once 'homePageMienNam.php';
include_once 'homePageDangKyUuDai.php';


