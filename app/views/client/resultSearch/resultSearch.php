<?php include_once "resultSearch_banner.php" ?>
<section>
    <div class="container">
        <div class="tour-catalog">
            <div class="row">
                <div class="col-sm-4">
                    <?php include_once "resultSearch_searchTour.php" ?>
                </div>
                <?php if ($resultSearch == []) {
                    echo "<h2 style='font-weight: 700; '>Chuyến đi bạn tìm kiếm hiện tại không có</h2>";
                } else { ?>
                    <div class=" col-sm-8">
                        <?php include_once "resultSearch_resultTour.php" ?>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>