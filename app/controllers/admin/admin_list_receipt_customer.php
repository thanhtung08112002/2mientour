<?php
function showAllReceiptCustomer(){
    $getAllThanhToanTour = getAllThanhToanTour();
    render_admin('show_all_receipt_customer', ['getAllThanhToanTour' => $getAllThanhToanTour]);
}