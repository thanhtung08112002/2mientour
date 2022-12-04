<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/admin/pageAdmin.css" />
    <link rel="stylesheet" href="public/css/admin/form_login.css" />
    <link rel="stylesheet" href="public/css/admin/header_admin.css" />
    <title><?= !isset($url) ? 'home' : $url ?></title>
</head>

<body>

    <header>
        <div class="menu ">
            <div class="menu-logo">
                <img src="public/images/logo.png" alt="" />
              
            </div>
            <nav class="menu_nav">
                <ul>
                    <li><a href="admin_page">Trang chủ</a></li>
                    <li><a href="list_accounts">Danh sách account admin</a></li>
                    <li><a href="list_nhan_vien">Nhân viên</a></li>
                    <li><a href="list_thanh_toan_tour">Thanh toán tour</a></li>
                    <li><a href="list_anh_tour">Ảnh tour</a></li>
                    <li><a href="list_chuc_vu">Chức vụ</a></li>
                    <li><a href="logout">Sign out</a></li>
                </ul>
            </nav>
        </div>

    </header>