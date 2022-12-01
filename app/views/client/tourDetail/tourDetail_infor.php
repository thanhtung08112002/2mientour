<!-- thông tin tour -->
<div class="tour-info">
    <div class="tour-info-heading">
        THÔNG TIN TOUR
    </div>
    <div class="tour-info-content">
    <?php foreach ($informationTour as $item) : ?>
        <?php extract($item) ?>
        <p>
            <i class="	fa fa-map-signs	"></i>
            <strong class="tour-info-content-name" style="font-size: 20px;">  Du Lịch <?= ucwords($ten_tour)?></strong>
        </p>
        <p>
            <i class="fa fa-qrcode"></i>
            <span  class="tour-info-content-title"> Mã tour:</span>
            <strong class="tour-info-content-time"> <?= $ma_tour?></strong>

        </p>
        <p>
            <i class="fa fa-users"></i>
            <span  class="tour-info-content-title"> Số chỗ còn: </span>
            <strong class="tour-info-content-time"> <?= $so_cho?> chỗ</strong>
        </p>
        <p>
            <i class="fa fa-plane"></i>
            <span  class="tour-info-content-title">Phương tiện:</span>
            <strong class="tour-info-content-time"> <?= $phuong_tien?></strong>
        </p>
        <p>
            <i class="fa fa-flag"></i>
            <span  class="tour-info-content-title"> Khởi hành tại: </span>
            <strong class="tour-info-content-time"><?= $ten_dia_diem_khoi_hanh?></strong>
        </p>
        <?php endforeach ?>
    </div>
    <div class="tour-info-phone">
        <i class="fa fa-phone"></i>
        <a href="tel: <?= $fax ?>"><?= $fax ?></a>
    </div>
</div>
<!--End thông tin tour -->