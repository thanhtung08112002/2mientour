<?php
$get = getAllKhoaTour();


?>

<section>
  <div class="tour-nam">
    <div class="container">
      <div class="text">
        <span>Khám phá lịch sử - văn hóa - con người Việt Nam với</span>
        <h2 class="h3">TOUR Mien Nam</h2>
      </div>
      <!-- cần render -->
      <div class="row">
        <?php 
        foreach($get as $item){
          
          ?>
     
         
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail block-tour shadow rounded-lg tour">
            <a href=""><img src="asset/img/635f9d3f554e2.jpg " class="img-thumbnail" alt=""></a>
            <div class="caption">
              <a class="title-tour " href="">
                <p>Du Lịch Hàn Quốc Miễn Visa: Yang Yang - Núi Seorak - Gangwon - Đảo Nami -
                  Seoul 6N5Đ</p>
              </a>
              <div class="location">
                <i class="fa fa-flag"></i>
                <span>Ho Chi Minh</span>
              </div>
              <i class="fa fa-clock-o"></i>
              <span>04/11/2022</span>
            </div>
            <div class="bottom">
              <span>
                <i class="fa fa-money"></i>
                6.990.000 VND
              </span>
              <a href="" class=""> dat ngay</a>
            </div>
          </div>
        </div>
     <?php }
      ?>
 <!-- cần render -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="view-all">
            <a href="#" class="">Xem Tat Ca</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>