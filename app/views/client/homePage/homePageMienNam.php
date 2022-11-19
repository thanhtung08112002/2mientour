
<?php
if (!function_exists('currency_format')) {
  function currency_format($number, $suffix = 'VND') {
      if (!empty($number)) {
          return number_format($number, 0, ',', '.') ." ". "{$suffix}";
      }
  }
}
?>
<section>
  <div class="tour-nam">
    <div class="container">
      <div class="text">
        <span>Khám phá lịch sử - văn hóa - con người Việt Nam với</span>
        <h2 class="h3">TOUR Mien Nam</h2>
      </div>
      <!-- cần render -->
      <div class="row">
        <?php 
        $folder = './public/images/imgs_tour/';
        foreach($getAllKhoaTour as $item){
          extract($item);
          ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail block-tour shadow rounded-lg tour">
            <a href=""><img src="<?= $folder.$anh_dai_dien_tour;  ?>" class="img-thumbnail" alt=""></a>
            <div class="caption">
              <a class="title-tour " href="">
                <p><?= $ten_tour?></p>
              </a>
              <div class="location">
                <i class="fa fa-flag"></i>
                <span><?= $ten_dia_diem_khoi_hanh?></span>
              </div>
              <!-- <i class="fa fa-clock-o"></i>
              <span>04/11/2022</span> -->
            </div>
            <div class="bottom">
              <span>
                <i class="fa fa-money"></i>
                <?= currency_format($gia_tien)?>
              </span>
              <a href="tourdetail?matour= <?= $ma_tour?> " class=""> Đặt ngay</a>
            </div>
          </div>
        </div>
     <?php }
      ?>
 <!-- cần render -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="view-all">
            <a href="#" class="">Xem Tat Ca</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>