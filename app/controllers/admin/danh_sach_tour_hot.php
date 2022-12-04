<?php
function show_tour_hot()
{
    $tour_hot = getalldanhsachtourhot();
    render_admin('list_tour_hot', ['tour_hot' => $tour_hot]);
}

