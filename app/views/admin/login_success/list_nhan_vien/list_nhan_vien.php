<article>
    <div class="headline">
        <h2>DANH SÁCH NHÂN VIÊN</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
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
            <?php foreach ($ban_quan_ly as $bql) : ?>
                <tr>
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
                        <a href="edit_nhan_vien&id=<?= $bql['ma_quan_ly_mien'] ?>" class="link-action btn-default" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a> |
                        <a href="delete_nhan_vien&id=<?= $bql['ma_quan_ly_mien'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <button class="btn" type="submit" name="btn_insert"><a href="add_nhan_vien">Thêm</a></button>
</article>