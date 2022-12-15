<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Quản lý thành phố</h2>
        </div>
        <a href="<?= ROOT?>quan_ly_thanh_pho/add" class=" btn btn-primary">Thêm thành phố</a>
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên miền</td>
                    <td>Mã thành phố</td>
                    <td>Tên thành phố</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllThanhPhoAndMien as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ten_mien ?></td>
                        <td><?= $ma_thanh_pho ?></td>
                        <td><?= $ten_thanh_pho ?></td>
                        <td>
                            <div>
                                <a href="<?= ROOT?>quan_ly_thanh_pho/delete/?ma-thanh-pho=<?=$ma_thanh_pho?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>