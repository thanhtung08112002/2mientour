
<section>
  <div class="hot-tour">
    <div class="container">
      <div class="text">
        <span>Chúng tôi giới thiệu đến bạn tour đang hot</span>
        <h2 class="h3">TOUR đang hot</h2>
      </div>
      <div class="row">
        <?php
        $folder = './public/images/imgs_tour/';
        foreach ($get3KhoaTourHot as $item) {
          extract($item);
        ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="thumbnail block-tour shadow rounded-lg tour">
              <a href="tour/tourdetail?mamien=<?=$ma_mien?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"><img src="<?= $folder . $anh_dai_dien_tour;  ?>" class="img-thumbnail" alt="" style="height: 240px; width: 340px;"></a>
              <div class="caption">
                <a class="title-tour " href="tour/tourdetail?mamien=<?=$ma_mien?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>">
                  <p><?= $ten_tour ?></p>
                </a>
                <div class="location">
                  <i class="fa fa-flag"></i>
                  <span><?= $ten_dia_diem_khoi_hanh ?></span>
                </div>
              </div>
              <div class="bottom">
                <span>
                  <i class="fa fa-money"></i>
                  <?= currency_format($gia_tien) ?>
                </span>
                <a href="cart/?matour=<?= $ma_tour ?> " class=""> Đặt ngay</a>
              </div>
            </div>
          </div>
        <?php }
        ?>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="view-all">
            <a href="<?= ROOT?>diemden/?tourhot=1" class="">Xem tất cả</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>