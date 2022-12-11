<!-- thuộc mục tin tức -->
<!-- form sửa tin tức  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Sửa tin tức</h2>
        </div>
        <?php foreach ($getNewWithId as $item) : ?>
            <?php extract($item) ?>
            <form action="<?= ROOT ?>admin_list_news/edit_news/check_news" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="id">ID </label>
                            <input type="text" class="form-control" name="id" id="id" value="<?= $id ?>" disabled>
                            <input type="text" name="id" value="<?= $id ?>" id="" style="display: none;">
                        </div>
                        <div class="form-group">
                            <label for="tieu_de">Tiêu đề</label>
                            <textarea name="tieu_de" id="tieu_de" cols="30" rows="10"><?= $tieu_de ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="noi_dung_dau">Nội dung đầu</label>
                            <textarea name="noi_dung_dau" id="noi_dung_dau" cols="30" rows="10"><?= $noi_dung_dau ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="anh_dai_dien_tin_tuc">Ảnh đại diện tin tức</label>
                            <input type="file" name="anh_dai_dien_tin_tuc" id="anh_dai_dien_tin_tuc" required>

                            <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                            ảnh đại diện hiện tại
                            <img src="<?= ROOT ?>public/images/imgs_news/<?= $anh_dai_dien_tin_tuc ?>" alt="" width="200rem" height="200rem">
                            <input type="text" name="anh_cu" value="<?= $anh_dai_dien_tin_tuc ?>" style="display: none;">
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="btn_edit_news">Sửa</button>
                <button class="btn"><a href="<?= ROOT ?>admin_list_news">Danh sách</a></button>
            </form>
        <?php endforeach ?>
    </div>
    <!-- end bảng -->
</article>