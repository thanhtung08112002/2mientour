<!-- thuộc mục quản lý tour du lịch -->
<!-- form thêm tour  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm tin tức du lịch</h2>
        </div>
        <form action="<?= ROOT ?>admin_list_news/add_new/check" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">

                    <div class="form-group">
                        <label for="tieu_de">Tiêu đề</label>
                        <textarea type="text" name="tieu_de" id="tieu_de" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="noi_dung_dau">Nội dung đầu</label>
                        <textarea type="text" name="noi_dung_dau" id="noi_dung_dau" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="anh_dai_dien_tin_tuc">Ảnh đại diện tin tức</label>
                        <input type="file" name="anh_dai_dien_tin_tuc" id="anh_dai_dien_tin_tuc" required>
                        <p class="error_img" style="color: red;"><?= isset($_COOKIE['img_error']) ? $_COOKIE['img_error'] : "" ?></p>
                    </div>

                    <button class="btn btn-primary" type="submit" name="btn_insert_new">Thêm</button>
                    <button class="btn"><a href="<?= ROOT ?>quan_ly_tour">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>