            <div class="banner-introduction banner">
                <img src="<?= ROOT ?>public/images/banner-tin-tuc.jpg" alt="" class="img-fluid">
                <h2 class="banner-introduction-content" style="color: #fff;">Tin tức</h2>
            </div>
            <section>
                <div class="container">
                    <div class="tour-news">
                        <div class="row">
                            <div class="col-sm-8 order-sm-last ">
                                <?php foreach ($getNews as $item) : ?>
                                    <?php extract($item)?>
                                    <div class="general-news">
                                        <div class="news-content">
                                            <div class="news-tour-img">
                                                <a href="<?= ROOT?>tintuc/tintucdetail?id=<?= $id?>"><img src="<?= ROOT ?>public/images/<?= $anh_dai_dien_tin_tuc?>"class=" img-thumbnail" alt=""></a>
                                            </div>
                                            <div class="news-info-tour ">
                                                <div class="caption-news">
                                                    <h3>
                                                        <a href="<?= ROOT?>tintuc/tintucdetail?id=<?= $id?>"><?= $tieu_de?></a>
                                                        <p><?= $noi_dung_dau?></p>
                                                    </h3>
                                                </div>
                                                <hr>
                                                <div class="bottom-news">
                                                    <span>
                                                        <i class="fa fa-calendar"></i>
                                                       <?= date_handler($ngay_dang)?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                            <div class="col-sm-4 order-sm-first">
                                <div class="contact">
                                    <div class="contact-heading">
                                        <i class="fa fa-building-o"></i>
                                        Liên hệ
                                    </div>
                                    <div class="contact-content">
                                        <ul style="list-style: none; padding-left: 0">
                                            <li>
                                                <?= $ten_cong_ty ?>
                                            </li>
                                            <li>
                                                <strong> Trụ sở:</strong> <?= $dia_chi_cong_ty ?>
                                            </li>
                                            <li>
                                                <strong>Tel: </strong><a href="tel:<?= $tel ?>"><?= $tel ?></a>
                                            </li>
                                            <li>
                                                <strong>Fax: </strong><a href="tel:<?= $fax ?>"><?= $fax ?></a>
                                            </li>
                                            <li>
                                                <strong>Email: </strong><a href="mailto:<?= $email_cong_ty ?>"><?= $email_cong_ty ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>