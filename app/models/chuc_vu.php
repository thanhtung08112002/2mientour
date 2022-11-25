<?php
function getAllchucvu()
{
    $conn = connection();
    $sql = "SELECT * FROM chuc_vu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}