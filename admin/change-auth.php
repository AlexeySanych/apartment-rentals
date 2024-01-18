<?php
$title = 'Изменить авторизацию';
include '../../admin/layouts/pages-head.php';
?>
    <h1>Изменить параметры для входа</h1>
    <form class="flat-form" action="http://<?= $_SERVER['HTTP_HOST'] ?>/management/post.php" method="post">
        <input type="hidden" name="action" value="change-auth">
        <label>Текущий логин<input type="text" name="login" required></label>
        <label>Новый логин<input type="text" name="new_login"></label>
        <label>Текущий пароль<input type="text" name="password" required></label>
        <label>Новый пароль<input type="text" name="new_password"></label>
        <button class="btn" type="submit">Отправить</button>
    </form>
</div>
</body>
</html>