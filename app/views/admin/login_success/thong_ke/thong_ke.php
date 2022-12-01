<article>
    <div class="headline">
        <h2>Thống kê</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên thành phố</th>
                <th>số lượng</th>
                <th>giá cao nhất</th>
                <th>giá thấp nhất</th>
                <th>giá trung bình</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($thong_ke_theo_ma_mien as $tktmm) : ?>
                <?php extract($tktmm) ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $tenthanhpho ?></td>
                    <td><?= $soluong ?></td>
                    <td><?= $giacaonhat ?></td>
                    <td><?= $giathapnhat ?></td>
                    <td><?= $giatrungbinh ?></td>
                    <td>
                        <a href="edit_thanh_toan?id=<?= $id_thanh_toan ?>" class="link-action btn-default" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a> |
                        <a href="delete_thanh_toan?id=<?= $id_thanh_toan ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>