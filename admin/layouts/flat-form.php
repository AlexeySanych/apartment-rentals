<form class="flat-form" action="http://<?= $_SERVER['HTTP_HOST'] ?>/management/post.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="<?= $action ?>">
    <label>Заголовок<input type="text" name="title" value="<?= $flat['title'] ?? '' ?>"></label>
    <label>Превью<input type="text" name="desc_prev" value="<?= $flat['desc_prev']  ?? '' ?>"></label>
    <label>Описание<input type="text" name="description" value="<?= $flat['description']  ?? '' ?>"></label>
    <label>Стоимость<input type="text" name="cost" value="<?= $flat['cost']  ?? '' ?>"></label>
    <label>Адрес<input type="text" name="address" value="<?= $flat['address']  ?? '' ?>"></label>
    <label>Фото<input class="flat-form__photo" type="file" name="photo[]" multiple accept="image/*,image/jpeg"></label>
    <?php if ($title == 'Редактировать квартиру') : ?>
        <input type="hidden" name="id" value="<?= $id ?>">
        <p>Отметьте фото для удаления:</p>
        <div class="flat-form__img">
        <?php foreach ($images as $image) : ?>
                <label>
                    <input type="checkbox" name="del_img[]" value="<?= $image ?>">
                    <span><?= $image ?></span>
                    <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/apartments/<?= $image ?>" />
                </label>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <button class="btn" type="submit">Отправить</button>
</form>