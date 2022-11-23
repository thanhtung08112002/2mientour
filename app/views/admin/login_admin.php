<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/admin/form_login.css" />
    <title>Welcome to 2mientour admin</title>
</head>

<body>
    <div class="container">
        <div class="login ">
            <form class="shadow" action="check_login" method="POST">
                <div class="logo">
                    <img src="./public/images/logo_header.jpg" alt="" class="img-thumbnail">
                    <h3 class=" text-center">
                        Đăng Nhập
                    </h3>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name='account_admin'>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_admin">
                </div>
                <span class="error_login" style="color: red;font-weight: bold; "><?= isset($_SESSION['error_login']) ? $_SESSION['error_login']: ""?></span>
                <!-- nếu sai tk hoặc mk thì in ra -->
                <button type="submit" name="btn-login" class="btn btn-primary">Đăng Nhập</button>
            </form>
        </div>
    </div>
</body>

</html>