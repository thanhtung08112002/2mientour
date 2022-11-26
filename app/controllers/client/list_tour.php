<?php
function searchTour()
{
    extract($_POST);
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
    var_dump($resultSearch);
}
