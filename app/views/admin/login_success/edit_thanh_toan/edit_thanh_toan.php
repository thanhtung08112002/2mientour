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
            <h2>Sửa thanh toán</h2>
        </div>
        <form action="save_edit_thanh_toan&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">ID Thanh Toán</label>
                        <input class="form-control" type="text" name="id_thanh_toan" readonly placeholder="Auto number" disabled>
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
                        <label for="">Họ và tên</label>
                        <input class="form-control" value="<?php ?>" type="text" name="ho_ten" placeholder="Tên quản lý miền">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input class="form-control" type="number" name="sdt" min="0" value="0">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" min="0" value="0">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input class="form-control" type="text" name="dia_chi">
                    </div>
                    <div class="form-group">
                        <label for="">Loại thanh toán</label>
                        <select class="form-control" name="phuong_thuc_thanh_toan" id="">
                            <option value="0">Chọn loại thanh toán</option>
                            <?php foreach ($phuong_thuc_thanh_toan as $pttt) : ?>
                                <option value="<?= $pttt['phuong_thuc_thanh_toan'] ?>">
                                    <?= $pttt['ten_phuong_thuc'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input class="form-control" type="text" name="so_luong" placeholder="Theo phần trăm">
                    </div>
                    <div class="form-group">
                        <label for="">Thành tiền</label>
                        <input class="form-control" type="text" name="thanh_tien" placeholder="Theo phần trăm">
                    </div>
                </div>

            </div>
            <button class="btn btn-primary" type="submit" name="btn_insert">Sửa</button>
            <button class="btn"><a href="list_thanh_toan_tour">Danh sách</a></button>
        </form>
    </div>
    <!-- end bảng -->


</article>