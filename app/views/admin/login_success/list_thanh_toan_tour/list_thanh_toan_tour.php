<article>
    <div class="headline">
        <h2>DANH SÁCH ThANH TOÁN TOUR</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID Thanh Toán</th>
                <th>Mã Tour</th>
                <th>Họ và tên</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Id giảm giá</th>
                <th>Phương thức thanh toán</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thanh_toan_tour as $ttt) : ?>
                <tr>
                    <td><?= $ttt['id_thanh_toan'] ?></td>
                    <td><?= $ttt['ma_tour'] ?></td>
                    <td><?= $ttt['ho_ten'] ?></td>
                    <td><?= $ttt['sdt'] ?></td>
                    <td><?= $ttt['email'] ?></td>
                    <td><?= $ttt['dia_chi'] ?></td>
                    <td><?= $ttt['id_ma_giam_gia'] ?></td>
                    <td><?= $ttt['phuong_thuc_thanh_toan'] ?></td>
                    <td><?= $ttt['so_luong'] ?></td>
                    <td><?= $ttt['thanh_tien'] ?></td>
                    <td>
                        <a href="edit_thanh_toan&id=<?= $ttt['id_thanh_toan'] ?>" class="link-action btn-default" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a> |
                        <a href="delete_thanh_toan&id=<?= $ttt['id_thanh_toan'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>