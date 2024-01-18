<?php
$query_flats = mysqli_query($mysqli, "SELECT * FROM flats");
$flats = mysqli_fetch_all($query_flats, MYSQLI_ASSOC);
$title = 'Квартиры';
include '../../admin/layouts/pages-head.php';
?>
<h1>Квартиры</h1>
    <form action="<?= 'http://'. $_SERVER['HTTP_HOST'] . '/management/post.php' ?>" method="post">
        <input type="hidden" name="action" value="del-flats">
        <table class="management__table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Краткое описание</th>
                <th>Стоимость</th>
                <th>Адрес</th>
                <th>Изменить</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($flats as $flat) : ?>
                <tr>
                    <td><?= $flat['id'] ?></td>
                    <td><?= $flat['title'] ?></td>
                    <td><?= $flat['desc_prev'] ?></td>
                    <td><?= $flat['cost'] ?></td>
                    <td><?= $flat['address'] ?></td>
                    <td><a href="<?= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?page=flat&id=' . $flat['id'] ?>">Изменить</a></td>
                    <td><input class="td-input" type="checkbox" name="deletes[]" value="<?= $flat['id'] ?>"></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <button class="btn" type="submit">Отправить</button>
    </form>
</div>
</body>
</html>
