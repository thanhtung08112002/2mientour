<div class="banner-introduction banner">
    <img src="<?= ROOT ?>public/images/banner-tin-tuc.jpg" alt="" class="img-fluid">
    <h2 class="banner-introduction-content" style="color: #fff;">Tin tức</h2>
</div>
<section>
    <div class="container">
        <div class="tour-news">
            <div class="row">
                <div class="col-sm-8 order-sm-last ">
                    <?php foreach ($getNewDetail as $item) : ?>
                        <?php extract($item)?>
                        <div class="news-details-content">
                            <h1><?= $tieu_de ?></h1>
                            <div class="date">
                                <i class="fa fa-calendar"></i>
                                <?= date_handler($ngay_dang) ?>
                            </div>
                            <p><?= $noi_dung_dau ?>
                            </p>
                        
                            <p><?= $content?></p>

                        </div>
                    <?php endforeach ?>

                </div>
                <div class="col-sm-4 order-sm-first">
                    <div class="contact">
                         <!-- sửa lại css -->
    <div class="contact-heading">
        <i class="fa fa-building-o"></i>
        LIÊN HỆ
    </div>
    <div class="contact-content">
        <ul class="contact-content-list">
            <li style="padding-left: 8px; font-size: 1.5rem; font-weight: 700;">
                <?= $ten_cong_ty ?>
            </li>
            <li>
                <strong> Trụ sở:</strong> <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%91%E1%BA%B3ng+FPT+Polytechnic/@21.0381278,105.7445984,17z/data=!3m1!4b1!4m5!3m4!1s0x313454b991d80fd5:0x53cefc99d6b0bf6f!8m2!3d21.0381278!4d105.7467871?hl=vi"><?= $dia_chi_cong_ty ?></a>
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
    <!-- kết thúc sửa css -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>