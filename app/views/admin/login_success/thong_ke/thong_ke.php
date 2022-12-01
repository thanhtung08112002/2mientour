<article>
    <div class="headline">
        <h2>Thống kê miền</h2>
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
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


    <div class="headline" style="margin-top: 60px;">
        <h2>Thống kê theo thanh toán tour</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>ID Thanh Toán</th>
                <th>Mã Tour</th>
                <th>Mã Thành Phố</th>
                <th>Tên Thành Phố</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($thong_ke_theo_thanh_toan_tour as $tktttt) : ?>
                <?php extract($tktttt) ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $id_thanh_toan ?></td>
                    <td><?= $ma_tour ?></td>
                    <td><?= $ma_thanh_pho ?></td>
                    <td><?= $ten_thanh_pho ?></td>
                    <td> <a href="thong_ke_theo_mien_chi_tiet?id=<?= $id_thanh_toan ?>" class="link-action btn-danger">Chi Tiết</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>