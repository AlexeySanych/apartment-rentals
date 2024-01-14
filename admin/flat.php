<?php
$id = $_GET['id'];
$flat_query = mysqli_query($mysqli, "SELECT flats.*,GROUP_CONCAT(photos.image_name) AS images FROM flats JOIN photos ON flats.id = photos.flat_id WHERE flats.id = $id GROUP BY flats.id");
$flat = mysqli_fetch_array($flat_query, MYSQLI_ASSOC);
$images = explode(',', $flat['images']);
$action = 'http://'. $_SERVER['HTTP_HOST'] . '/management/post/upd-flat.php';
$title = 'Редактировать квартиру';
include '../../admin/layouts/pages-head.php';
?>
<h1>Редактирование квартиры</h1>
<?php include '../../admin/layouts/flat-form.php'; ?>

</div>
</body>
</html>