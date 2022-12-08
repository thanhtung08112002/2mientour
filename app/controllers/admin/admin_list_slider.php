<?php
function showAllSlider(){
    $getAllSlider = getAllSlider();
    render_admin('show_list_slider', ['getAllSlider' => $getAllSlider]);
}