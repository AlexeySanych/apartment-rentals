<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    include '../../system/connectDB.php';
    include '../../admin/post/' . $_POST['action'] . '.php';
}