<article>
    <div class="headline">
        <h2>DANH SÁCH TÀI KHOẢN</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tài khoản</th>
                <th>Mật khẩu</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $acs) : ?>
                <tr>
                    <td><?= $acs['id_account'] ?></td>
                    <td><?= $acs['tai_khoan'] ?></td>
                    <td><?= $acs['mat_khau'] ?></td>
                    <td>
                        <a href="edit_account&id=<?= $acs['id_account'] ?>" class="link-action btn-default" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a> |
                        <a href="delete_tai_khoan&id=<?= $acs['id_account'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <button class="btn" type="submit" name="btn_insert"><a href="add_nhan_vien">Thêm</a></button>
</article>