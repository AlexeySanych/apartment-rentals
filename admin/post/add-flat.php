<?php
mysqli_query($mysqli, "INSERT INTO flats
    SET title='$title', desc_prev='$desc_prev', description='$description', cost='$cost', address='$address'");
$id = mysqli_insert_id($mysqli);
if ($_FILES) {
    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == 0) {
            $image_name = $_FILES['photo']['name'][$key];
            $tmp_name = $_FILES['photo']['tmp_name'][$key];
            $name =$_SERVER['DOCUMENT_ROOT'] . '/assets/img/apartments/' . $image_name;
            move_uploaded_file($tmp_name, $name);
            mysqli_query($mysqli, "INSERT INTO photos SET flat_id='$id', image_name='$image_name'");
        }
    }
}
header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=flats');