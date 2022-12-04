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
            <h2>DANH SÁCH THANH TOÁN TOUR</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>ID Thanh Toán</td>
                    <td>Mã Tour</td>
                    <td>Tên thành phố</td>
                    <td>Họ Tên</td>
                    <td>Số Điện Thoại</td>
                    <td>Email</td>
                    <td>Địa Chỉ</td>
                    <td>ID Mã Giảm Giá</td>
                    <td>Phương Thức Thanh Toán</td>
                    <td>Số Lượng</td>
                    <td>Thành Tiền</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($thanh_toan_tour as $ttt) : ?>
                    <?php extract($ttt) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id_thanh_toan ?></td>
                        <td><?= $ten_tour ?></td>
                        <td><?= $ho_ten ?></td>
                        <td><?= $sdt ?></td>
                        <td><?= $email ?></td>
                        <td><?= $dia_chi ?></td>
                        <td><?= $nguoi_lon ?></td>
                        <td><?= $tre_em ?></td>
                        <td><?= $ten_phuong_thuc ?></td>
                        <td><?= $thanh_tien ?></td>
                        <td>
                            <div class="click-action">
                                <a href="edit_thanh_toan?id=<?= $id_thanh_toan ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_thanh_toan?id=<?= $id_thanh_toan ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn" type="submit" name="btn_insert"><a href="#" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>