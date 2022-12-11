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

function getNewWithId($id)
{
    $conn = connection();
    $sql = "SELECT `id`, `tieu_de`, `noi_dung_dau`, `anh_dai_dien_tin_tuc`, `ngay_dang` FROM `tin_tuc` WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function editNews($data)
{
    $conn = connection();
    $sql = "UPDATE `tin_tuc` SET `tieu_de`=?,`noi_dung_dau`=?,`anh_dai_dien_tin_tuc`=?  WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function deleteNews($id) {
    
    $conn = connection();
    $sql = "DELETE FROM `tin_tuc` WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getNewDetailWithId($id_content)
{
    $conn = connection();
    $sql = "SELECT `id`, `id_content`, `content` FROM `tin_tuc_chi_tiet` WHERE id_content = $id_content";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function editNewsDetails($data,$id)
{
    $conn = connection();
    $sql = "UPDATE `tin_tuc_chi_tiet` SET `content`= ? WHERE id_content = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header('location:' . ROOT . "admin_list_news/detail/?id=$id");
        /* A function that will print out the content of the variable. */
    }
}
 

function deleteNewsDetails($id_content)
{

    $conn = connection();
    $sql = "DELETE FROM `tin_tuc_chi_tiet` WHERE id_content = $id_content";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

