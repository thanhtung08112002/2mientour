<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/admin/form_login.css" />
    <link rel="stylesheet" href="public/css/admin/header_admin.css" />
    <title><?= !isset($url) ? 'home' : $url ?></title>
</head>

<body>

    <header>
        <div class="menu " id="nav_display">
            <div class="menu-logo">
                <a href="<?= ROOT ?>admin_page">
                    <div class="home_admin">
                        <img src="<?= ROOT ?>public/images/logo.png" alt="">
                        <h2>2 Miền tour</h2>
                    </div>
                </a>
                <div class="btn_nav">
                    <p id="btn-nav-close"><i class="fa-solid fa-x"></i></p>
                </div>
            </div>

            <nav class="menu_nav">
                <ul>
                    <li><a href="admin_page">Trang chủ</a></li>
                    <li><a href="list_accounts">Danh sách account admin</a></li>
                    <li><a href="list_nhan_vien">Nhân viên</a></li>
                    <li><a href="list_thanh_toan_tour">Thanh toán tour</a></li>
                    <li><a href="list_anh_tour">Ảnh tour</a></li>
                    <li><a href="list_chuc_vu">Chức vụ</a></li>
                    <li><a href="list_tour_hot">Danh sách tour hot</a></li>
                    <li><a href="list_dia_diem">Danh sách địa điểm</a></li>
                    <li><a href="list_thong_tin">Thông tin công ty</a></li>
                    <li><a href="list_slider">Sliders</a></li>
                    <li><a href="logout">Sign out</a></li>
                </ul>
            </nav>
        </div>

    </header>
