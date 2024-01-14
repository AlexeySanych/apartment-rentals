<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/css/style.css">
    <title><?= $title; ?></title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__nav-bar">
            <button class="header__burger f-cc" type="button"><span> </span></button>
            <div class="header__logo">
                <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/logo.svg" alt="Logo">
                <p>Аренда</p>
            </div>
            <ul class="header__nav">
                <li class="header__nav-item"><a href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/index.php">Главная</a></li>
                <li class="header__nav-item"><a href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/apartments.php">Квартиры</a></li>
                <li class="header__nav-item"><a href="#contacts">Контакты</a></li>
            </ul>
            <div class="header__contacts">
                <a class="header__contacts-item" href="mailto:mail@mail.ru"><div class="header__contacts-icon f-cc"><img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/icons/mail.svg" alt="mail"></div><p>mail@mail.ru</p></a>
                <a class="header__contacts-item" href="tel:+78000000000"><div class="header__contacts-icon f-cc"><img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/icons/phone.svg" alt="phone"></div><p>+7 (800) 000-00-00</p></a>
            </div>
        </div>
    </div>
</header>