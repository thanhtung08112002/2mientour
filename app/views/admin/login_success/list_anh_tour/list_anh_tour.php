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
            <h2>DANH SÁCH ẢNH TOUR</h2>
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
                <?php foreach ($anh_tour as $at) : ?>
                    <tr>
                        <td><?= $i++ ?></td>

                        <td><?= $at['id'] ?></td>
                        <td><?= $at['ma_tour'] ?></td>
                        <td>
                            <img src="./public/images/imgs_tour/<?= $at['anh'] ?>" width="123" alt="">
                        </td>

                        <td>
                            <div class="click-action">
                                <a href="edit_anh&id=<?= $at['id'] ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_anh&id=<?= $at['id'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="add_anh_tour" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>