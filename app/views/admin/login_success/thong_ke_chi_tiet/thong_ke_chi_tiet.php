<article>
    <div class="headline">
        <h2>Danh Sách tour chi tiết</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã thành phố</th>
                <th>Tên tour</th>
                <th>Tên miền</th>
                <th>Họ và Tên</th>
        
                <!-- <th>Chức năng</th> -->
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($danh_sach_thong_ke_tour_chi_tiet as $dstktct) : ?>
                <?php extract($dstktct) ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ma_thanh_pho ?></td>
                    <td><?= $ten_mien ?></td>
                    <td><?= $ten_tour ?></td>
                    <td><?= $ho_ten ?></td>
    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</article>