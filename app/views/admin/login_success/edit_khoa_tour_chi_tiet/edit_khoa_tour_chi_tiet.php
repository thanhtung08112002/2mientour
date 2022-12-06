<!-- thuộc mục quản lý danh sách tour -->
<!-- sửa khóa tour chi tiết theo mã tour -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Sửa tour du lịch</h2>
        </div>
        <?php foreach ($getTourWithMaTour as $item) : ?>
            <?php extract($item) ?>
            <form action="<?= ROOT ?>quan_ly_tour/edit-tour/check/?ma-tour=<?= $ma_tour?>" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="ma_thanh_pho">Mã thành phố</label>
                            <input type="text" class="form-control" name="ma_thanh_pho" id="ma_thanh_pho" placeholder="<?= $ma_thanh_pho ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="ma_tour">Mã tour</label>
                            <input class="form-control" type="text" name="ma_tour" id="ma_tour" value="<?= $ma_tour ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="ten_tour">Tên tour</label>
                            <input class="form-control" type="text" name="ten_tour" id="ten_tour" value="<?= $ten_tour ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phuong_tien">Phương tiện</label>
                            <input class="form-control" type="text" name="phuong_tien" id="phuong_tien" value="<?= $phuong_tien ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Địa điểm khởi hành</label>
                            <select name="dia_diem_khoi_hanh" id="" required>
                                <option value="<?= $ma_dia_diem_khoi_hanh ?>"><?= $ten_dia_diem_khoi_hanh ?></option>
                                <?php foreach ($getDiaiemKhoiHanh as $itemdd) : ?>
                                    <?php extract($itemdd) ?>
                                    <?php if ($item['ma_dia_diem_khoi_hanh'] != $itemdd['ma_dia_diem_khoi_hanh']) { ?>
                                        <option value="<?= $ma_dia_diem_khoi_hanh ?>"><?= $ten_dia_diem_khoi_hanh ?></option>
                                    <?php } ?>

                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="thoi_gian_di">Thời gian đi</label>
                            <input class="form-control" type="text" name="thoi_gian_di" id="thoi_gian_di" value="<?= $thoi_gian_di ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh đại diện tour</label>
                            <input type="file" name="anh_dai_dien_tour" id="" required>
                            <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                            ảnh ban đầu
                            <img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" alt="" width="200rem" height="200rem">
                            <input type="text" name="anh_ban_dau" value="<?= $anh_dai_dien_tour?>" style="display: none;">
                        </div>
                        <div class="form-group">
                            <label for="gia_tien">Giá tiền</label>
                            <input class="form-control" type="number" min='1' name="gia_tien" id="gia_tien" value="<?= $gia_tien ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tour hot</label>
                            <select name="loai_tour" id="" required>
                                <option value="<?= $ma_so_hot ?>"><?= $loai_tour ?></option>
                                <?php foreach ($getLoaiTour as $itemth) : ?>
                                    <?php extract($itemth) ?>
                                    <?php if ($item['ma_so_hot'] != $itemth['ma_so_hot']) { ?>
                                        <option value="<?= $ma_so_hot ?>"><?= $loai_tour ?></option>
                                    <?php } ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
            <button class="btn btn-primary" type="submit" name="btn_edit_tour">Sửa</button>
            <button class="btn"><a href="<?= ROOT ?>quan_ly_tour">Danh sách</a></button>
            </form>
    </div>
    <!-- end bảng -->
</article>