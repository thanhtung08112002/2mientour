<?php
function admin_page() {
    $getAllThanhToanTour = getAllThanhToanTour();
    render_admin('pageAdmin',['getAllThanhToanTour' => $getAllThanhToanTour]);
}