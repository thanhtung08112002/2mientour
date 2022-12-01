<table border="1">
  <thead>
    <th>STT</th>
    <th>ID thanh toán</th>
    <th>Họ tên</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Email</th>
    <th>Tên tour đã đặt</th>
    <th>Ngày khởi hành</th>
    <th>Số lượng người đi</th>
    <th>Thành tiền</th>
    <th>Hình thức thành toán</th>
  </thead>
  <tbody>
    
      <?php $i = 1?>
      <?php
      foreach ($getAllThanhToanTour as $item) : ?>
      <tr>
        <?php extract($item) ?>
        <td><?= $i++?></td>
        <td><?= $id_thanh_toan?></td>
        <td><?= $ho_ten?></td>
        <td><?= $dia_chi?></td>
        <td><?= $sdt?></td>
        <td><?= $email?></td>
        <td><?= $ten_tour?></td>
        <td><?= date_handler($ngay_khoi_hanh)?></td>
        <td><?= $so_luong?></td>
        <td><?= currency_format($thanh_tien)?></td>
        <td><?= $ten_phuong_thuc?></td>

        </tr>

      <?php
      endforeach
      ?>
      
  </tbody>
</table>