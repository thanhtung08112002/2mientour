<article>
    <div class="headline">
        <h2>Danh Sách tour chi tiết</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên miền</th>
                <th>Số lượng tour du lịch theo thành phố</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($danh_sach_tour_with_id as $dstct) : ?>
                <?php extract($dstct) ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ma_thanh_pho ?></td>
                    <td><?= $ten_tour ?></td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>