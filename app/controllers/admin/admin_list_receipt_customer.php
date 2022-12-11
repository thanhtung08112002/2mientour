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