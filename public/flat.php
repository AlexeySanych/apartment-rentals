<?php

$id = (int)$_GET['flat'];
include '../system/connectDB.php';
$flat_query = mysqli_query($mysqli, "SELECT flats.*,GROUP_CONCAT(photos.image_name) AS images FROM flats JOIN photos ON flats.id = photos.flat_id WHERE flats.id = $id GROUP BY flats.id");
$flat = mysqli_fetch_array($flat_query, MYSQLI_ASSOC);

if (!$flat) {
    header('HTTP/1.1 404 Not Found');
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/errors/404.php');
}
$equipment = json_decode($flat['equipment'], true);
$images = explode(',', $flat['images']);

$title = "Квартрира";

include 'layouts/head.php';

?>

   <main class="main">
      <section class="flat">
         <div class="container">
            <h2 class="h2"><?= $flat['title']?></h2>
            <div class="flat-block">
               <div class="slider-wrapper">
                  <div class="swiper mySwiper2">
                     <div class="swiper-wrapper">
                         <?php
                            foreach ($images as $image) :
                         ?>
                            <div class="swiper-slide">
                                <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/apartments/<?= $image ?>" />
                            </div>
                         <?php endforeach;?>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
                   <div thumbsSlider="" class="swiper mySwiper">
                      <div class="swiper-wrapper">
                         <?php
                         foreach ($images as $image) :
                             ?>
                             <div class="swiper-slide">
                                 <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/apartments/<?= $image ?>" />
                             </div>
                         <?php endforeach;?>
                      </div>
                   </div>
               </div>
               <div class="flat__description">
                  <div class="flat__description__txt"> <?= $flat['description'] ?> </div>
                  <div class="apartment-card__cost"><?= $flat['cost'] ?> ₽ за сутки</div>
                  <div class="apartment-card__address"><?= $flat['address'] ?></div>
               </div>
            </div>
            <div class="flat__equipment">
               <p class="flat__equipment-title">Оснащение:</p>
               <ul class="flat__equipment-list">
                   <?php
                        foreach ($equipment as $item) :
                   ?>
                        <li class="flat__equipment-item"><?= $item ?></li>
                   <?php endforeach;?>
               </ul>
            </div>
            <a class="btn flat__all-btn" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/apartments.php">Смотреть все квартиры</a>
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