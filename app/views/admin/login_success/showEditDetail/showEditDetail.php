<!-- thuộc mục quản lý tour du lịch -->
<!-- cho phép Sửa sửa xóa khởi hành, lịch trình và ảnh -->
<article>

    <!-- bảng -->
    <?php $ma_tour =  $_GET['ma-tour'] ?>
    <?php if ($thu_muc == 'khoihanh') { ?>
        <div class="board">
            <div class="headline">
                <h2>Sửa ngày khởi hành</h2>
            </div>
            <?php foreach ($getKhoaTourLite as $item) : ?>
                <?php extract($item) ?>
                <form action="<?= ROOT ?>quan_ly_tour/save-edit-khoi-hanh" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Mã tour</label>
                                <input type="text" name="ma_tour" id="" value="<?= $ma_tour ?>" disabled>
                                <input type="text" name="ma_tour" id="" value="<?= $ma_tour ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Id ngày tour</label>
                                <input type="text" name="id_tour_lite" id="" value="<?= $id_tour_lite ?>" disabled>
                                <input type="text" name="id_tour_lite" id="" value="<?= $id_tour_lite ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ngay_khoi_hanh">Ngày khởi hành</label>
                                <input type="date" name="ngay_khoi_hanh" id="ngay_khoi_hanh" required><br>
                                ngày hiện tại
                                <p><?= date_handler($ngay_khoi_hanh) ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="so_cho">Số chỗ</label>
                                <input type="number" name="so_cho" id="so_cho" min="1" value="<?= $so_cho ?>" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btn_edit_detail">Sửa</button>
                    <button class="btn"><a href="<?= ROOT ?>quan_ly_tour/detail-tour/?ma-tour=<?= $ma_tour ?>">Danh sách</a></button>
                </form>
            <?php endforeach ?>
        </div>
    <?php } else if ($thu_muc == 'lichtrinh') { ?>
        <div class="board">
            <div class="headline">
                <h2>Sửa lịch trình</h2>
            </div>
            <?php foreach ($getChiTietTourLiteId as $item) : ?>
                <?php extract($item) ?>
                <form action="<?= ROOT ?>quan_ly_tour/save-edit-lich-trinh" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Mã tour</label>
                                <input type="text" name="ma_tour" id="" value="<?= $ma_tour ?>" disabled>
                                <input type="text" name="ma_tour" id="" value="<?= $ma_tour ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="id">Id ngay</label>
                                <input type="text" name="id" id="id" value="<?= $id ?>" disabled>
                                <input type="text" name="id" id="id" value="<?= $id ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ngay">Ngày</label>
                                <input type="number" name="ngay" id="ngay" value="<?= $ngay ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="noi_dung">Nội dung</label>
                                <textarea name="noi_dung" id="noi_dung" cols="30" rows="10" required>
                                <?= $noi_dung_ngay ?>
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btn_edit_detail">Sửa</button>
                    <button class="btn"><a href="<?= ROOT ?>quan_ly_tour/detail-tour/?ma-tour=<?= $ma_tour ?>">Danh sách</a></button>
                </form>
            <?php endforeach ?>
        </div>
    <?php } else { ?>
        <div class="board">
            <div class="headline">
                <h2>Sửa ảnh tour</h2>
            </div>
            <?php foreach ($getAnhId as $item) : ?>
                <?php extract($item) ?>
                <form action="<?= ROOT ?>quan_ly_tour/save-edit-anh" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Mã tour</label>
                                <input type="text" name="ma_tour" id="" value="<?= $ma_tour ?>" disabled>
                                <input type="text" name="ma_tour" id="" value="<?= $ma_tour ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="id">Id ảnh tour</label>
                                <input type="text" name="id" id="id" value="<?= $id ?>" disabled>
                                <input type="text" name="id" id="id" value="<?= $id ?>" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="anh_tour">Ảnh</label>
                                <input type="file" name="anh_tour" id="" required>
                                ảnh hiện tại
                                <img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh ?>" alt="" width="400rem" height="400rem">
                                <input type="text" name="anh_hien_tai" value="<?= $anh ?>" style="display: none;">
                            </div>
                            <h3 class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></h3>
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit" name="btn_edit_detail">Sửa</button>
                    <button class="btn"><a href="<?= ROOT ?>quan_ly_tour/detail-tour/?ma-tour=<?= $ma_tour ?>">Danh sách</a></button>
                </form>
            <?php endforeach ?>
        </div>
    <?php }
    ?>

    <!-- end bảng -->
</article>