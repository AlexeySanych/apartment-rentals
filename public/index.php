<?php
include '../system/connectDB.php';

// SELECT * FROM `table` ORDER BY RAND() LIMIT 4

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
               <div class="quarters__room-wrapper">
                  <div class="quarters__room ">
                     <div class="quarters__photo">
                        <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/quarters/1.jpg" alt="room photo">
                     </div>
                     <p class="quarters__feature-m">1 комната</p>
                     <p class="quarters__feature-d">Однокомнатная квартира</p>
                     <p class="quarters__price">Сутки: <span>1 500 ₽</span></p>
                     <div class="quarterrs__footer">
                        <button class="quarters__adress">ул. Юбилейная 108</button>
                        <a class="quarters__btn btn" href="flat.php">Подробней</a>
                     </div>
                  </div>
               </div>
               <div class="quarters__room-wrapper">
                  <div class="quarters__room">
                     <div class="quarters__photo">
                        <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/quarters/2.jpg" alt="room photo">
                     </div>
                     <p class="quarters__feature-m">2 комнаты</p>
                     <p class="quarters__feature-d">Двухкомнатная квартира</p>
                     <p class="quarters__price">Сутки: <span>1 300 ₽</span></p>
                     <div class="quarterrs__footer">
                        <button class="quarters__adress">ул. Гагарина 89</button>
                        <a class="quarters__btn btn" href="flat.php">Подробней</a>
                     </div>
                  </div>
               </div>
               <div class="quarters__room-wrapper">
                  <div class="quarters__room">
                     <div class="quarters__photo">
                        <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/quarters/3.jpg" alt="room photo">
                     </div>
                     <p class="quarters__new">Новая квартира</p>
                     <p class="quarters__feature-m">3 комнаты</p>
                     <p class="quarters__feature-d">Трёхкомнатная квартира</p>
                     <p class="quarters__price">Сутки: <span>1 700 ₽</span></p>
                     <div class="quarterrs__footer">
                        <button class="quarters__adress"> ул. Шмидта 10</button>
                        <a class="quarters__btn btn" href="flat.php">Подробней</a>
                     </div>
                  </div>
               </div>
               <div class="quarters__room-wrapper">
                  <div class="quarters__room">
                     <div class="quarters__photo">
                        <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/quarters/5.jpg" alt="room photo">
                     </div>
                     <p class="quarters__feature-m">5 комнат</p>
                     <p class="quarters__feature-d">Пятикомнатная квартира</p>
                     <p class="quarters__price">Сутки: <span>4 100 ₽</span></p>
                     <div class="quarterrs__footer">
                        <button class="quarters__adress">ул. Власова 14</button>
                        <a class="quarters__btn btn" href="flat.php">Подробней</a>
                     </div>
                  </div>
               </div>
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