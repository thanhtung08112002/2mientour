<?php 
function showMien() {
$getAllMien = getAllMien();
render_admin('mien', ['getAllMien' => $getAllMien]);
}