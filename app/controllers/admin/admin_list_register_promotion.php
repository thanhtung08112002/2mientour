<?php
function showAllRegisterPromotion()
{
    $getInforRegister = getInforRegister();
    render_admin('show_list_register_promotion', ['getInforRegister' => $getInforRegister]);
}
function deleteRegisterPromotion()
{
    $id = $_GET['id'];
    deleteRegister($id);
    header("location:" . ROOT . 'admin_list_register_promotion');
}
