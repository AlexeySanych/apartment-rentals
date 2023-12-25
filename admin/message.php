<?php
$messages_query = mysqli_query($mysqli, "SELECT * FROM reviews");
$messages = mysqli_fetch_all($messages_query, MYSQLI_ASSOC);
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
    <title>новые сообщения</title>
</head>
<body class="management">
<div class="container">
    <div class="management__btn-block">
        <a class="btn" href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=logout'?>">Х Выход</a>
        <a class="btn" href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=admin'?>">< В кабинет</a>
    </div>
    <h1>Новые сообщения</h1>
    <form action="" method="post">
        <table class="management__table">
            <thead>
            <tr>
                <th>e-mail</th>
                <th>Имя</th>
                <th>Город</th>
                <th>Сообщение</th>
                <th>Дата</th>
                <th>Опубликовать</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($messages as $message) :
                ?>
                <tr>
                    <td><?= $message['email'] ?></td>
                    <td><?= $message['name'] ?></td>
                    <td><?= $message['city'] ?></td>
                    <td><?= $message['message'] ?></td>
                    <td><?= $message['date'] ?></td>
                    <td><input class="td-input" type="checkbox" name="checkeds[]" value="<?= $message['id'] ?>"
                        <?php if ($message['is_published']) {echo 'checked';} ?>></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <button class="btn" type="submit">Отправить</button>
    </form>
</div>
</body>
</html>