<?php
$id = $_GET['id'];
$flat_query = mysqli_query($mysqli, "SELECT flats.*,GROUP_CONCAT(photos.image_name) AS images FROM flats JOIN photos ON flats.id = photos.flat_id WHERE flats.id = $id GROUP BY flats.id");
$flat = mysqli_fetch_array($flat_query, MYSQLI_ASSOC);

$title = 'Редактировать квартиру';
include '../../admin/layouts/pages-head.php';
var_dump($flat);
?>

