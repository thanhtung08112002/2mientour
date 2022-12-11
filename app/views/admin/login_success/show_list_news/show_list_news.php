<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH TIN TỨC</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung mở đầu</th>
                    <th>Ảnh đại diện tin tức</th>
                    <th>Ngày đăng</th>
                    <th>Xem thêm</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getNews as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id ?></td>
                        <td><?= $tieu_de ?></td>
                        <td><?= $noi_dung_dau ?></td>
                        <td><img src="<?= ROOT ?>public/images/imgs_news/<?= $anh_dai_dien_tin_tuc ?>" alt=""></td>
                        <td><?= date_handler($ngay_dang)?></td>
                        <td style=" width: 100px; " ><a href="<?=ROOT?>admin_list_news/detail/?id=<?= $id?>">Chi tiết</a></td>
                        <td style="display: contents ;">
                            <a style="margin-right:1rem ;" href="<?= ROOT ?>admin_list_news/edit_news/?id=<?= $id ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            <a href="<?= ROOT ?>admin_list_news/delete_news/?id=<?= $id ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit" name="btn_insert"><a href="admin_list_news/add_new" class="btn-primary">Thêm</a></button>
    </div>

    <!-- end bảng -->
</article>