<article>
    <div class="horizontal-menu">
        <div class="user">
            <p class="user-name">Mot Hai Ba</p>
            <img src="images.jfif" alt="">
        </div>
    </div>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH ĐỊA ĐIỂM</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã địa điểm khởi hành</th>
                    <th>Tên địa điểm khởi hành</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($dia_diem_khoi_hanh as $ddkh) : ?>
         
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $ddkh['ma_dia_diem_khoi_hanh'] ?></td>
                        <td><?= $ddkh['ten_dia_diem_khoi_hanh'] ?></td>
                        <td>
                            <div class="click-action">
                                <a href="edit_dia_diem&id=<?= $ddkh['ma_dia_diem_khoi_hanh'] ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                            <div>
                                <a href="delete_dia_diem&id=<?= $ddkh['ma_dia_diem_khoi_hanh'] ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                            </div>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="add_dia_diem" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>