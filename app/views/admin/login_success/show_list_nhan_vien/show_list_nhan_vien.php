<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH NHÂN VIÊN</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Mã Miền</th>
                    <th>Tên quản lý miền</th>
                    <th>SĐT</th>
                    <th>Quê quán</th>
                    <th>Ảnh đại diện</th>
                    <th>Chức vụ</th>
                    <th>Ngày tháng năm sinh</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getAllNhanVien as $bql) : ?>
                    <?php extract($bql)?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ma_quan_ly_mien?></td>
                        <td><?= $ma_mien?></td>
                        <td><?= $ten_quan_ly_mien?></td>
                        <td><?= $sdt?></td>
                        <td><?= $que_quan?></td>
                        <td>
                            <img src="<?= ROOT?>public/images/<?= $anh_dai_dien?>" width="123" alt="">
                        </td>
                        <td><?= $ten_chuc_vu?></td>
                        <td><?= date_handler($ngay_thang_nam_sinh)?></td>
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
        <button class="btn " type="submit" name="btn_insert"><a href="add_nhan_vien" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>