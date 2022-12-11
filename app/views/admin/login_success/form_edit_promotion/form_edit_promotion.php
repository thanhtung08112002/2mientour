<!-- thuộc mục ưu đãi -->
<!-- form sửa ưu đãi  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Sửa Ưu đãi</h2>
        </div>
        <?php foreach ($getPromotionWithId as $item) : ?>
            <?php extract($item) ?>

            <form action="<?= ROOT ?>admin_list_promotion/edit_promotion/check_promotion" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="id_giam_gia">Id giảm giá</label>
                            <input type="text" class="form-control" name="id_giam_gia" id="id_giam_gia" value="<?= $id_giam_gia ?>" disabled>
                            <input type="text" name="id_giam_gia" value="<?= $id_giam_gia ?>" id="" style="display: none;">
                        </div>
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" name="code" id="code" value="<?= $code ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="loai_ma_giam_gia">Loại mã giảm giá</label>
                            <input type="text" name="loai_ma_giam_gia" id="loai_ma_giam_gia" value="<?= $loai_ma_giam_gia ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="so_phan_tram_giam">Số phần trăm giảm giá</label>
                            <input type="text" name="so_phan_tram_giam" id="so_phan_tram_giam" value="<?= $so_phan_tram_giam ?>" required>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="btn_edit_promotion">Sửa</button>
                <button class="btn"><a href="<?= ROOT ?>admin_list_promotion">Danh sách</a></button>
            </form>
        <?php endforeach ?>
    </div>
    <!-- end bảng -->
</article>