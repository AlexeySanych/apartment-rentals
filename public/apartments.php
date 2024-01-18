<?php
include '../system/connectDB.php';
$flats_query = mysqli_query($mysqli, "SELECT flats.*,GROUP_CONCAT(photos.image_name) AS images 
    FROM flats JOIN photos ON flats.id = photos.flat_id GROUP BY flats.id");
$flats = mysqli_fetch_all($flats_query, MYSQLI_ASSOC);
$title = "Наши квартриры";
include 'layouts/head.php';
?>
   <main class="main">
      <section class="apartments">
         <div class="container">
            <h2 class="h2">Наши квартиры</h2>
             <?php foreach ($flats as $flat): ?>
                <div class="apartment-card">
                   <div class="apartment-card__img">
                      <img src="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/assets/img/apartments/<?= substr($flat['images'], 0, strpos($flat['images'], ',')) ?>">
                   </div>
                   <div class="apartment-card__title"><?= $flat['title']  ?></div>
                   <div class="apartment-card__txt"><?= $flat['desc_prev'] ?></div>
                   <div class="apartment-card__cost"><?= $flat['cost'] ?> ₽ за сутки</div>
                   <div class="apartment-card__address"><?= $flat['address'] ?></div>
                   <a class="btn apartment-card__link" href="<?= 'http://' . $_SERVER['HTTP_HOST'] ?>/flat.php?flat=<?= $flat['id'] ?>">Подробнее</a>
                </div>
            <?php endforeach; ?>
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