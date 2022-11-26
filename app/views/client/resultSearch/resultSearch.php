    <div class="banner banner_serach"><img src="<?= ROOT ?>public/images/banner_search.jpg" alt="" class="img-fluid"></div>
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
                                <form method="GET" action="result-search" name="frn" onsubmit="return validete()">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="valueSearch" placeholder="Nhập tên, Vị trí, Địa danh,...">
                                        <p id="loinhaptext" style="color: red;"></p>
                                    </div>
                                    <select id="inputState" class="form-control" name="listCity">
                                        <option value="">Thành phố</option>
                                        <?php
                                        foreach ($getAllThanhPho as $item) :
                                        ?>
                                            <?php extract($item) ?>
                                            <option value="<?= $ma_thanh_pho ?>"><?= $ten_thanh_pho ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <button type="submit" class="btn btn-warning  btn-lg btn-block" name="btn_search_tour">
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
                                            <a href="tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" class=" img-thumbnail" alt=""></a>
                                        </div>
                                        <div class="info-tour ">
                                            <div class="caption">
                                                <a class="title-tour " href="tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"> Du lịch
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