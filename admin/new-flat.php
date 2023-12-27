<?php
$title = 'Добавить квартиру';
include '../../admin/layouts/pages-head.php';
//var_dump($flat);
?>
<h1>Редактирование квартиры</h1>
<form action="<?= 'http://'. $_SERVER['HTTP_HOST'] . '/management/post/new-flat.php'?>" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Заголовок">
    <input type="text" name="desc_prev" placeholder="Превью">
    <input type="text" name="description" placeholder="Описание">
    <input type="text" name="cost" placeholder="Стоимость">
    <input type="text" name="address" placeholder="Адрес">
    <input type="file" name="photo" multiple accept="image/*,image/jpeg">

    <button class="btn" type="submit">Отправить</button>
</form>
</div>
</body>
</html>