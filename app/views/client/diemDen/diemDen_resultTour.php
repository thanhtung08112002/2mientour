<div class="tours">
    <?php if(isset($getInforWithMaMien)){?>
    <?php foreach($getInforWithMaMien as $item):?>
        <?php extract($item)?>
    <div class="desc_content_list">
        <h2>Tour du lịch <?= $ten_mien?></h2>
        <p><?=$mo_ta?></p>
    </div>
    <?php endforeach?>
    <?php }?>
    <?php foreach ($filterTourWithMaMien ?? $getAllTourHot as $item) : ?>
        <?php extract($item) ?>

        <div class="tour-package">
            <div class="img-tour">
                <a href="<?= ROOT ?>tour/tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" class=" img-thumbnail" alt=""></a>
            </div>
            <div class="info-tour ">
                <div class="caption">
                    <a class="title-tour " href="<?= ROOT ?>tour/tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"> Du lịch
                        <?= $ten_tour ?>
                    </a>
                    <p>
                        <i class="fa fa-qrcode"></i>
                        <span>Mã tour: <?= $ma_tour ?></span>
                    </p>

                </div>
                <div class="bottom">
                    <span>
                        <i class="fa fa-money"></i>
                        <?= currency_format($gia_tien) ?>
                    </span>
                    <a href="<?= ROOT?>cart/?matour=<?= $ma_tour?>" class="btn btn-warning">ĐẶT NGAY</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
