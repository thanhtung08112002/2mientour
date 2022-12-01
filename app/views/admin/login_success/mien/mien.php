<table border="1">
    <thead>
        <th>STT</th>
        <th>Mã miền</th>
        <th>Tên miền</th>
        <th>Mô tả</th>
        <th>Xem thêm</th>
    </thead>
    <tbody>
        <?php $i = 1;?>
        <?php foreach($getAllMien as $item):?>
            <?php extract($item)?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $ma_mien?></td>
            <td><?= $ten_mien?></td>
            <td><?= $mo_ta?></td>
            <td><a href="<?=ROOT?>admin_page/thanhpho?mamien=<?=$ma_mien?>">Chi tiết</a></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>