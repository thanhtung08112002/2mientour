<!-- thuộc mục mã ưu đãi -->
<!-- form thêm mã ưu đãi  -->

<article>

    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm ưu đãi</h2>
        </div>
        <form action="<?= ROOT ?>admin_list_promotion/add_promotion/check_promotion" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="id_giam_gia">ID giảm giá</label>
                        <input type="text" class="form-control" name="id_giam_gia" id="id_giam_gia" required disabled placeholder="ID tự tăng">
                    </div>
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" name="code" id="code" required>
                    </div>
                    <div class="form-group">
                        <label for="loai_ma_giam_gia">Loại mã giảm giá</label>
                        <input class="form-control" type="text" name="loai_ma_giam_gia" id="loai_ma_giam_gia" required>
                    </div>
                    <div class="form-group">
                        <label for="so_phan_tram_giam">Số phần trăm giảm giá</label>
                        <input class="form-control" type="text" name="so_phan_tram_giam" id="so_phan_tram_giam" required>
                    </div>
                </div>

            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert_promotion">Thêm</button>
            <button class="btn"><a href="<?= ROOT ?>admin_list_promotion">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>