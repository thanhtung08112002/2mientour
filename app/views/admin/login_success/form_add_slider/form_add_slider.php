<!-- thuộc mục slider -->
<!-- form thêm slider  -->


<!-- bảng -->
<div class="board">
    <div class="headline">
        <h2>Thêm slider</h2>
    </div>
    <form action="<?= ROOT ?>admin_list_slider/add_slider/check_slider" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="anh">Ảnh slider</label>
                    <input type="file" name="anh" id="anh" required>
                    <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name="url" id="url" required>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit" name="btn_insert_slider">Thêm</button>
        <button class="btn"><a href="<?= ROOT ?>admin_list_slider">Danh sách</a></button>
    </form>
</div>
<!-- end bảng -->