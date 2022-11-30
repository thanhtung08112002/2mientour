
<?php 
//get all thanh toan tour
function getThanhToanTour($id_thanh_toan) {
    $conn = connection();
    $sql = "SELECT * FROM `thanh_toan_tour` WHERE `id_thanh_toan` = $id_thanh_toan";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// <<<<<<< HEAD
// delete thanh_toan_tour
function thanh_toan_tour_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM thanh_toan_tour WHERE id_thanh_toan = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

// fuction save edit thanh toán
function save_edit_list_thanh_toan($data = [], $id)
{
    $conn = connection();
    $sql =  "UPDATE `thanh_toan_tour` SET `ma_tour`=?,`ho_ten`=?,`sdt`=?,`email`=?,`dia_chi`=?,`phuong_thuc_thanh_toan`=?,`so_luong`=?,`thanh_tien`=? WHERE `thanh_toan_tour`.`id_thanh_toan` = $id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute($data)) {
        header("Location:list_thanh_toan_tour");
    }
}
// =======
//thanh toan tour
function payTour($data) {
    $conn = connection();
    $sql = "INSERT INTO `thanh_toan_tour` (`ma_tour`, `id_tour_lite`, `ho_ten`, `sdt`, `email`, `dia_chi`, `phuong_thuc_thanh_toan`, `so_luong`, `thanh_tien`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
//get thanh toan tour gan nhat

function getThanhToanTourGanNhat() {
    $conn = connection();
    $sql = "SELECT ten_tour, ngay_khoi_hanh, so_luong, thanh_tien, ho_ten, sdt, email, dia_chi, ten_phuong_thuc FROM `thanh_toan_tour` JOIN phuong_thuc_thanh_toan ON thanh_toan_tour.phuong_thuc_thanh_toan = phuong_thuc_thanh_toan.phuong_thuc_thanh_toan JOIN khoa_tour_lite ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour ORDER by id_thanh_toan DESC limit 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//get all thanh toan tour 

function getAllThanhToanTour() {
    $conn = connection();
    $sql = "SELECT id_thanh_toan,ten_tour, ngay_khoi_hanh, so_luong, thanh_tien, ho_ten, sdt, email, dia_chi, ten_phuong_thuc FROM `thanh_toan_tour` JOIN phuong_thuc_thanh_toan ON thanh_toan_tour.phuong_thuc_thanh_toan = phuong_thuc_thanh_toan.phuong_thuc_thanh_toan JOIN khoa_tour_lite ON khoa_tour_lite.id_tour_lite = thanh_toan_tour.id_tour_lite JOIN khoa_tour_chi_tiet ON khoa_tour_chi_tiet.ma_tour = thanh_toan_tour.ma_tour ORDER BY id_thanh_toan DESC ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// >>>>>>> cbc2860f00a4bb5d1eb58bc88f0a2ee1ae1a9ad8
