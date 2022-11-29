<div class="schedule-step">
    <div class="buy-now">
        <span class="buy-now-price">
            <i class="fa fa-money"></i>
            <?= currency_format($gia_tien) ?>
        </span>
        <a href="" class="buy-now-link"> Đặt ngay</a>
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
                                <td><a href="" class="btn btn-warning" style="color: #fff;"> Đặt ngay</a></td>
                            </tr>
                        <?php  } ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>

</div>