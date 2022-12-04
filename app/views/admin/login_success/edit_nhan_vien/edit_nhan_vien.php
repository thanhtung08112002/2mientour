<article>
    <div class="horizontal-menu">
        <div class="user">
            <p class="user-name">Mot Hai Ba</p>
            <img src="images.jfif" alt="">
        </div>
    </div>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Sửa nhân viên</h2>
        </div>
        <form action="save_edit_nhan_vien&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mã quản lý miền</label>
                        <input class="form-control" type="text" name="ma_quan_ly_mien" readonly placeholder="Auto number" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Loại mã miền</label>
                        <select class="form-control" name="ma_mien" id="">
                            <option value="0">Chọn loại mã miền</option>
                            <?php foreach ($du_lich_trong_nuoc as $dltn) : ?>
                                <option value="<?= $dltn['ma_mien'] ?>">
                                    <?= $dltn['ten_mien'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên quản lý miền</label>
                        <input class="form-control" type="text" name="ten_quan_ly_mien" placeholder="Tên quản lý miền">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input class="form-control" type="number" name="sdt" min="0" value="0">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Quê quán</label>
                        <input class="form-control" type="text" name="que_quan">
                    </div>
                    <div class="form-group">
                        <label for="">Hình</label>
                        <input type="file" name="anh_dai_dien" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Loại chức vụ</label>
                        <select class="form-control" name="ma_chuc_vu" id="">
                            <option value="0">Chọn loại chức vụ</option>
                            <?php foreach ($chuc_vu as $cv) : ?>
                                <option value="<?= $cv['ma_chuc_vu'] ?>">
                                    <?= $cv['ten_chuc_vu'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày tháng năm sinh</label>
                        <input class="form-control" type="date" name="ngay_thang_nam_sinh" placeholder="Theo phần trăm">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Sửa</button>
            <button class="btn"><a href="list_nhan_vien">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->


</article>