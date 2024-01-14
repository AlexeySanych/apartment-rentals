<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] && $_SERVER['REQUEST_METHOD'] == 'POST') {

    extract($_POST);

    include '../../../system/connectDB.php';

    mysqli_query($mysqli, "UPDATE flats
        SET title='$title', desc_prev='$desc_prev', description='$description', cost='$cost', address='$address'
        WHERE id=$id");


    foreach ($del_img as $image_name) {
        mysqli_query($mysqli, "DELETE FROM photos WHERE image_name IN ('$image_name')");
        unlink($_SERVER['DOCUMENT_ROOT'] . '/assets/img/apartments/' . $image_name);
    }

    if($_FILES)
    {
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
}

header('Location: http://'. $_SERVER['HTTP_HOST'] . '/management/management.php?page=flat&id=' . $id);