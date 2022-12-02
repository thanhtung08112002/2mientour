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
            <h2>Thêm tài khoản</h2>
        </div>
        <form action="save_account" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mã account</label>
                        <input class="form-control" type="text" name="id_account" readonly placeholder="Auto number" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tài Khoản</label>
                        <input class="form-control" type="text" name="tai_khoan">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input class="form-control" type="text" name="mat_khau">
                    </div>
                </div>
            </div>
            <button class="btn" type="submit" name="btn_insert">Thêm</button>
            <button class="btn"><a href="list_accounts">Danh sách</a></button>
        </form>
    </div>

    <!-- end bảng -->
</article>