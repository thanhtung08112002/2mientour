<?php
include_once 'header.php';
if ($path == 'error_404') {
    include_once 'error_404.php';
} else {
    include_once 'article.php';
}
include_once 'footer.php';
