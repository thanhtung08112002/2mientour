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
            <h2>DANH SÁCH NHÂN VIÊN</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Mã Miền</th>
                    <th>Tên quản lý miền</th>
                    <th>SĐT</th>
                    <th>Quê quán</th>
                    <th>Ảnh đại diện</th>
                    <th>Chức vụ</th>
                    <th>Ngày tháng năm sinh</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($ban_quan_ly as $bql) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $bql['ma_quan_ly_mien'] ?></td>
                        <td><?= $bql['ma_mien'] ?></td>
                        <td><?= $bql['ten_quan_ly_mien'] ?></td>
                        <td><?= $bql['sdt'] ?></td>
                        <td><?= $bql['que_quan'] ?></td>
                        <td>
                            <img src="./public/images/<?= $bql['anh_dai_dien'] ?>" width="123" alt="">
                        </td>
                        <td><?= $bql['ten_chuc_vu'] ?></td>
                        <td><?= $bql['ngay_thang_nam_sinh'] ?></td>
                        <td>
                            <div class="click-action">
                                <a href="edit_nhan_vien&id=<?= $bql['ma_quan_ly_mien'] ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_nhan_vien&id=<?= $bql['ma_quan_ly_mien'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="add_nhan_vien" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>