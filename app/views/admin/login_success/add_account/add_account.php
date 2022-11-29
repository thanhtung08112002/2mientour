<article>
    <div class="headline">
        <h2>Thêm tài khoản</h2>
    </div>
    <form action="save_account" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Mã quản lý miền</label>
                    <input class="form-control" type="text" name="ma_quan_ly_mien" readonly placeholder="Auto number" disabled>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Tài Khoản</label>
                    <input class="form-control" type="text" name="tai_khoan" readonly placeholder="Auto number" >
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input class="form-control" type="text" name="mat_khau" readonly placeholder="Auto number" >
                </div>
            </div>
        </div>
        <button class="btn" type="submit" name="btn_insert">Thêm</button>
        <button class="btn"><a href="list_accounts">Danh sách</a></button>
    </form>
</article>