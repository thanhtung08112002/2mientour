<!-- thuộc mục quản lý tour du lịch -->
<!-- form thêm tour  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm thông tin tin tức du lịch</h2>
        </div>
        <form action="<?= ROOT ?>admin_list_news/add-news-detail/check" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">

                    <div class="form-group">
                        <label for="">id</label>
                        <input type="text" name="id" value="<?= $_GET['id']?>" disabled>
                        <input type="text" name="id" value="<?= $_GET['id']?>" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="noi_dung_tin_tuc_chi_tiet">Nội dung</label>
                        <textarea type="text" name="noi_dung_tin_tuc_chi_tiet" id="noi_dung_tin_tuc_chi_tiet" required></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btn_insert_news_detail">Thêm</button>
                    <button class="btn"><a href="<?= ROOT ?>admin_list_news/detail/?id=<?=$_GET['id']?>">Danh sách nội dung chi tiết tour</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>