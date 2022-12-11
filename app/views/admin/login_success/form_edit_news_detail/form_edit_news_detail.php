<!-- thuộc mục tin tức -->
<!-- form sửa tin tức chi tiết  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Sửa tin tức chi tiết</h2>
        </div>
        <?php foreach ($getNewDetailWithId as $item) : ?>
            <?php extract($item) ?>
            <form action="<?= ROOT ?>admin_list_news/edit_news_detail/check_news_detail/?id=<?= $_GET['id']?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        
                        <div class="form-group">
                            <label for="id_content">ID content</label>
                            <input type="text" class="form-control" name="id_content" id="id_content" value="<?= $id_content ?>" disabled>
                            <input type="text" name="id_content" value="<?= $id_content ?>" id="" style="display: none;">
                        </div>
                        <div class="form-group">
                            <label for="noi_dung_tin_tuc_chi_tiet">Nội dung tin tức</label>
                            <textarea name="noi_dung_tin_tuc_chi_tiet" id="noi_dung_tin_tuc_chi_tiet" cols="30" rows="10"><?= $content ?></textarea>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="btn_edit_news_detail">Sửa</button>
                <button class="btn"><a href="<?= ROOT ?>admin_list_news">Danh sách</a></button>
            </form>
        <?php endforeach ?>
    </div>
    <!-- end bảng -->
</article>