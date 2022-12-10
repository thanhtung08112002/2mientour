<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH MÃ ƯU ĐÃI</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Loại mã ưu đãi</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllPromotion as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id_giam_gia ?></td>
                        <td><?= $code ?></td>
                        <td><?= $loai_ma_giam_gia ?></td>
                        <td>
                            <a href="" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            <a href="" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="add_nhan_vien" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>