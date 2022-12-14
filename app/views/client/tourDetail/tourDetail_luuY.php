<div class="schedule-step">
    <div class="buy-now">
        <span class="buy-now-price">
            <i class="fa fa-money"></i>
            
            <?= currency_format($gia_tien) ?>
        </span>
        <!-- thêm phần thời gian và ngày khởi hành ở chỗ đặt hàng -->
        <span>
            <p class="buy-now-title-time">
                <i class="fa fa-clock-o"></i>
                <span class="buy-now-title ">Thời gian:</span> <strong class="buy-now-time"><?= $thoi_gian_di ?></strong>
            </p>
            <p>
                <i class="fa fa-flag"></i>
                <span class="buy-now-title">Ngày khởi hành: </span>
                <ins class="buy-now-time"><?= date_handler($ngay_khoi_hanh) ?></ins>
            </p>
        </span>
        <a href="<?= ROOT ?>cart/?matour=<?= $ma_tour ?>" class="buy-now-link"> Đặt ngay</a>
        <!-- kết thúc thời gian và ngày khởi hành ở chỗ đặt hàng -->
    </div>
    <div class="other-schedule">
        <div class="other-schedule-heading schedule-heading">
            <i class="fa fa-check-square-o"></i>
            <span>
                NGÀY KHỞI HÀNH KHÁC
            </span>
        </div>
        <div class="other-schedule-content">
            <table class="other-schedule-list">
                <tbody>
                    <tr class="list">
                        <td style="width:23%;">Mã tour</td>
                        <td style="width:20%; text-align: center;">Ngày khởi
                            hành</td>
                        <td style="width:18%; text-align: center;">Giá</td>
                        <td style="width:15%;">&nbsp;</td>
                    </tr>


                    <?php foreach ($khoiHanhKhac as $item) : ?>
                        <?php extract($item) ?>

                        <?php if ($item == []) { ?>
                            <tr>
                                <td colspan="4" style="text-align: center;">Hiện tại chưa có
                                    lịch khởi hành khác!</td>
                            </tr>
                        <?php  } else { ?>

                            <tr>
                                <td><?= $ma_tour ?></td>
                                <td><?= date_handler($ngay_khoi_hanh) ?></td>
                                <td><?= currency_format($gia_tien) ?></td>
                                <td><a href="<?= ROOT?>cart/?matour=<?= $ma_tour ?>&&id-tour-lite=<?= $id_tour_lite ?>" class="btn btn-warning" style="color: #fff;"> Đặt ngay</a></td>
                            </tr>
                        <?php  } ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>

</div>