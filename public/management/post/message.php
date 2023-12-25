<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../../../system/connectDB.php';

    $rewiews = $_POST['checkeds'];

    foreach ($rewiews as $rewiew) {
        $id = (int)$rewiew;
        mysqli_query($mysqli, "UPDATE reviews SET is_published = 1 WHERE id = $id");
    }
}
