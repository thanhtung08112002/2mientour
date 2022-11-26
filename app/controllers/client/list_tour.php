<?php
function searchTour()
{
    $getAllThanhPho = getAllThanhPho();
    extract($_GET);
    if ($listCity == "") {
        $listCity = "%";
    }
    if ($valueSearch == "") {
        $valueSearch = "%";
    }
    $data = [
        'valueCity' => $listCity,
        'valueSearch' => $valueSearch
    ];
    $resultSearch = search_tour($data);
    render("resultSearch", ['resultSearch' => $resultSearch, 'getAllThanhPho' => $getAllThanhPho]);
}
