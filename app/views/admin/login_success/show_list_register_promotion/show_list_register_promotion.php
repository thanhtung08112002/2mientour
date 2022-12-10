<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH ĐĂNG KÝ NHẬN ƯU ĐÃI</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Thời gian đăng ký</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getInforRegister as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id ?></td>
                        <td><?= $email ?></td>
                        <td><?= $thoi_gian_dang_ky ?></td>
                        <td>
                            <a href="<?= ROOT?>admin_list_register_promotion/delete/?id=<?= $id?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>