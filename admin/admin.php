<?php
$query_new_message = mysqli_query($mysqli, "SELECT count(*) FROM reviews WHERE is_view = 0");
$new_message = mysqli_fetch_array($query_new_message, MYSQLI_ASSOC);

$title = 'Кабинет администратора';
include '../../admin/layouts/pages-head.php';
?>
    <h1>Кабинет администратора</h1>
    <ul class="management__admin_nav">
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=message'?>">Все сообщения</a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=new-message'?>">
                Новые сообщения: <?= $new_message ["count(*)"] ?></a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=flats'?>">Редактировать / Удалить квартиры</a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=new-flat'?>">Добавить квартиру</a></li>
        <li><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=change-auth'?>">Изменить логин/пароль для входа</a></li>
    </ul>
</div>
</body>
</html>
