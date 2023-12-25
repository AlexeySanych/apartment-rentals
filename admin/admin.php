<?php
$query_new_message = mysqli_query($mysqli, "SELECT count(*) FROM reviews WHERE is_view = 0");
$new_message = mysqli_fetch_array($query_new_message, MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/style.css">
    <style>
        <?= include '../../admin/admin.css'?>
    </style>
    <title>admin</title>
</head>
<body class="management">
<div class="container">
    <div class="management__btn-block">
        <a class="btn" href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=logout'?>">Выход</a>
    </div>
    <h1>Кабинет администратора</h1>
    <ul class="management__admin_nav">
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=message'?>">Все сообщения</a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=new-message'?>">
                Новые сообщения: <?= $new_message ["count(*)"] ?></a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=flat'?>">Редактировать квартиру</a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=new-flat'?>">Добавить квартиру</a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=change-auth'?>">Изменить логин/пароль для входа</a></li>
    </ul>
</div>
</body>
</html>
