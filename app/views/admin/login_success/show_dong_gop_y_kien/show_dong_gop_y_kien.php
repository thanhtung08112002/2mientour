<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH ĐÓNG GÓP Ý KIẾN</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Nội dung</th>
                    <th>Thời gian góp ý</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllDongGop as $item) : ?>
                    <?php extract($item)?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ho_ten?></td>
                        <td><?= $sdt?></td>
                        <td><?= $email?></td>
                        <td><?= $noi_dung?></td>
                        <td><?= date_handler($thoi_gian_gop_y)?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>