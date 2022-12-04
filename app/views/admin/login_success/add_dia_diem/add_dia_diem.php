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
            <h2>Thêm địa điểm</h2>
        </div>
        <form action="save_dia_diem" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mã địa điểm khởi hành</label>
                        <input class="form-control" type="text" name="ma_dia_diem_khoi_hanh">
                    </div>

                    <div class="form-group">
                        <label for="">Tên địa điểm khởi hành</label>
                        <input class="form-control" type="text" name="ten_dia_diem_khoi_hanh">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
            <button class="btn"><a href="list_dia_diem">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->
</article>