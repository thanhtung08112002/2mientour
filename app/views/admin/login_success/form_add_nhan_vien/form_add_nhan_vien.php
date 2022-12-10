<!-- thuộc mục quản lý tour du lịch -->
<!-- form thêm tour  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm quản lý miền</h2>
        </div>
        <form action="<?= ROOT ?>admin_list_employee/add/check" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">

                    <div class="form-group">
                        <label for="">Miền</label>
                        <select name="mien" id="" required>
                            <option value="">Vui lòng chọn miền</option>
                            <?php foreach ($getAllMien as $item) : ?>
                                <?php extract($item) ?>
                                <option value="<?= $ma_mien ?>"><?= $ten_mien ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ho_ten">Họ và tên</label>
                        <input type="text" class="form-control" name="ho_ten" id="ho_ten" required>
                    </div>
                    <div class="form-group">
                        <label for="sdt">Số điện thoại</label>
                        <input type="text" class="form-control" name="sdt" id="sdt" required>
                    </div>
                    <div class="form-group">
                        <label for="que_quan">Quê quán</label>
                        <input class="form-control" type="text" name="que_quan" id="que_quan" required>
                    </div>
                    <div class="form-group">
                        <label for="anh_dai_dien">Ảnh đại diện</label>
                        <input type="file" name="anh_dai_dien" id="anh_dai_dien" required>
                        <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                    </div>
                    <div class="form-group">
                        <label for="chuc_vu">Chức vụ</label>
                        <select name="chuc_vu" id="" required>
                            <option value="">Vui lòng chọn chức vụ</option>
                            <?php foreach ($getChucVu as $item) : ?>
                                <?php extract($item) ?>
                                <option value="<?= $ma_chuc_vu ?>"><?= $ten_chuc_vu ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ngay_thang_nam_sinh">Ngày tháng năm sinh</label>
                        <input  type="date" name="ngay_thang_nam_sinh" id="ngay_thang_nam_sinh" required>
                    </div>
                </div>

            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert_employee">Thêm</button>
            <button class="btn"><a href="<?= ROOT ?>admin_list_employee">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>