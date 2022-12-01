<table border="1">
    <thead>
        <th>STT</th>
        <th>Mã tour</th>
        <th>Tên tour</th>
        <th>Ngày khởi hành</th>

    </thead>
    <tbody>
        <?php $i = 1;?>
        <?php foreach($filterTourDetail as $item):?>
            <?php extract($item)?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $ma_tour?></td>
            <td><?= $ten_tour?></td>
            <td><?= $ngay_khoi_hanh?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>