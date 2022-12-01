<div class="search_and_slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin: 0 -15px">
    <div class="carousel-inner ">
      <!-- handlers -->
      <div class="carousel-item active">
          <a href="#tour"><img class="d-block w-100 m-15" src="<?= ROOT ?>public/images/binh-lieu.jpg" alt="First slide"></a>
        </div>
      <?php foreach ($getAllSlider as $item) : ?>
        <?php extract($item) ?>
        <div class="carousel-item ">
          <a href="#<?= $url?>"><img class="d-block w-100 m-15" src="<?= ROOT ?>public/images/<?= $anh?>" alt="First slide"></a>
        </div>
      <?php endforeach ?>

      <!-- handlers -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="search-main">
    <div class="search container">
      <form class="form_search" method="GET" action="tour/result-search">
        <select id="inputState" class="search_input" name="listCity">
          <option value="">Thành phố</option>
          <?php
          foreach ($getAllThanhPho as $item) :
          ?>
            <?php extract($item) ?>
            <option value="<?= $ma_thanh_pho ?>"><?= $ten_thanh_pho ?></option>
          <?php endforeach ?>
        </select>
        <input type="text" class="search_input" placeholder="  Nhập thông tin cần tìm..." name="valueSearch"> 
        <button type="submit" class="btn btn-search-tour btn-danger" name="btn_search_tour">TÌM TOUR</button>
      </form>
    </div>
  </section>
</div>