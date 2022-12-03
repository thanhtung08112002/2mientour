<?php

function showNews()
{
    $getNews = getNews();
    render('news', ['getNews' => $getNews]);
}

function showTintucDetail($id)
{
    $getNewDetail = getNewDetail($id);

    render('newDetail', [ 'getNewDetail' => $getNewDetail]);
}
