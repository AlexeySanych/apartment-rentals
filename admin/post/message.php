<?php
if (isset($checkeds)) {
    $id = implode(",", $checkeds);
    mysqli_query($mysqli, "UPDATE reviews SET is_published = 0 WHERE id NOT IN ($id)");
    mysqli_query($mysqli, "UPDATE reviews SET is_published = 1 WHERE id IN ($id)");
}
header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=message');