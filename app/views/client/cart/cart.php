<article>
<div class="banner banner_serach"><img src="<?= ROOT ?>public/images/thanh_toan.jpg" alt="" class="img-fluid"></div>
    <section>
        <div class="container">
            <div class="cart-page">
                <form action="pay-success" method="POST" name="frn" onsubmit="return validete()">
                    <div class="row ">
                        <div class="col-lg-4 col-sm-5">
                            <div class="tour-book-info">
                                <div class=" tour-book-info-title">
                                    <i class=" fa fa-credit-card"></i>
                                    THÔNG TIN NGƯỜI ĐẶT
                                </div>
                                <div class=" tour-book-info-body">
                                    
                                    <div class="form-group">
                                        <input type="text" name="txtHoTen" class="form-control" placeholder="Họ và Tên">
                                        <p id="loiHoTen" style="color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tntSoDT" class="form-control" placeholder="Số Điện Thoại">
                                        <p id="loiSoDT" style="color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tgmail" class="form-control" placeholder="Nhập email">
                                        <p id="loigmail" style="color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="txtDiaChi" class="form-control" placeholder="Nhập địa chỉ">
                                        <p id="loiDiaChi" style="color: red;"></p>
                                    </div>
                                    <div class="payment">
                                        <div class="payment-item">
                                            <input type="radio" onclick="yesnoCheck();" name="payment_method" value="1" id="transfer" />
                                            <label for="">Chuyển khoản ngân hàng</label>
                                            <div id="payment_transfer" style="display:none" class=" payment_info">
                                                <p>THÔNG TIN THANH TOÁN
                                                    <br>
                                                    <strong>Trụ Sở:</strong>
                                                    " Trường Cao Đẳng tại Hà Nội"
                                                    <br>
                                                    <strong> Số Điện Thoại:</strong>
                                                    <a href=""> 012365879</a>
                                                    <br>
                                                    <strong> Email:</strong>
                                                    <a href="">admin@gmail.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <input type="radio" onclick="yesnoCheck();" name="payment_method" value="2" id="payoffice" />
                                            <label for="">Thanh Toán Tại Văn Phòng</label>
                                            <div id="payment_payoffice" style="display:none" class=" payment_info">
                                                <p>THÔNG TIN THANH TOÁN
                                                    <br>
                                                    <strong>Trụ Sở:</strong>
                                                    " Trường Cao Đẳng tại Hà Nội"
                                                    <br>
                                                    <strong> Số Điện Thoại:</strong>
                                                    <a href=""> 012365879</a>
                                                    <br>
                                                    <strong> Email:</strong>
                                                    <a href="">admin@gmail.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <input type="radio" onclick="yesnoCheck();" name="payment_method" value="3" id="payonline" />
                                            <label for="">Thanh Toán Online</label>
                                            <div id="payment_payonline" style="display:none" class=" payment_info">
                                                <p>THÔNG TIN THANH TOÁN
                                                    <br>
                                                    <strong>Trụ Sở:</strong>
                                                    " Trường Cao Đẳng tại Hà Nội"
                                                    <br>
                                                    <strong> Số Điện Thoại:</strong>
                                                    <a href=""> 012365879</a>
                                                    <br>
                                                    <strong> Email:</strong>
                                                    <a href="">admin@gmail.com</a>
                                                </p>
                                            </div>
                                        </div>
                                        <p id="loipayment" style="color: red;"></p>
                                    </div>
                                    <button type="submit" name="btn-pay" class="btn btn-warning btn-block">Thanh Toán </button>
                                    <!-- <input type="submit" value="Submit"/> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-7">
                            <div class="cart-list">
                                <div class="cart-list-title">
                                    <i class="fa fa-shopping-cart"></i>
                                    THÔNG TIN VỀ SẢN PHẨM / DỊCH VỤ
                                </div>
                                <!-- handle -->
                                <?php foreach ($informationTourDefautFromPage as $item) : ?>
                                    <?php extract($item) ?>
                                    <div class="cart-list-body">
                                        <div class="cart-item ">
                                            <div class="img-tour">
                                                <a href="<?= ROOT?>tour/tourdetail?mamien=<?= $ma_mien?>&&matour=<?= $ma_tour?>&&tentour=<?= $ten_tour?>"><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?> " class=" img-thumbnail" alt=""></a>
                                            </div>
                                            <div class="info-tour">
                                                <div class="caption">
                                                    <a class="title-tour-cart title-tour " href="">
                                                        <p>Du Lịch <?= $ten_tour ?></p>
                                                    </a>
                                                    <p><strong>Ngày Khởi Hành:</strong>
                                                        <span style="color: #FFC10E;"><?= date_handler($ngay_khoi_hanh) ?></span>
                                                    </p>
                                                    <p>
                                                        <i class="fa fa-users"></i>
                                                        Số chỗ còn:
                                                        <span><?= $so_cho ?></span>
                                                    </p>
                                                    <div class="cart-detail">
                                                        <div class="line-price">
                                                            <strong>người </strong>
                                                            <input type="number" min="1" value="1" name="so_nguoi" max="<?= $so_cho ?>" id="qty" onclick="calculate()">
                                                            <span class="item-price" id="pro" data-price=" <?= $gia_tien?>">*<?= currency_format($gia_tien)?>=</span>
                                                            <strong class="line-total money"> <?= currency_format($gia_tien)?>
                                                            </strong>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="cart-item-total d-flex justify-content-between">
                                                        <span>Tổng</span>
                                                        <strong class="total money" style="color: #FFC10E;">
                                                        <?= currency_format($gia_tien)?></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- handle -->

                                <div class="to" style="padding-top: 10px;">
                                    <div class="cart-total">
                                        <div class="">
                                            <button type="submit" name="btn-pay" class="btn btn-primary">Thanh Toán </button>
                                        </div>
                                        <div>
                                            <p> Tổng Cộng:
                                                <span class="money"> <?= currency_format($gia_tien)?></span>
                                            </p>
                                            <textarea class="value_pay_of_customer_none moneyForm" type="text" name="tien_none"><?= $gia_tien?></textarea>
                                            <input class="value_pay_of_customer_none" type="text" name="id_tour_lite_none" value="<?= $id_tour_lite?>">
                                            <input class="value_pay_of_customer_none" type="text" name="ma_tour_none" value="<?= $ma_tour?>">
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</article>