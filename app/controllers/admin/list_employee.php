<?php
function show_list_employee()
{
    $test = getAllThongTinCongTy();
    render_admin("admin/layout",["test" => $test]);
}
