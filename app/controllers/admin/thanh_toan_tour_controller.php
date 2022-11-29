<?php
function showAllthanhtoantour()
{
    $thanh_toan_tour = getALLthanhtoantour();
    render_admin('list_thanh_toan_tour', ['thanh_toan_tour' => $thanh_toan_tour]);
}

// xóa thanh toán tour
function delete_thanh_toan_tour($id)
{
    thanh_toan_tour_delete($id);
    header("Location:thanh_toan_tour");
}
// show trang edit thanh toán
function show_edit_thanh_toan()
{
    $thanh_toan_tour = getALLthanhtoantour();
    $khoa_tour_chi_tiet = getAllKhoaTour();
    $ma_giam_gia = getAllmagiamgia();
    $phuong_thuc_thanh_toan = getAllphuongthucthanhtoan();
    render_admin('edit_thanh_toan', ['thanh_toan_tour' => $thanh_toan_tour,'khoa_tour_chi_tiet' => $khoa_tour_chi_tiet,'ma_giam_gia'=> $ma_giam_gia,'phuong_thuc_thanh_toan'=> $phuong_thuc_thanh_toan]);
}
//lưu cơ sở dữ liệu khi sửa
function save_edit_thanh_toan($id)
{
    extract($_POST);
    // tạo mảng
    $data = [ $ma_tour, $ho_ten, $sdt, $email, $dia_chi,$id_ma_giam_gia,$phuong_thuc_thanh_toan,$so_luong,$thanh_tien];
    // insert dữ liệu
    save_edit_list_thanh_toan($data, $id);
    // var_dump($_POST);
}