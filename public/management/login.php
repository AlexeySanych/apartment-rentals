<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $pass  = $_POST['pass'];
    if ($name == "" || strlen($name) > 32 ||
        $pass == "" || strlen($pass) > 32) {
        header('HTTP/1.1 400 Bad Request');
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/400.php');
    }

    include '../../system/connectDB.php';

    $sql = "SELECT pass FROM admin WHERE name = ?";
    $stmt = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($stmt, 's', $name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $hash_pass);
    mysqli_stmt_fetch($stmt);;
    if ($hash_pass && password_verify($pass, $hash_pass)) {
        $_SESSION['login'] = true;

        header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=admin');
    } else {
        header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/login.php');
    }
} else {
    include 'login-form.php';
}