<?php
function getNews()
{
    $conn = connection();
    $sql = "SELECT * FROM tin_tuc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getNewDetail($id)
{
    $conn = connection();
    $sql = "SELECT * FROM `tin_tuc_chi_tiet` join tin_tuc on tin_tuc.id = tin_tuc_chi_tiet.id WHERE tin_tuc.id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


function addNew($data)
{
    $conn = connection();
    $sql = "INSERT INTO `tin_tuc`( `tieu_de`, `noi_dung_dau`, `anh_dai_dien_tin_tuc`, `ngay_dang`) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header('location:'.ROOT."admin_list_news");
    };
}
function addNewsDetail($data,$id) {
    $conn = connection();
    $sql = "INSERT INTO `tin_tuc_chi_tiet`(`id`, `content`) VALUES (?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header('location:'.ROOT."admin_list_news/detail/?id=$id");
    };  
}