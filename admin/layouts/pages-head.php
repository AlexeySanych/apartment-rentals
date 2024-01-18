<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/style.css">
    <style>
        <?= include '../../admin/assets/admin.css' ?>
    </style>
    <title><?= $title ?></title>
</head>
<body class="management">
<div class="container">
    <div class="management__btn-block">
        <a class="btn" href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=logout' ?>">Х Выход</a>
        <?php if ($_GET["page"] != 'admin') : ?>
        <a class="btn" href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=admin' ?>">< В кабинет</a>
        <?php endif; ?>
    </div>