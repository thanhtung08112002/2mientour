<!-- thuộc mục quản lý tour du lịch -->
<!-- form thêm tour  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm tour du lịch</h2>
        </div>
        <form action="<?= ROOT ?>quan_ly_tour/add-tour/check" method="POST" enctype="multipart/form-data">
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
                        <label for="ma_thanh_pho">Mã thành phố</label>
                        <input type="text" class="form-control" name="ma_thanh_pho" id="ma_thanh_pho" placeholder="Ví dụ: HL" required>
                        <p class="error_ma" style="color: red;"><?= isset($_COOKIE['ma_error']) ? $_COOKIE['ma_error'] : "" ?></p>
                    </div>
                    <div class="form-group">
                        <label for="ten_thanh_pho">Thành phố</label>
                        <input type="text" class="form-control" name="ten_thanh_pho" id="ten_thanh_pho" placeholder="Ví dụ: Hạ Long" required>
                    </div>
                    <div class="form-group">
                        <label for="ma_tour">Mã tour</label>
                        <input class="form-control" type="text" name="ma_tour" id="ma_tour" placeholder="Ví dụ: T_HN01" required>
                        <p class="error_ma" style="color: red;"><?= isset($_COOKIE['ma_error']) ? $_COOKIE['ma_error'] : "" ?></p>
                    </div>
                    <div class="form-group">
                        <label for="ten_tour">Tên tour</label>
                        <input class="form-control" type="text" name="ten_tour" id="ten_tour" placeholder="Ví dụ: Vịnh Hạ Long" required>
                    </div>
                    <div class="form-group">
                        <label for="phuong_tien">Phương tiện</label>
                        <input class="form-control" type="text" name="phuong_tien" id="phuong_tien" placeholder="Ví dụ: ô tô" required>
                    </div>
                    <div class="form-group">
                        <label for="">Địa điểm khởi hành</label>
                        <select name="dia_diem_khoi_hanh" id="" required>
                            <option value="">Vui lòng chọn nơi khởi hành</option>
                            <?php foreach ($getDiaiemKhoiHanh as $item) : ?>
                                <?php extract($item) ?>
                                <option value="<?= $ma_dia_diem_khoi_hanh ?>"><?= $ten_dia_diem_khoi_hanh ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thoi_gian_di">Thời gian đi</label>
                        <input class="form-control" type="text" name="thoi_gian_di" id="thoi_gian_di" placeholder="Ví dụ: 3 ngày 2 đêm" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh đại diện tour</label>
                        <input type="file" name="anh_dai_dien_tour" id="">
                        <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                    </div>
                    <div class="form-group">
                        <label for="gia_tien">Giá tiền</label>
                        <input class="form-control" type="number" min='1' name="gia_tien" id="gia_tien" placeholder="Ví dụ: 2000000" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tour hot</label>
                        <select name="loai_tour" id="" required>
                            <option value="">Vui lòng chọn loại tour</option>
                            <?php foreach ($getLoaiTour as $item) : ?>
                                <?php extract($item) ?>
                                <option value="<?= $ma_so_hot ?>"><?= $loai_tour ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày khởi hành</label>
                        <input type="date" name="ngay_khoi_hanh" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Số chỗ</label>
                        <input type="number" min='1' max="20" name="so_cho" id="">
                    </div>
                </div>

            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
            <button class="btn"><a href="<?= ROOT ?>quan_ly_tour">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>