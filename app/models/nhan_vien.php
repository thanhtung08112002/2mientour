<?php
// lấy dữ liệu bảng nhân viên
function getAllNhanVien()
{
    $conn = connection();
    $sql = "SELECT * FROM ban_quan_ly_theo_mien bqltm JOIN chuc_vu cv on bqltm.ma_chuc_vu = cv.ma_chuc_vu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getAllNhanVienMienNam()
{
    $conn = connection();
    $sql = "SELECT count(*) so_luong_quan_ly FROM `ban_quan_ly_theo_mien` WHERE ma_mien = 'MN'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getAllNhanVienMienBac()
{
    $conn = connection();
    $sql = "SELECT count(*) so_luong_quan_ly FROM `ban_quan_ly_theo_mien` WHERE ma_mien = 'MB'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addEmployee($data) {
    
    $conn = connection();
    $sql = "INSERT INTO `ban_quan_ly_theo_mien`(`ma_mien`, `ten_quan_ly_mien`, `sdt`, `que_quan`, `anh_dai_dien`, `ma_chuc_vu`, `ngay_thang_nam_sinh`) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function deleteEmployee($id) {
    
    $conn = connection();
    $sql = "DELETE FROM `ban_quan_ly_theo_mien` WHERE ma_quan_ly_mien = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getEmployeeWithId($id) {
    $conn = connection();
    $sql = "SELECT * FROM ban_quan_ly_theo_mien bqltm JOIN chuc_vu cv on bqltm.ma_chuc_vu = cv.ma_chuc_vu JOIN du_lich_trong_nuoc ON du_lich_trong_nuoc.ma_mien = bqltm.ma_mien where ma_quan_ly_mien = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function editEmployee($data) {
    $conn = connection();
    $sql = "UPDATE `ban_quan_ly_theo_mien` SET `ma_mien`=?,`ten_quan_ly_mien`=?,`sdt`=?,`que_quan`=?,`anh_dai_dien`=?,`ma_chuc_vu`=?,`ngay_thang_nam_sinh`=? WHERE ma_quan_ly_mien = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}