<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);

    include '../../../system/connectDB.php';

    $pass_query = mysqli_query($mysqli,"SELECT pass FROM admin WHERE name = '$login'");
    $pass = mysqli_fetch_array($pass_query, MYSQLI_ASSOC);
    $hash_pass = $pass ['pass'];
    if ($hash_pass && password_verify($password, $hash_pass)) {
        $name = $new_login ?: $login;
        $pass = $new_password ?: $password;
        $hash_password = password_hash($pass, PASSWORD_BCRYPT);

        mysqli_query($mysqli, "UPDATE admin
        SET name='$name', pass='$hash_password' WHERE name = '$login'");
    }
}

session_destroy();
header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/login.php');