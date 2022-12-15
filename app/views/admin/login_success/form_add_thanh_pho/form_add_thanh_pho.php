<!-- thuộc mục quản lý tour du lịch -->
<!-- form thêm tour  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm thành phố</h2>
        </div>
        <form action="<?= ROOT ?>quan_ly_thanh_pho/add/check" method="POST" enctype="multipart/form-data">
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
                        <label for="ma_thanh_pho">Mã Thành phố</label>
                        <input type="text" class="form-control" name="ma_thanh_pho" id="ma_thanh_pho" required>
                        <p class="error_ma_thanh_pho" style="color: red;"><?= isset($_COOKIE['ma_thanh_pho_error']) ? $_COOKIE['ma_thanh_pho_error'] : "" ?></p>
                    </div>
                    <div class="form-group">
                        <label for="ten_thanh_pho">Tên thành phố</label>
                        <input type="text" class="form-control" name="ten_thanh_pho" id="ten_thanh_pho" required>
                    </div>
               
                </div>

            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert_city">Thêm</button>
            <button class="btn"><a href="<?= ROOT ?>quan_ly_thanh_pho">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>