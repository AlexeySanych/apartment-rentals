<?php
$id = $_GET['id'];
$flat_query = mysqli_query($mysqli, "SELECT flats.*,GROUP_CONCAT(photos.image_name) AS images FROM flats JOIN photos ON flats.id = photos.flat_id WHERE flats.id = $id GROUP BY flats.id");
$flat = mysqli_fetch_array($flat_query, MYSQLI_ASSOC);

$title = 'Редактировать квартиру';
include '../../admin/layouts/pages-head.php';
//var_dump($flat);
?>
<h1>Редактирование квартиры</h1>
<form action="<?= 'http://'. $_SERVER['HTTP_HOST'] . '/management/post/flat.php'?>" method="post" enctype="multipart/form-data">
    <input type="text" name="title" value="<?= $flat['title']?>">
    <input type="text" name="desc_prev" value="<?= $flat['desc_prev']?>">
    <input type="text" name="description" value="<?= $flat['description']?>">
    <input type="text" name="cost" value="<?= $flat['cost']?>">
    <input type="text" name="address" value="<?= $flat['address']?>">
    <input type="file" name="photo" multiple accept="image/*,image/jpeg">

    <button class="btn" type="submit">Отправить</button>
</form>
</div>
</body>
</html>