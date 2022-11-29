<div class="pay_success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pay_success--title">
                    <h2><i class="fa fa-map-signs"></i>đặt tour thành công</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($getThanhToanTourGanNhat as $item) : ?>
                    <?php extract($item) ?>
                    <div class="pay_success--thanks">
                        <h3>Cảm ơn bạn đã đặt tour thành công!</h3>
                        <p class="note_line">Vui lòng kiểm tra email, chúng tôi sẽ liên hệ với bạn sớm nhất có thể</p>
                    </div>

                    <div class="pay_success--information-tour">
                        <p class="note_line">Thông tin đơn hàng của bạn gồm:</p>
                        <span></span>
                    </div>
                    <div class="pay_success--information-contact">
                    <p class="note_line">Thông tin liên hệ:</p>
                        <span>Họ và tên: <?= $ho_ten ?></span>
                        <span>Điện thoại: <?= $sdt ?></span>
                        <span>Email: <?= $email ?></span>
                        <span>Địa chỉ: <?= $dia_chi ?></span>
                    </div>
                    <div class="pay_success--method">
                    <p class="note_line">Phương thức thanh toán:</p>
                    <span><?= $ten_phuong_thuc ?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>