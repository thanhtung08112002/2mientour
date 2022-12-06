                    <div class="schedule-icon">
                        <?php foreach ($informationTour as $item) : ?>
                            <?php extract($item) ?>
                            <p>
                                <i class="fa fa-plane"></i>
                                <span class="schedule-title">Phương tiện:</span>
                                <strong class="schedule-time"><?= $phuong_tien ?></strong>
                            </p>
                            <p>
                                <i class="fa fa-clock-o"></i>
                                <span class="schedule-title">Thời gian:</span> <strong class="schedule-time"><?= $thoi_gian_di ?></strong>
                            </p>
                            <p>
                                <i class="fa fa-flag"></i>
                                <span class="schedule-title">Ngày khởi hành: </span>
                                <ins class="schedule-time"><?= date_handler($ngay_khoi_hanh) ?></ins>
                            </p>
                        <?php endforeach ?>
                    </div>
                    <?php foreach ($tourDetail as $item) : ?>
                        <?php extract($item) ?>
                        <div class="schedule-step">
                            <div class="schedule-step-content">
                                <p class="schedule-step-heading">Ngày <?= $ngay ?></p>
                                <div class="schedule-step-icon">
                                    <p class="schedule-step-word">THU GỌN</p>
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);" height="24px" width="24px" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="schedule-step-seemore">
                               <p> <?= $noi_dung_ngay ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>

                    