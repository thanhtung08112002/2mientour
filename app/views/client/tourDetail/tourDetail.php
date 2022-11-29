<?php include_once "tourDetail_banner.php" ?>

<div class="container">
    <div class="row align-items-start" style="margin-top: 5rem;">
        <div class="col-lg-8 m-15px-tb">
            <div class="tour-content">
                <div class="tour-heading">
                    <i class="fa fa-image"></i>
                    HÌNH ẢNH
                </div>
                <!-- slider -->
                <?php include_once "tourDetail_slider.php" ?>
                <!-- slider -->

                <div class="schedule-heading">
                    <i class="fa fa-list-ol"></i>
                    <span>CHƯƠNG TRÌNH TOUR</span>
                </div>

                <div class="div-content">
                    <!-- ngay -->
                    <?php include_once "tourDetail_ngay.php" ?>
                    <!-- ngay -->
                    <!-- luu y -->
                    <?php include_once "tourDetail_luuY.php" ?>
                    <!-- luu y -->

                </div>

            </div>
        </div>
        <div class="col-lg-4 m-15px-tb blog-aside mgt-15px">
            <!-- thông tin tour -->
            <?php include_once "tourDetail_infor.php" ?>

            <!-- thông tin tour -->

            <!-- tour liên quan -->
            <?php include_once "tourDetail_lienquan.php" ?>
            <!-- End tour liên quan -->
        </div>
    </div>
</div>