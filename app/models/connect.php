<?php

function connection()
{
    $dbname = '2mientour';
    $pass = '';
    $user = 'localhost';
    try {
        $conn = new PDO("mysql:host=$user; dbname=$dbname; charset=utf8", "root", $pass);
        return $conn;
    } catch (PDOException $e) {
        echo "lỖI KẾT NỐI DỮ LIỆU: " . $e->getMessage();
    }
}
