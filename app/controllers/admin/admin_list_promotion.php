<?php
function showAllPromotion(){
    $getAllPromotion = getAllPromotion();
    render_admin('show_list_promotion', ['getAllPromotion' => $getAllPromotion]);
}