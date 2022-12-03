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
                                                <p>- Ngân hàng TMCP Ngoại Thương Việt Nam - CN TP.HN (VCB)</p>
                                                <p>- Tên đơn vị hưởng: CÔNG TY CỔ PHẦN DỊCH VỤ DU LỊCH 2 MIỀN TOUR</p>
                                                <p>- Số tài khoản VNĐ: 007.1001204617</p>
                                                <p>- Tại Ngân Hàng VCB - CN TP.HN</p>
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
                                                    <?= $dia_chi_cong_ty ?>
                                                    <br>
                                                    <strong> Số Điện Thoại:</strong>
                                                    <a href="tel:<?= $fax ?>"> <?= $fax ?></a>
                                                    <br>
                                                    <strong> Email:</strong>
                                                    <a href="mailto:<?= $email_cong_ty ?>"><?= $email_cong_ty ?></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <input type="radio" onclick="yesnoCheck();" name="payment_method" value="3" id="payonline" />
                                            <label for="">Thanh Toán Online</label>
                                            <div id="payment_payonline" style="display:none" class=" payment_info">
                                                <p>HÌNH THỨC THANH TOÁN
                                                    <br>
                                                    <strong>Thanh toán bằng VNPAY</strong>
                                                    <br>
                                                    <Strong style="color:red">Vui lòng kiểm tra tour trước khi thanh toán</Strong>
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
                                <?php foreach ($informationTourDefautFromPage ?? $informationTourHasCode as $item) : ?>
                                    <?php extract($item) ?>
                                    <div class="cart-list-body">
                                        <div class="cart-item ">
                                            <div class="img-tour">
                                                <a href="<?= ROOT ?>tour/tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?> " class=" img-thumbnail" alt=""></a>
                                            </div>
                                            <div class="info-tour">
                                                <div class="caption">
                                                    <a class="title-tour-cart title-tour " href="<?= ROOT ?>tour/tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>">
                                                        <p>Du Lịch <?= $ten_tour ?></p>
                                                    </a>
                                                    <p><strong>Ngày Khởi Hành:</strong>
                                                        <span style="color: #FFC10E;"><?= date_handler($ngay_khoi_hanh) ?></span>
                                                    </p>
                                                    <p>
                                                        <i class="fa fa-users"></i>
                                                        Số chỗ còn:
                                                        <span id="so_cho" data-so-cho="<?= $so_cho ?>"><?= $so_cho ?></span>
                                                    </p>
                                                    <div class="cart-detail">
                                                        <div class="line-price">
                                                            <strong>Người lớn </strong>
                                                            <input type="number" min="1" value="1" name="nguoi_lon" max="<?= $so_cho ?>" id="qtyLon" onclick="calculateLon()">
                                                            <span class="item-price" id="proLon" data-price=" <?= $gia_tien ?>">*<?= currency_format($gia_tien) ?>=</span>
                                                            <strong class="line-total money"> <?= currency_format($gia_tien) ?>
                                                            </strong>
                                                        </div>
                                                        <div class="line-price">
                                                            <strong>Trẻ em (< 11 tuổi) </strong>
                                                            <input type="number" min="0" value="0" name="tre_em" max="<?= $so_cho ?>" id="qtyNho" onclick="calculateNho()">
                                                            <span class="item-price" id="proNho" data-price="0">*0VND=</span>
                                                            <strong class="line-total">0VND
                                                            </strong>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="cart-item-total d-flex justify-content-between">
                                                        <span>Tổng</span>
                                                        <strong class="total money" style="color: #FFC10E;">
                                                            <?= currency_format($gia_tien) ?></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- handle -->

                                    <div class="to" style="padding-top: 10px;">
                                        <div class="cart-total">
                                            <div class="">
                                                <button type="submit" name="btn-pay" class="btn btn-primary" >Thanh Toán </button>
                                            </div>
                                            <div>
                                                <p> Tổng Cộng:
                                                    <span class="money"> <?= currency_format($gia_tien) ?></span>
                                                </p>
                                                <textarea class="value_pay_of_customer_none moneyForm" type="text" name="tien_none"><?= $gia_tien ?></textarea>
                                                <input class="value_pay_of_customer_none" type="text" name="id_tour_lite_none" value="<?= $id_tour_lite ?>">
                                                <input class="value_pay_of_customer_none" type="text" name="ma_tour_none" value="<?= $ma_tour ?>">
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