<?php
function showAllRegisterPromotion(){
    $getInforRegister = getInforRegister();
    render_admin('show_list_register_promotion', ['getInforRegister' => $getInforRegister]);
}