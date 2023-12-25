<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../../../system/connectDB.php';

    $id = implode(",", $_POST['checkeds']);
    mysqli_query($mysqli, "UPDATE reviews SET is_published = 0 WHERE id NOT IN ($id)");
    mysqli_query($mysqli, "UPDATE reviews SET is_published = 1 WHERE id IN ($id)");

    header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=message');
}
