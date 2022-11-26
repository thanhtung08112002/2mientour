<?php

function render($path, $data = []) {
    extract($data);
    $views = "app/views/client/$path/$path.php";
    include_once "header.php";
    include_once "footer.php";
    include_once "app/views/client/layout.php";
}
function fix(){
  
}