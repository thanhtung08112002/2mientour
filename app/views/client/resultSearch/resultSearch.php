    <div class="banner_serach"><img src="<?= ROOT ?>public/images/banner_search.jpg" alt="" class="img-fluid"></div>
    <section>
        <div class="container">
            <div class="tour-catalog">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="secarch-tour">
                            <div class="secarch-tour-heading">
                                Tìm Tuor
                            </div>
                            <div class="search-tour-content">
                                <form action="#" name="frn" onsubmit="return validete()">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nhaptext" placeholder="Nhập tên, Vị trí, Địa danh,...">
                                        <p id="loinhaptext" style="color: red;"></p>
                                    </div>
                                    <div class="form-group ">
                                        <select class="form-control" name="loaitour">
                                            <option value="chonloaitour">Loại tour</option>
                                            <option value="Tourmienbac">Tour Miền Bắc</option>
                                            <option value="Tourmiennam">Tour Miền Nam</option>
                                        </select>
                                        <p id="loiloaitour" style="color: red;"></p>
                                    </div>
                                    <div class="form-group ">
                                        <select class="form-control" name="noidi">
                                            <option value="noikhoihanh">Nơi Khởi Hành</option>
                                            <option value="mienbac"> Miền Bắc</option>
                                            <option value="miennam"> Miền Nam</option>
                                        </select>
                                        <p id="loinoidi" style="color: red;"></p>
                                    </div>
                                    <div class="form-group ">
                                        <select class="form-control" name="noiden">
                                            <option value="diemden">Nơi Đến</option>
                                            <option value="dlmienbac"> Du Lịch Miền Bắc</option>
                                            <option value="dlmiennam"> Du Lịch Miền Nam</option>
                                        </select>
                                        <p id="loinoiden" style="color: red;"></p>
                                    </div>
                                    <div class="form-group ">
                                        <select class="form-control" name="dongtour">
                                            <option value="dldongtour">Dòng Tour</option>
                                            <option value="muadong"> Tour Mùa Đông</option>
                                            <option value="muahe"> Tour Mùa Hè</option>
                                            <option value="muathu"> Tour Mùa Thu</option>
                                            <option value="muaxuan"> Tour Mùa Xuân</option>
                                        </select>
                                        <p id="loidongtour" style="color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Ngày Đi" type="date" name="date" id="" class="form-control">
                                        <p id="loidate" style="color: red;"></p>
                                    </div>
                                    <button type="submit" class="btn btn-warning  btn-lg btn-block">
                                        <i class="fa fa-search">Tìm Kiếm</i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="contact-heading">
                                <i class="fa fa-building-o"></i>
                                Lien he
                            </div>
                            <div class="contact-content">
                                <ul style="list-style: none; padding-left: 0">
                                    <li>
                                        <?= $ten_cong_ty ?>
                                    </li>
                                    <li>
                                        <strong> Trụ sở:</strong> <?= $dia_chi ?>
                                    </li>
                                    <li>
                                        <strong>Tel: </strong><a href="tel:<?= $tel ?>"><?= $tel ?></a>
                                    </li>
                                    <li>
                                        <strong>Fax: </strong><a href="tel:<?= $fax ?>"><?= $fax ?></a>
                                    </li>
                                    <li>
                                        <strong>Email: </strong><a href="mailto:<?= $email ?>"><?= $email ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php if ($resultSearch == []) {
                        echo "<h2 style='font-weight: 700; '>Chuyến đi bạn tìm kiếm hiện tại không có</h2>";
                    } else { ?>
                        <div class=" col-sm-8">
                            <div class="tours">
                                <?php foreach ($resultSearch as $item) : ?>
                                    <?php extract($item) ?>
                                    <div class="tour-package">
                                        <div class="img-tour">
                                            <a href=""><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" class=" img-thumbnail" alt=""></a>
                                        </div>
                                        <div class="info-tour ">
                                            <div class="caption">
                                                <a class="title-tour " href=""> Du lịch
                                                    <?= $ten_tour ?>
                                                </a>
                                                <p>
                                                    <i class="fa fa-qrcode"></i>
                                                    <span>Mã tour: <?= $ma_tour ?></span>
                                                </p>
                                                <p>
                                                    <i class="fa fa-calendar"></i>
                                                    <a href="#">Xem ngày khác</a>
                                                </p>
                                            </div>
                                            <div class="bottom">
                                                <span>
                                                    <i class="fa fa-money"></i>
                                                    <?= currency_format($gia_tien) ?>
                                                </span>
                                                <a href="cart.html" class="btn btn-warning">ĐẶT NGAY</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>