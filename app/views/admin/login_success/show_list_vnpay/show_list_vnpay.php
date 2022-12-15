<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH THANH TOÁN VNPAY</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Mã giao dịch</td>
                    <td>Số hóa đơn</td>
                    <td>Số tiền</td>
                    <td>Ngân hàng</td>
                    <td>Nội dung thanh toán tour</td>
                    <td>Trạng thái</td>
                    <td>Trả góp</td>
                    <td>Ngày tạo</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllVNPay as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ma_gd ?></td>
                        <td><?= $so_hoa_don ?></td>
                        <td><?= currency_format($so_tien)?></td>
                        <td><?= $ngan_hang ?></td>
                        <td><?= $noi_dung_thanh_toan ?></td>
                        <td><?= $trang_thai ?></td>
                        <td><?= $tra_gop ?></td>
                        <td><?= $ngay_tao ?></td>
                        <td>
                            <div>
                                <a href="<?= ROOT?>admin_list_receipt_customer_vnpay/delete/?magiaodich=<?=$ma_gd?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>