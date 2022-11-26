<?php
// lấy dữ liệu bảng nhân viên
function getAllbanquanly()
{
    $conn = connection();
    $sql = "SELECT * FROM ban_quan_ly_theo_mien bqltm JOIN chuc_vu cv on bqltm.ma_chuc_vu = cv.ma_chuc_vu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// delete nhân viên
function nhan_vien_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM ban_quan_ly_theo_mien WHERE ma_quan_ly_mien = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// function insert hàng hóa
function nhan_vien_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO ban_quan_ly_theo_mien(ten_quan_ly_mien, sdt, que_quan, anh_dai_dien, ma_chuc_vu, ngay_thang_nam_sinh) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("location:danh_sach_nhan_vien");
    }
}

function add_number($valueAddNumber)
{
    $conn = connection();
    $sql = "INSERT INTO ban_quan_ly_theo_mien(ten_quan_ly_mien, sdt, que_quan, anh_dai_dien, ma_chuc_vu, ngay_thang_nam_sinh) VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($valueAddNumber)) {
        // header("Location:danh_sach_nhan_vien");
        echo "ọk";
    }
}
// fuction save edit nhân viên
function save_edit_list($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `ban_quan_ly_theo_mien` SET `ten_quan_ly_mien`='?',`sdt`='?',`que_quan`='?',`anh_dai_dien`='?',`ma_chuc_vu`='?',`ngay_thang_nam_sinh`='?' WHERE `ban_quan_ly_theo_mien`.`ma_chuc_vu` = $id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:danh_sach_nhan_vien");
        // echo "ọk";

    }
}
