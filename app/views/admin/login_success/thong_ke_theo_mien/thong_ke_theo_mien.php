<article>
    <div class="headline">
        <h2>Thống kê theo miền</h2>
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
            <?php foreach ($thong_ke_theo_mien as $tktm) : ?>
                <?php extract($tktm) ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ten_mien ?></td>
                    <td><?= $soluong ?></td>
                    <td>
                        <a href="thong_ke_theo_mien_chi_tiet?ma_mien=<?= $ma_mien ?>" class="link-action btn-default">Chi tiết</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>