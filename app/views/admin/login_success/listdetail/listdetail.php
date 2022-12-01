<table border="1">
    <thead>
        <th>STT</th>
        <th>Mã tour</th>
        <th>Tên tour</th>
        <th>Xem thêm</th>
    </thead>
    <tbody>
        <?php $i = 1;?>
        <?php foreach($filterTourOfMien as $item):?>
            <?php extract($item)?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $ma_tour?></td>
            <td><?= $ten_tour?></td>
            <td><a href="<?=ROOT?>admin_page/listdetail?matour=<?=$ma_tour?>">Chi tiết</a></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>