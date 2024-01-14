<?php
include '../system/connectDB.php';

$flats_query = mysqli_query($mysqli, "SELECT flats.*,GROUP_CONCAT(photos.image_name) AS images FROM flats JOIN photos ON flats.id = photos.flat_id GROUP BY flats.id ORDER BY RAND() LIMIT 4");
$flats = mysqli_fetch_all($flats_query, MYSQLI_ASSOC);

$title = "Аренда квартир";

include 'layouts/head.php';

?>
   <main class="main">
      <section class="rent">
         <div class="container">
            <div class="rent__body">
               <div class="rent__txt-wrapper">
                  <div class="rent__txt">
                     <h1 class="rent__title">Аренда квартир</h1>
                     <p class="rent__sub-title"><span>Посуточно или&nbsp;на&nbsp;длительный&nbsp;срок</span></p>
                     <a class="rent__btn btn" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/apartments.php">Смотреть варианты</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="rent__img">
            <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/rent-img.jpg" alt="apartments">
         </div>
      </section>
      <section class="advantage">
         <div class="container">
            <ul class="advantage__list">
               <li class="advantage__item">
                  <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/rent-advantage/documentation.svg" alt="documentation">
                  <p>Заключаем договоры, предоставляет отчётные документы</p>
               </li>
               <li class="advantage__item">
                  <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/rent-advantage/money.svg" alt="payment">
                  <p>Наличный и безналичный расчёт</p>
               </li>
               <li class="advantage__item">
                  <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/rent-advantage/time.svg" alt="time">
                  <p>Бронирование и заселение круглосуточно</p>
               </li>
               <li class="advantage__item">
                  <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/rent-advantage/safety.svg" alt="safety">
                  <p>Полная конфиденциальность</p>
               </li>
            </ul>
         </div>
      </section>
      <section class="quarters">
         <div class="container">
            <h2 class="h2">Наши квартиры</h2>
            <div class="quarters__body">

                <?php
                foreach ($flats as $flat):
                    ?>

                    <div class="quarters__room-wrapper">
                        <div class="quarters__room ">
                            <div class="quarters__photo">
                                <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/apartments/<?= substr($flat['images'], 0, strpos($flat['images'], ',')); ?>">
                            </div>
                            <p class="quarters__feature-d"><?= $flat['title']  ?></p>
                            <p class="quarters__price">Сутки: <span><?= $flat['cost'] ?></span></p>
                            <div class="quarterrs__footer">
                                <button class="quarters__adress"><?= $flat['address'] ?></button>
                                <a class="quarters__btn btn" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/flat.php?flat=<?= $flat['id'] ?>">Подробней</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>
            <a class="quarters__btn-all btn" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/apartments.php">Смотреть все квартиры</a>
         </div>
      </section>

       <?php
            include 'layouts/contacts.php';
            include 'layouts/reviews.php';
            include 'layouts/write-us.php';
       ?>

   </main>
<?php
include 'layouts/foot.php';