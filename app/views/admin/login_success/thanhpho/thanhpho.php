<table border="1">
    <thead>
        <th>STT</th>
        <th>Mã thành phố</th>
        <th>Tên thành phố</th>
        <th>tên tour du lịch</th>
        <th>Phương tiện</th>
        <th>Thời gian đi</th>
        <th>Phí</th>
        <th>Xem thêm</th>

    </thead>
    <tbody>
        <?php $i = 1;?>
        <?php foreach($filterTourWithMaMien as $item):?>
            <?php extract($item)?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $ma_thanh_pho?></td>
            <td><?= $ten_thanh_pho?></td>
            <td><?= $ten_tour?></td>
            <td><?= $phuong_tien?></td>
            <td><?= $thoi_gian_di?></td>
            <td><?= currency_format($gia_tien)?></td>
            <td><a href="<?=ROOT?>admin_page/thanhpho?matour=<?=$ma_tour?>">Chi tiết</a></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>