
<footer>
  <div class="container">
    <div class="row col_3">
      <div class="col-3">
        <div class="footer_contact_social_media">
          <a href="<?= ROOT?>"><img src="<?= ROOT?>public/images/<?= $logo ?>" alt="" /></a>
          <p>
            <a href="<?=ROOT?>">Follow <span>2mientour.com</span></a>
          </p>
          <div class="footer_contact_social_media-icons">
            <a href="#"> <i class="fa-brands fa-facebook"></i></a>
            <a href="#"> <i class="fa-brands fa-twitter"></i></a>
            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
            <a href="#"> <i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
      </div>

      <?php foreach ($mien as $item) : ?>
        <div class="footer_top_games">
          <?php extract($item) ?>
          <h3>Du lịch <?= $ten_mien ?></h3>

          <ul>
            <?php foreach ($getAllMienWithCity as $item_thanh_pho) : ?>
              <?php extract($item_thanh_pho) ?>
              <?php if ($item_thanh_pho['ma_mien'] == $item['ma_mien']) {?>
                <!-- fixing -->
               <li><a href="<?= ROOT?>tour/tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"> <?= ucwords($ten_tour)?></a></li>
                <!-- fixing -->
              <?php } ?>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endforeach ?>
      <div class="col-3">
        <div class="footer_top_games">
          <h3>Liên hệ:</h3>
          <ul style="list-style: none; padding-left: 0">
            <li>
              <?= $ten_cong_ty ?>
            </li>
            <li>
              <strong> Trụ sở:</strong> <?= $dia_chi_cong_ty ?>
            </li>
            <li>
              <strong>Tel: </strong><a href="tel:<?= $tel ?>"><?= $tel ?></a>
            </li>
            <li>
              <strong>Fax: </strong><a href="tel:<?= $fax ?>"><?= $fax ?></a>
            </li>
            <li>
              <strong>Email: </strong><a href="mailto:<?= $email ?>"><?= $email_cong_ty ?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row footer_copy_rights">
      <div class="footer_copy_rights">
        <span><?= $copyrights ?></span>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
</div>
<script src="<?= ROOT?>/public/js/app.js"></script>
<script src="<?= ROOT?>/public/js/tour_catalog.js"></script>
<script src="<?= ROOT?>/public/js/lienhe.js"></script>
<script src="<?= ROOT?>/public/js/cart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>