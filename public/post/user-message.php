<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('HTTP/1.1 404 Not Found');
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/errors/404.php');
    exit();
}
$email = $_POST['email'];
$name = $_POST['name'];
$city = $_POST['city'];
$message = $_POST['message'];
if ($email == "" || !filter_var($email, FILTER_SANITIZE_EMAIL) || strlen($email) > 32 ||
    $name == "" || strlen($name) > 32 ||
    $city == "" || strlen($city) > 32 ||
    $message == "" || strlen($message) > 384) {
    header('HTTP/1.1 400 Bad Request');
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/400.php');
}
include '../../system/connectDB.php';
$sql = "INSERT INTO reviews(email, name, city, message) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($mysqli, $sql);
mysqli_stmt_bind_param($stmt, 'ssss', $email, $name, $city, $message);
mysqli_stmt_execute($stmt);
header('Refresh: 2; url=http://' . $_SERVER['HTTP_HOST']);
echo "Сообщение отправлено.";