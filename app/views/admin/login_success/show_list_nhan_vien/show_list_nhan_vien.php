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
                    <?php extract($bql) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ma_quan_ly_mien ?></td>
                        <td><?= $ma_mien ?></td>
                        <td><?= $ten_quan_ly_mien ?></td>
                        <td><?= $sdt ?></td>
                        <td><?= $que_quan ?></td>
                        <td>
                            <img src="<?= ROOT ?>public/images/img_quan_ly/<?= $anh_dai_dien ?>" width="123" alt="">
                        </td>
                        <td><?= $ten_chuc_vu ?></td>
                        <td><?= date_handler($ngay_thang_nam_sinh) ?></td>
                        <td>
                            <div class="click-action">
                                <a href="<?= ROOT?>admin_list_employee/edit/?id=<?= $ma_quan_ly_mien?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <?php if ($ma_mien == 'MB') {  ?>
                                <?php foreach ($getAllNhanVienMienBac as $item) : ?>
                                    <?php if ($item['so_luong_quan_ly'] >1) { ?>
                                        <div>
                                            <a href="<?= ROOT?>admin_list_employee/delete/?id=<?= $ma_quan_ly_mien?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                                        </div>
                                    <?php }else{
                                        echo "";
                                    } ?>
                                <?php endforeach ?>
                            <?php }else{?>
                                <?php foreach ($getAllNhanVienMienNam as $item) : ?>
                                    <?php if ($item['so_luong_quan_ly'] >1) { ?>
                                        <div>
                                            <a href="<?= ROOT?>admin_list_employee/delete/?id=<?= $ma_quan_ly_mien?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                                        </div>
                                    <?php }else{
                                        echo "";
                                    } ?>
                                <?php endforeach ?>
                           <?php } ?>

                
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" ><a href="<?= ROOT?>admin_list_employee/add" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>