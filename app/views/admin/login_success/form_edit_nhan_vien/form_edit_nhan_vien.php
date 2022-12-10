<!-- thuộc mục quản lý tour du lịch -->
<!-- form thêm tour  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm quản lý miền</h2>
        </div>
        <?php foreach ($getEmployeeWithId as $item) : ?>
            <?php extract($item) ?>
            <form action="<?= ROOT ?>admin_list_employee/edit/check" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                    <div class="form-group">
                            <label for="id_ma_quan_ly">Id mã quản lý</label>
                            <input type="text" class="form-control" name="id_ma_quan_ly" id="id_ma_quan_ly" value="<?= $ma_quan_ly_mien?>" disabled>
                            <input type="text" name="id_ma_quan_ly" value="<?= $ma_quan_ly_mien?>" id="" style="display: none;">
                        </div>
                        <div class="form-group">
                            <label for="">Miền</label>
                            <select name="mien" id="" required>
                                <option value="<?= $ma_mien ?>"><?= $ten_mien ?></option>
                                <?php foreach ($getAllMien as $itemMien) : ?>
                                    <?php if ($ma_mien != $itemMien['ma_mien']) { ?>
                                        <option value="<?= $itemMien['ma_mien'] ?>"><?= $itemMien['ten_mien'] ?></option>
                                    <?php } ?>

                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ho_ten">Họ và tên</label>
                            <input type="text" class="form-control" name="ho_ten" id="ho_ten" value="<?= $ten_quan_ly_mien?>" required>
                        </div>
                        <div class="form-group">
                            <label for="sdt">Số điện thoại</label>
                            <input type="text" class="form-control" name="sdt" id="sdt" value="<?= $sdt?>" required>
                        </div>
                        <div class="form-group">
                            <label for="que_quan">Quê quán</label>
                            <input class="form-control" type="text" name="que_quan" id="que_quan" value="<?= $que_quan?>" required>
                        </div>
                        <div class="form-group">
                            <label for="anh_dai_dien">Ảnh đại diện</label>
                            <input type="file" name="anh_dai_dien" id="anh_dai_dien" required>
                            <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                            ảnh đại diện hiện tại
                            <img src="<?= ROOT?>public/images/img_quan_ly/<?= $anh_dai_dien?>" alt="" width="200rem" height="200rem">
                            <input type="text" name="anh_cu" value="<?= $anh_dai_dien?>" style="display: none;">
                        </div>
                        <div class="form-group">
                            <label for="chuc_vu">Chức vụ</label>
                            <select name="chuc_vu" id="" required>
                                <option value="<?= $ma_chuc_vu?>"><?= $ten_chuc_vu ?></option>
                                <?php foreach ($getChucVu as $itemChuVu) : ?>
                                    <?php if ($ma_chuc_vu != $itemChuVu['ma_chuc_vu']) { ?>
                                        <option value="<?= $itemChuVu['ma_chuc_vu'] ?>"><?= $itemChuVu['ten_chuc_vu'] ?></option>
                                    <?php } ?>
                                    <?php endforeach?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ngay_thang_nam_sinh">Ngày tháng năm sinh</label>
                            <input type="date" name="ngay_thang_nam_sinh" id="ngay_thang_nam_sinh" required>
                            <br>
                            Ngày sinh hiện tại:
                            <strong><?= date_handler($ngay_thang_nam_sinh)?></strong>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="btn_edit_employee">Sửa</button>
                <button class="btn"><a href="<?= ROOT ?>admin_list_employee">Danh sách</a></button>
            </form>
        <?php endforeach ?>
    </div>
    <!-- end bảng -->
</article>