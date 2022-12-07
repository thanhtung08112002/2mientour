<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH THANH TOÁN TOUR</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID Thanh Toán</td>
                    <td>Tên Tour</td>
                    <td>Họ Tên</td>
                    <td>Số Điện Thoại</td>
                    <td>Email</td>
                    <td>Địa Chỉ</td>
                    <td>Người lớn</td>
                    <td>Trẻ em</td>
                    <td>Phương Thức Thanh Toán</td>
                    <td>Thành Tiền</td>
                    <td>Thời gian thanh toán</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllThanhToanTour as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id_thanh_toan ?></td>
                        <td><?= $ten_tour ?></td>
                        <td><?= $ho_ten ?></td>
                        <td><?= $sdt ?></td>
                        <td><?= $email ?></td>
                        <td><?= $dia_chi ?></td>
                        <td><?= $nguoi_lon ?></td>
                        <td><?= $tre_em ?></td>
                        <td><?= $ten_phuong_thuc ?></td>
                        <td><?= currency_format($thanh_tien)  ?></td>
                        <td> <?= $thoi_gian_thanh_toan ?></td>
                        <td>
                            <div class="click-action">
                                <a href="" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>