<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] && isset($_GET["page"])) {
    if ($_GET["page"] == 'logout') {
        session_destroy();
        header('Location: http://' . $_SERVER['HTTP_HOST']);
    }
    include '../../system/connectDB.php';

    include '../../admin/' . $_GET["page"] . '.php';
} else {
    header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/login.php');
}