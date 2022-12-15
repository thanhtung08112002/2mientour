<?php
function showAllReceiptCustomer(){
    $getAllThanhToanTour = getAllThanhToanTour();
    render_admin('show_all_receipt_customer', ['getAllThanhToanTour' => $getAllThanhToanTour]);
}
function deleteReceiptCustomer() {
    $id = ($_GET['id']);
    cancelTourThanhToan($id); 
    header('Location: '.ROOT."admin_list_receipt_customer");
}
//vnpay
function showListVNPay() {
    $getAllVNPay = getAllVNPay();
    render_admin('show_list_vnpay', ['getAllVNPay' => $getAllVNPay]);
}
function deleteVNPay() {
    $magd = $_GET['magiaodich'];
    $deleteVNPayWithMaGD = deleteVNPayWithMaGD($magd);
    header('Location: '.ROOT."admin_list_receipt_customer_vnpay");

}