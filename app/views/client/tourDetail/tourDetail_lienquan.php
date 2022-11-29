<div class="widget widget-tour">

    <div class="widget-title">
        <div class="tour-heading">
            <i class="fa fa-link"></i>
            TOUR LIÊN QUAN
        </div>
    </div>
    <?php foreach ($tourLienQuan as $item) : ?>
        <?php extract($item) ?>

        <div class="widget-body">
            <div class="thumbnail block-tour shadow rounded-lg tour">
                <a href="tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" class="img-thumbnail" alt=""></a>
                <div class="caption">
                    <a href="tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>" class="title-tour " href="">
                        <p>Du Lịch <?= ucwords($ten_tour) ?></p>
                    </a>
                    <div class="location">
                        <i class="fa fa-flag"></i>
                        <span><?= $ten_dia_diem_khoi_hanh ?></span>
                    </div>
                </div>
                <div class="tour-bottom">
                    <div class="tour-price">
                        <i class="fa fa-money"></i>
                        <span class="price"><?= currency_format($gia_tien) ?></span>
                    </div>
                    <a href="" class="schedule-buy-now">ĐẶT NGAY</a>
                </div>
            </div>
        </div>

    <?php endforeach ?>
</div>