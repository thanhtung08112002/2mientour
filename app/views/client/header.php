<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="public/css/header.css" />
  <link rel="stylesheet" href="public/css/footer.css" />
  <link rel="stylesheet" href="public/css/article.css" />
  <link rel="stylesheet" href="public/css/homePage.css" />
  <link rel="stylesheet" href="public/css/tour_detail.css" />
  <link rel="stylesheet" href="public/css/responsive.css" />
  <title><?= !isset($url) ? 'home' : $url ?></title>

</head>

<body>
  <div class="container-fluid">
    <header>
      <div class="container">

        <div class="row">
          <div class="col-3">
            <div class="header_logo">
              <a href="home" class="header_logo"><img src="public/images/logo_header.jpg" alt="" /></a>
              <input type="checkbox" id="menu-nav">
              <label for="menu-nav"><i class="fa fa-bars"></i></label>
            </div>
          </div>
          <div class="col-9">
            <nav class="header_nav">
              <ul>
                <li><a href="home">Trang chủ </a></li>
                <li><a href="#">Du lịch</a>
                  <ul>
                    <?php foreach ($mien as $item) : ?>
                      <?php extract($item) ?>
                      <li><a href="<?= $ma_mien?>" class="header_nav-mien"><?= $ten_mien ?></a>
                        <ul>
                          <?php foreach ($getAgetAllMienWithCity as $item_thanh_pho) : ?>
                          <?php extract($item_thanh_pho) ?>
                          <?php if ($item_thanh_pho['ma_mien'] == $item['ma_mien']) {
                             echo "<li><a href=\"$ma_thanh_pho\"> $ten_thanh_pho</a></li>";
                          }?>
                        <?php endforeach ?>
                        </ul>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li><a href="tintuc">Tin tức</a></li>
                <li><a href="gioithieu">Giới thiệu</a></li>
                <li><a href="lienhe">Liên hệ</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- end header -->