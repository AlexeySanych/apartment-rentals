<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletes'])) {
    include '../../../system/connectDB.php';

    $id = implode(",", $_POST['deletes']);
    mysqli_query($mysqli, "DELETE FROM flats WHERE id IN ($id)");
}

header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=flats');