<form action="<?= 'http://'. $_SERVER['HTTP_HOST'] . '/management/post/message.php'?>" method="post">
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
