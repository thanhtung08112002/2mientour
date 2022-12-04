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
            <h2>DANH SÁCH THÔNG TIN CÔNG TY</h2>
        </div>
        <table class="table">
            <thead>
                <tr>

                    <td>Mã công ty</td>
                    <td>Tên công ty</td>
                    <td>Địa chỉ công ty</td>
                    <td>Số Điện Thoại</td>
                    <td>Fax</td>
                    <td>Email</td>
                    <td>Logo</td>
                    <td>Copyrights</td>
                    <td>Chức năng</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($thong_tin as $tt) : ?>
                    <?php extract($tt) ?>
                    <tr>
                        <td><?= $ma_cong_ty ?></td>
                        <td><?= $ten_cong_ty ?></td>
                        <td><?= $dia_chi_cong_ty ?></td>
                        <td><?= $tel ?></td>
                        <td><?= $fax ?></td>
                        <td><?= $email_cong_ty ?></td>
                        <td>
                            <img src="./public/images/<?= $logo ?>" width="123" alt="">
                        </td>
                        <td><?= $copyrights ?></td>

                        <td>
                            <div class="click-action">
                                <a href="edit_thong_tin?id=<?= $ma_cong_ty ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- end bảng -->
</article>