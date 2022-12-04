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
            <h2>DANH SÁCH CHỨC VỤ</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã chức vụ</th>
                    <th>Tên chức vụ</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($chuc_vu as $cv) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $cv['ma_chuc_vu'] ?></td>
                        <td><?= $cv['ten_chuc_vu'] ?></td>
                        <td>
                            <div class="click-action">
                                <a href="edit_chuc_vu&id=<?= $cv['ma_chuc_vu'] ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_chuc_vu&id=<?= $cv['ma_chuc_vu'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="add_chuc_vu" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>