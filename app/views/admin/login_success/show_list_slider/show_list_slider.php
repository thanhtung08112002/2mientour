<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH SLIDER</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Url</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllSlider as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id ?></td>
                        <td><?= $anh ?></td>
                        <td><?= $url ?></td>
                        <td>
                            <a href="<?= ROOT?>admin_list_slider/edit_slider/?id=<?= $id?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            <a href="<?= ROOT?>admin_list_slider/delete_slider/?id=<?= $id?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="<?= ROOT?>admin_list_slider/add_slider" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>