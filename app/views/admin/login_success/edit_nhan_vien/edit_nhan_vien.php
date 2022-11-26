<article>
    <div class="headline">
        <h2>Sửa nhân viên</h2>
    </div>
    <form action="save_edit_nhan_vien&id=<?= $_GET['id']?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã quản lý miền</label>
                    <input class="form-control" type="text" name="ma_quan_ly_mien" readonly placeholder="Auto number" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Mã miền</label>
                    <input class="form-control" type="text" name="ma_mien" disabled placeholder="Mã miền">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tên quản lý miền</label>
                    <input class="form-control" type="text" name="ten_quan_ly_mien"  placeholder="Tên quản lý miền">
                </div>
            </div>
            <div class="col">
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
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Hình</label>
                    <input type="file" name="anh_dai_dien" placeholder="">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Loại chức vụ</label>
                    <select class="form-control" name="ma_chuc_vu" id="">
                        <option value="0">Chọn loại hàng</option>
                        <?php foreach ($chuc_vu as $cv) : ?>
                            <option value="<?= $cv['ma_chuc_vu'] ?>">
                                <?= $cv['ten_chuc_vu'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Ngày tháng năm sinh</label>
                    <input class="form-control" type="date" name="ngay_thang_nam_sinh" placeholder="Theo phần trăm">
                </div>
            </div>
        </div>
        <button class="btn" type="submit" name="btn_insert">Sửa</button>
        <button class="btn"><a href="danh_sach_nhan_vien">Danh sách</a></button>
    </form>
</article>