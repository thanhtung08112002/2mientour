<div class="search_and_slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 0 -15px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="#anh"> <img class="d-block w-100" src="public/images/mua-thu-tay-au.jpg" alt="First slide"></a>
      </div>
      <div class="carousel-item">
        <a href="#anh"> <img class="d-block w-100" src="public/images/mua-thu-tay-au.jpg" alt="Second slide"></a>
      </div>
      <div class="carousel-item">
        <a href="#anh"> <img class="d-block w-100" src="public/images/mua-thu-tay-au.jpg" alt="Third slide"></a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="search-main">
    <div class="search container">
      <form class="form_search">
        <select id="inputState" class="search_input">
          <option value="">Thành phố</option>
          <?php
          foreach ($getAllThanhPho as $item) :
          ?>
          <?php extract($item)?>
            <option value="<?= $ma_thanh_pho?>"><?= $ten_thanh_pho?></option>
          <?php endforeach ?>
        </select>
        <input type="text" class="search_input" placeholder="  Nhập thông tin cần tìm...">
        <button type="submit" class="btn btn-search-tour btn-danger">TÌM TOUR</button>
      </form>
    </div>
  </section>
</div>