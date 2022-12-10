<article>
  <?php include_once $views?>
  <section class="register_promotion">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="introduct_promotion">
                    <div class="introduct_promotion--icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="introduct_promotion--text">
                        <h4>Đăng ký để nhận Bản Tin</h4>
                        <span>Nhập email để nhận chương trình tour khuyến mãi nhanh nhất và các ưu đãi hấp dẫn khác</span>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <form action="<?=ROOT?>register_promotion" class=" form-inline form_register_promotion " method="POST">
                    <div class="form-group-email">
                        <input type="email" class="form-control " placeholder="Email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-register" name="btn-register-promotion">Đăng ký</button>
                </form>
                <h2 class="<?= isset($_COOKIE['error_register'])?"register_fail":"register_success"?>"><?= isset($_COOKIE['error_register'])?$_COOKIE['error_register']:""?><?= isset($_COOKIE['register_success'])?$_COOKIE['register_success']:""?></h2>
            </div>
        </div>
    </div>
</section>
</article>