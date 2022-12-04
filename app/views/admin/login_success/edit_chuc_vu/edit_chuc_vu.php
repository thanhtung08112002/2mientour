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
            <h2>Sửa chức vụ</h2>
        </div>
        <form action="save_edit_chuc_vu&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mã chức vụ</label>
                        <input class="form-control" type="text" name="ma_chuc_vu" readonly placeholder="Auto number" disabled>
                    </div>

                    <div class="form-group">
                        <label for="">Tên chức vụ</label>
                        <input class="form-control" type="text" name="ten_chuc_vu">
                    </div>
                </div>

            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Sửa</button>
            <button class="btn"><a href="list_nhan_vien">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->


</article>