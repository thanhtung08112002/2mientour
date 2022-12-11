<?php
function showAllNews()
{
    $getNews = getNews();
    render_admin('show_list_news', ['getNews' => $getNews]);
}

function showAllNewsDetail()
{
    $id = $_GET['id'];
    $getNewDetail = getNewDetail($id);
    render_admin('show_new_detail', ['getNewDetail' => $getNewDetail]);
}

function showEditNews()
{
    $id = $_GET['id'];
    $getNewWithId = getNewWithId($id);
    render_admin('form_edit_news', ['getNewWithId' => $getNewWithId]);
}


function editMew()
{

    extract($_POST);
    $flag = true;
    $img = $_FILES['anh_dai_dien_tin_tuc'];
    $anh_dai_dien_tin_tuc = $img['name'];
    $dir_file = mb_strtolower(pathinfo($anh_dai_dien_tin_tuc, PATHINFO_EXTENSION));
    $file_arr = ['jpg', 'jepg', 'png'];
    $data = [
        $tieu_de,
        $noi_dung_dau,
        $anh_dai_dien_tin_tuc,
        $id

    ];
    if (!in_array($dir_file, $file_arr)) {
        setcookie('img_error', "file không đúng định dạng", time() + 3);
        $flag = false;
        header("location: " . ROOT . "admin_list_news/edit_news/?id=$id");
    }
    if ($flag) {

        move_uploaded_file($img['tmp_name'], "public/images/imgs_news/" . $anh_dai_dien_tin_tuc);
        unlink("public/images/imgs_news/" . $anh_cu);
        editNews($data);
        /* Redirecting the user to the admin_list_slider page. */
        header("location: " . ROOT . "admin_list_news");
        // var_dump($_POST);

    }
}


function deleteNew()
{
    $id = $_GET['id'];
    $getNewWithId = getNewWithId($id);
    foreach ($getNewWithId as $item) {
        unlink("public/images/imgs_news/" . $item['anh_dai_dien_tin_tuc']);
    }
    deleteNews($id);

    header("location: " . ROOT . 'admin_list_news');
}
function showEditNewsDetail()
{
    $id_content = $_GET['id_content'];
    $getNewDetailWithId = getNewDetailWithId($id_content);
    render_admin('form_edit_news_detail', ['getNewDetailWithId' => $getNewDetailWithId]);
} // controller
function editNewsDetail()
{
    extract($_POST);
    $id = $_GET['id'];
    // tạo mảng
    $data = [$noi_dung_tin_tuc_chi_tiet, $id_content];
    // insert dữ liệu

    editNewsDetails($data, $id);
    /* A comment. */
    // var_dump($data);
}


function deleteNewsDetail()
{
    $id_content = $_GET['id_content'];
    $id = $_GET['id'];

    deleteNewsDetails($id_content, $id);
    header('location:' . ROOT . "admin_list_news/detail/?id=$id");
}
