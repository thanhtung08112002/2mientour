<!-- thuộc mục quản lý tour du lịch -->
<!-- cho phép thêm sửa xóa khởi hành, lịch trình và ảnh -->
<article>

    <!-- bảng -->
    <?php $ma_tour =  $_GET['ma-tour']?>
    <?php if ($thu_muc == 'khoihanh') { ?>
        <div class="board">
            <div class="headline">
                <h2>Thêm ngày khởi hành</h2>
            </div>
            <form action="<?= ROOT ?>quan_ly_tour/add-khoi-hanh" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="col">
                        <div class="form-group">
                            <label for="">Mã tour</label>
                            <input type="text" name="ma_tour" id="" value="<?=$ma_tour?>" disabled>
                            <input type="text" name="ma_tour" id="" value="<?=$ma_tour?>" style="display: none;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ngay_khoi_hanh">Ngày khởi hành</label>
                            <input type="date" name="ngay_khoi_hanh" id="ngay_khoi_hanh" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="so_cho">Số chỗ</label>
                            <input type="number" name="so_cho" id="so_cho" min="1" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
                <button class="btn"><a href="<?= ROOT ?>quan_ly_tour">Danh sách</a></button>
            </form>
        </div>
    <?php } else if ($thu_muc == 'lichtrinh') { ?>
        <div class="board">
            <div class="headline">
                <h2>Thêm lịch trình</h2>
            </div>
            <form action="<?= ROOT ?>quan_ly_tour/add-lich-trinh" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã tour</label>
                            <input type="text" name="ma_tour" id="" value="<?=$ma_tour?>" disabled>
                            <input type="text" name="ma_tour" id="" value="<?=$ma_tour?>" style="display: none;">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ngay">Ngày</label>
                            <input type="number" name="ngay" id="ngay"  required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="noi_dung">Nội dung</label>
                            <textarea name="noi_dung" id="noi_dung" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
                <button class="btn"><a href="<?= ROOT ?>quan_ly_tour">Danh sách</a></button>
            </form>
        </div>
    <?php } else {?>
          <div class="board">
          <div class="headline">
              <h2>Thêm ảnh tour</h2>
          </div>
          <form action="<?= ROOT ?>quan_ly_tour/add-anh" method="POST" enctype="multipart/form-data">
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="">Mã tour</label>
                          <input type="text" name="ma_tour" id="" value="<?=$ma_tour?>" disabled>
                            <input type="text" name="ma_tour" id="" value="<?=$ma_tour?>" style="display: none;">
                      </div>
                      <div class="form-group">
                          <label for="anh_tour">Ảnh</label>
                          <input type="file" multiple name="anh_tour[]" id=""  required>
                      </div>
                      <h3 class="error_img" style="color: red;"><?= isset($_COOKIE['img_error'])?$_COOKIE['img_error']:""?></h3>
                  </div>

              </div>
              <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
              <button class="btn"><a href="<?= ROOT ?>quan_ly_tour">Danh sách</a></button>
          </form>
      </div>
   <?php }
    ?>

    <!-- end bảng -->
</article>