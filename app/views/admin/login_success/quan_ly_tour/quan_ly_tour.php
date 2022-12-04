<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH TOUR</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên miền</td>
                    <td>MÃ thành phố</td>
                    <td>Tên thành phố</td>
                    <td>MÃ Tour</td>
                    <td>Tên Tour</td>
                    <td>Phương tiện</td>
                    <td>Địa điểm khởi hành</td>
                    <td>Thời gian đi</td>
                    <td>Ảnh đại diện tour</td>
                    <td>Loại tour</td>
                    <td>Giá tiền</td>
                    <td>Chức năng</td>
                    <td>Xem thêm</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllTour as $ttt) : ?>
                    <?php extract($ttt) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ten_mien ?></td>
                        <td><?= $ma_thanh_pho ?></td>

                        <td><?= $ten_thanh_pho ?></td>
                        <td><?= $ma_tour ?></td>

                        <td><?= $ten_tour ?></td>
                        <td><?= $phuong_tien ?></td>
                        <td><?= $ten_dia_diem_khoi_hanh ?></td>
                        <td><?= $thoi_gian_di ?></td>
                        <td><img src="<?= ROOT ?>public/images/imgs_tour/<?= $anh_dai_dien_tour ?>" alt=""></td>
                        <td><?= $loai_tour ?></td>
                        <td><?= currency_format($gia_tien) ?></td>
                        <td>
                            <div class="click-action">
                                <a href="<?= ROOT ?>quan_ly_tour/edit/?ma-tour=<?= $ma_tour ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="<?= ROOT ?>quan_ly_tour/delete-tour/?ma-tour=<?= $ma_tour ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                        <td><a href="<?= ROOT ?>quan_ly_tour/detail-tour/?ma-tour=<?= $ma_tour?>">Chi tiết</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <a href="<?= ROOT ?>quan_ly_tour/add-tour" class=" btn link-action btn-primary">Thêm tour</a>
        </table>
    </div>

    <!-- end bảng -->
</article>