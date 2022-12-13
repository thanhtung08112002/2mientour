<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/header.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/footer.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/article.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/homePage.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/news.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/tour_detail.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/resultSearch.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/contact.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/cart.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/introduction.css" />
  <link rel="stylesheet" href="<?= ROOT ?>public/css/pay_success.css" />
  <script src="<?= ROOT ?>public/js/jquery-1.11.3.min.js"></script>
  <link href="<?= ROOT ?>public/css/jumbotron-narrow.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= ROOT ?>public/css/responsive.css" />
  <title>2mientour</title>

</head>

<body>
  <div class="container-fluid">
    <header>
      <div class="container">

        <div class="row">
          <div class="col-3">
            <div class="header_logo">
              <a href="<?= ROOT ?>" class="header_logo"><img src="<?= ROOT ?>public/images/<?= $logo ?>" alt="" /></a>

            </div>
          </div>
          <div class="col-9">
            <nav class="header_nav">
              <ul>
                <li><a href="<?= ROOT ?>">Trang chủ </a></li>
                <li><a href="javascript:void(0)">Du lịch</a>
                  <ul>
                    <?php foreach ($mien as $item) : ?>
                      <?php extract($item) ?>
                      <li><a href="<?= ROOT ?>diemden/?mamien=<?= $ma_mien ?>&&tenmien=<?= $ten_mien ?>" class="header_nav-mien"><?= $ten_mien ?></a>
                        <ul>
                          <?php foreach ($getAllMienWithCity as $item_thanh_pho) : ?>
                            <?php extract($item_thanh_pho) ?>
                            <?php if ($item_thanh_pho['ma_mien'] == $item['ma_mien']) { ?>
                              <li><a href="<?= ROOT ?>tour/tourdetail?mamien=<?= $ma_mien ?>&&matour=<?= $ma_tour ?>&&tentour=<?= $ten_tour ?>"> <?= ucwords($ten_tour) ?></a></li>
                            <?php  } ?>
                          <?php endforeach ?>
                        </ul>
                      </li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li><a href="<?= ROOT ?>tintuc">Tin tức</a></li>
                <li><a href="<?= ROOT ?>gioithieu">Giới thiệu</a></li>
                <li><a href="<?= ROOT ?>lienhe">Liên hệ</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- end header -->