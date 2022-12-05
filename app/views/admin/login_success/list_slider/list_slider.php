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
            <h2>DANH SÁCH ẢNH SLIDER</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Mã Tour</th>
                    <th>Ảnh</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($slider as $sl) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $sl['id'] ?></td>
                        <td><?= $sl['url'] ?></td>
                        <td>
                            <img src="./public/images/<?= $sl['anh'] ?>" width="123" alt="">
                        </td>

                        <td>
                            <div class="click-action">
                                <a href="edit_slider&id=<?= $sl['id'] ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_slider&id=<?= $sl['id'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="add_anh_slider" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>