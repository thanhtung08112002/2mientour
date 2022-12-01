<table border="1">
    <thead>
        <th>STT</th>
        <th>ID thanh toán</th>
        <th>Mã tour</th>
        <th>Ngày khởi hành</th>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Người lớn</th>
        <th>Trẻ em</th>
        <th>Tổng tiền</th>
        <th>Phương thức thanh toán</th>
    </thead>
    <tbody>
        <?php $i = 1;?>
        <?php foreach($thanhToanTourFull as $item):?>
            <?php extract($item)?>
        <tr>
            <td><?= $i++?></td>
            <td><?= $id_thanh_toan?></td>
            <td><?= $ma_tour?></td>
            <td><?= date_handler($ngay_khoi_hanh)?></td>
            <td><?= $ho_ten?></td>
            <td><?= $sdt?></td>
            <td><?= $email?></td>
            <td><?= $dia_chi?></td>
            <td><?= $nguoi_lon?></td>
            <td><?= $tre_em?></td>
            <td><?= currency_format($thanh_tien)?></td>
            <td><?= $ten_phuong_thuc?></td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>