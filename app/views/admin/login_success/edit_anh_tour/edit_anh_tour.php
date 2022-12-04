<article>
    <div class="horizontal-menu">
        <div class="user">
            <p class="user-name">Mot Hai Ba</p>
            <img src="images.jfif" alt="">
        </div>
    </div>
    <!-- bảng -->
    <div class="board">
        <div class="headline">
            <h2>Thêm ảnh</h2>
        </div>
        <form action="save_edit_anh&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">ID ảnh</label>
                        <input class="form-control" type="text" name="id" readonly placeholder="Auto number" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Loại mã tour</label>
                        <select class="form-control" name="ma_tour" id="">
                            <option value="0">Chọn loại mã tour</option>
                            <?php foreach ($khoa_tour_chi_tiet as $ktct) : ?>
                                <option value="<?= $ktct['ma_tour'] ?>">
                                    <?= $ktct['ten_tour'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" name="anh" placeholder="">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
            <button class="btn"><a href="list_nhan_vien">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>