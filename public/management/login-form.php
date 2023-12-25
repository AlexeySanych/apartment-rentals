<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/style.css">
    <title>Login</title>
    <style>
        <?= include '../../admin/admin.css'?>
    </style>
</head>
<body class="management">
<div class="container">
    <div class="form_auth">
        <h1>Авторизация</h1>
        <form action="<?= 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="management__input" type="text" name="name" placeholder="имя" required >
            <input class="management__input" type="password" name="pass" placeholder="пароль" required >
            <button class="btn" type="submit">Войти</button>
        </form>
    </div>
</div>
</body>
</html>
