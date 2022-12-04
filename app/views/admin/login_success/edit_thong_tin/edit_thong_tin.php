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
            <h2>Sửa thông tin công ty</h2>
        </div>
        <form action="save_edit_thong_tin&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mã công ty</label>
                        <input class="form-control" type="text" name="ma_cong_ty">
                    </div>

                    <div class="form-group">
                        <label for="">Tên công ty</label>
                        <input class="form-control" type="text" name="ten_cong_ty" placeholder="Tên quản lý miền">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ công ty</label>
                        <input class="form-control" type="text" name="dia_chi_cong_ty">
                    </div>
                    <div class="form-group">
                        <label for="">tel</label>
                        <input class="form-control" type="text" name="tell">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">fax</label>
                        <input class="form-control" type="text" name="fax">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email_cong_ty">
                    </div>
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input class="form-control" type="file" name="logo">
                    </div>
                    <div class="form-group">
                        <label for="">Copyrights</label>
                        <input class="form-control" type="text" name="copyrights">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Sửa</button>
            <button class="btn"><a href="list_thanh_toan_tour">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->


</article>