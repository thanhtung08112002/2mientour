<?php
include 'header.php';
if ($path == 'error_404') {
    include 'error_404.php';
} else {
    include 'article.php';
}
include 'footer.php';
