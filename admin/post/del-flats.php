<?php
if (isset($deletes)) {
    $id = implode(",", $deletes);
    $images_query = mysqli_query($mysqli, "SELECT image_name FROM photos WHERE flat_id IN ($id)");
    $images = mysqli_fetch_all($images_query, MYSQLI_ASSOC);
    foreach ($images as $image) {
        $name =$_SERVER['DOCUMENT_ROOT'] . '/assets/img/apartments/' . $image['image_name'];
        unlink($name);
    }
    mysqli_query($mysqli, "DELETE FROM flats WHERE id IN ($id)");
}
header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=flats');