<?php
function showAllNews(){
    $getNews = getNews();
    render_admin('show_list_news', ['getNews' => $getNews]);
}

function showAllNewsDetail(){
    $id = $_GET['id'];
    $getNewDetail = getNewDetail($id);
    render_admin('show_new_detail', ['getNewDetail' => $getNewDetail]);
}