<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= ROOT ?>public/css/admin/header_admin.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom styles for this template-->
    <link href="<?= ROOT ?>public/css/admin/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>public/css/admin/table_quan_ly.css" rel="stylesheet">
    <script src="<?= ROOT ?>ckeditor/ckeditor.js"></script>
    <script src="<?= ROOT ?>ckfinder/ckfinder.js"></script>

    <title>Hello admin 2 miền tour</title>
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
                    <li><a href="<?= ROOT ?>admin_page">Trang chủ</a></li>
                    <li><a href="<?= ROOT ?>admin_list_tour">Danh sách tour du lịch</a></li>
                    <li><a href="#">Khách hàng</a></li>
                    <li><a href="#">Loại Hàng</a></li>
                    <li><a href="#">Bình luận</a></li>
                    <li><a href="<?= ROOT ?>quan_ly_tour">Quản lý tour du lịch</a></li>
                    <li><a href="#">Thống kê</a></li>
                    <li><a href="#">Sign out</a></li>

                </ul>
            </nav>
        </div>

    </header>