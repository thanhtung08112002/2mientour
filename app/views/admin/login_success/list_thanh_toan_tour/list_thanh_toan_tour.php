<article>
    <div class="headline">
        <h2>DANH SÁCH ThANH TOÁN TOUR</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>ID Thanh Toán</th>
                <th>Mã Tour</th>
                <th>Họ và tên</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Người lớn</th>
                <th>Trẻ em</th>
                <th>Phương thức thanh toán</th>
                <th>Thành tiền</th>
                <th>Chức năng</th>
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
                        <a href="edit_thanh_toan?id=<?= $id_thanh_toan ?>" class="link-action btn-default" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a> |
                        <a href="delete_thanh_toan?id=<?= $id_thanh_toan ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>