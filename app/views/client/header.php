<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="public/css/header.css" />
  <link rel="stylesheet" href="public/css/footer.css" />
  <link rel="stylesheet" href="public/css/article.css" />
  <link rel="stylesheet" href="public/css/tour_detail.css" />
  <link rel="stylesheet" href="public/css/responsive.css" />
  <title><?= !isset($url) ? 'home' : $url ?></title>

</head>

<body>
  <div class="container-fluid">
    <header>
      <div class="container">
        <div class="row">
          <a href="" class="header_logo"><img src="./public/images/logo_header.jpg" alt=""></a>
          <input type="checkbox" id="menu-nav">
          <label for="menu-nav"><i class="fa fa-bars"></i></label>
          <nav class="header_nav">
            <ul>
              <li><a href="#">TRANG CHỦ</a></li>
              <li><a href="#">DU LỊCH</a>
                <ul class="menu">
                  <li><a href="#">Mien bac</a>
                    <ul class="menu_child">
                      <li class="menu_child_li"><a href="">thanh pho 1</a></li>
                      <li class="menu_child_li"><a href="">thanh pho 1</a></li>
                      <li class="menu_child_li"><a href="">thanh pho 1</a></li>
                      <li class="menu_child_li"><a href="">thanh pho 1</a></li>
                      <li class="menu_child_li"><a href="">thanh pho 1</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Mien Nam</a>
                    <ul class="menu_child">
                      <li class="menu_child_li"><a href="">thanh pho</a></li>
                      <li class="menu_child_li"><a href="">thanh pho</a></li>
                      <li class="menu_child_li"><a href="">thanh pho</a></li>
                      <li class="menu_child_li"><a href="">thanh pho</a></li>
                      <li class="menu_child_li"><a href="">thanh pho</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">TIN TỨC</a></li>
              <li><a href="#">GIỚI THIỆU</a></li>
              <li><a href="#">LIÊN HỆ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header -->
