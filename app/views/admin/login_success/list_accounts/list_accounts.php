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
            <h2>DANH SÁCH ACCOUNTS</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Accounts</th>
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
                            <div class="click-action">
                                <a href="edit_account&id=<?= $acs['id_account'] ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_tai_khoan&id=<?= $acs['id_account'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn" type="submit" name="btn_insert"><a href="add_account" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>