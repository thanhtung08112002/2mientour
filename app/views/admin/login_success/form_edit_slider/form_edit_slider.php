<!-- thuộc mục slider -->
<!-- form sửa slider  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Sửa slider</h2>
        </div>
        <?php foreach ($getSliderWithID as $item) : ?>
            <?php extract($item) ?>
            <form action="<?= ROOT ?>admin_list_slider/edit_slider/check_slider" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" id="id" value="<?= $id ?>" disabled>
                            <input type="text" name="id" value="<?= $id ?>" id="" style="display: none;">
                        </div>

                        <div class="form-group">
                            <label for="anh">Ảnh đại diện</label>
                            <input type="file" name="anh" id="anh" required>
                            <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                            ảnh đại diện hiện tại
                            <img src="<?= ROOT ?>public/images/<?= $anh ?>" alt="" width="200rem" height="200rem">
                            <input type="text" name="anh_cu" value="<?= $anh ?>" style="display: none;">
                        </div>

                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" id="url" value="<?= $url ?>" required>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="btn_edit_slider">Sửa</button>
                <button class="btn"><a href="<?= ROOT ?>admin_list_slider">Danh sách</a></button>
            </form>
        <?php endforeach ?>
    </div>
    <!-- end bảng -->
</article>