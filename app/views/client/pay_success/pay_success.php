<div class="banner banner_serach"><img src="<?= ROOT ?>public/images/thanh_toan.jpg" alt="" class="img-fluid"></div>
<div class="container">
    <div class="payment-success">
        <div class="payment-success-title">
            <i class="fa fa-map-signs"> </i> Đặt Tour Thành Công
        </div>
        <?php foreach ($getThanhToanTourGanNhat as $item) : ?>
            <?php extract($item) ?>
            <div class="payment-successp-body">
                <h2 class="thanks">Cảm ơn bạn đã đặt tour thành công! </h2>
                <strong>Vui lòng kiểm tra email, chúng tôi sẽ liên lạc với bạn sớm nhất có thể.</strong>
                <div class="break_line"></div>
                <strong>Thông tin đơn hàng của bạn gồm:</strong>
                <div class="payment-successp-body-tour">
                    <div class="title-tour">Du lịch <?= ucwords($ten_tour) ?></div>
                    <div class="title-tour">Ngày khởi hành: <?= date_handler($ngay_khoi_hanh) ?></div>
                    <div class=" item-price">Người lớn: <?= $nguoi_lon ?> người</div>
                    <div class=" item-price">Trẻ em: <?= $tre_em ?> người</div>

                </div>
                <div class="money-tour">
                    <strong>Tổng: <span class="money"><?= currency_format($thanh_tien) ?></span></strong>
                </div>
                <div class="break_line"></div>
                <strong>Thông tin liên hệ</strong>
                <p>Họ và tên: <?= $ho_ten ?></p>
                <p>Điện thoại: <?= $sdt ?></p>
                <p> Email: <?= $email ?></p>
                <p> Địa chỉ: <?= $dia_chi ?></p>
                <div class="break_line"></div>
                <strong>Phương Thức Thanh Toán:</strong>
                <p> <?= $ten_phuong_thuc ?></p>
            </div>
        <?php endforeach ?>

    </div>
    <div class="funtion_tour">
        <div class="cancel_form">
            <?php foreach ($getThanhToanTourGanNhat as $item) : ?>
                <form action="cancel-success?idthanhtoan=<?= $id_thanh_toan ?>&&email=<?= $email ?>" method="POST">
                    <input type="text" name="content_cancel" placeholder="Vui lòng nhập lý do" required>
                    <button type="submit" name="btn-cancel" class="btn btn-danger">Hủy</button>
                </form>
            <?php endforeach ?>
        </div>
        <div class="confirm_tour">
            <a href="<?= ROOT ?>" class="btn btn-primary">Xác nhận</a>
        </div>
    </div>
</div>