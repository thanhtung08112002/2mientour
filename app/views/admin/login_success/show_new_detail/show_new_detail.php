<article>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>DANH SÁCH TIN TỨC CHI TIẾT</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($getNewDetail as $item) : ?>
                    <?php extract($item) ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id_content ?></td>
                        <td><?= $content ?></td>
                        <td style="display: contents ;">
                            <a href="<?= ROOT ?>admin_list_news/edit_news_detail/?id_content=<?= $id_content ?>&id=<?= $id ?>" class="link-action btn-warning" onclick="return confirm('Bạn có muốn sửa không');">Sửa</a>
                            <a href="<?= ROOT ?>admin_list_news/delete_news_detail/?id_content=<?= $id_content ?>&id=<?= $id ?>" class="link-action btn-danger" onclick="return confirm('Bạn có muốn xóa không');">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn " type="submit"><a href="<?= ROOT ?>admin_list_news/add-news-detail/?id=<?= $_GET['id'] ?>" class="btn-primary">Thêm</a></button>
        <button class="btn "> <a href="<?= ROOT ?>admin_list_news" class="btn-primary">Danh sách tin tức</a></button>
    </div>

    <!-- end bảng -->
</article>